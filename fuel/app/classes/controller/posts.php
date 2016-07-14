<?php

class Controller_Posts extends Controller_Template
{



	 public function action_index()
 	{

	  	// $posts = Model_Post::find('all');
	  	$posts = Model_Post::find('all', array('order_by' => array('id' => 'desc')));
	    $data = array('posts'=>$posts);
	    $this->template->title = 'Index Posts';
	    $this->template->content = View::forge('posts/index', $data, false);


	}
	public function action_view($id)
	{
		$post = Model_Post::find('first', array(
			'where' => array(
				'id'=>$id
			)
		));
		$data = array('post'=>$post);
        $this->template->title = $post->title;
        $this->template->content = View::forge('posts/view', $data, false);
	}
	public function action_add()
	{
		if(Input::post('submit'))
		{
			$post = new Model_Post();
			$post->title = Input::post('title');
			$post->category = Input::post('category');
			$post->body = Input::post('body');
			$post->tags = Input::post('tags');
			$post->create_date =date('Y-m-d H:i:s');
			$post->save();
			Session::set_flash('success', 'Post Added');
			Response::redirect('/');
		}
		$data = array();
        $this->template->title = 'Add Post';
        $this->template->content = View::forge('posts/add', $data);
	}
	public function action_edit($id)
	{
		if(Input::post('submit')){
			$post = Model_Post::find(Input::post('post_id'));
			$post->title = Input::post('title');
			$post->category = Input::post('category');
			$post->body = Input::post('body');
			$post->tags = Input::post('tags');
			$post->create_date = date('Y-m-d H:i:s');

			$post->save();
			Session::set_flash('success', 'Post Updated');
			Response::redirect('/');

		}
		$post = Model_Post::find('first', array(
			'where' => array(
				'id'=>$id
			)
		));
		$data = array('post'=>$post);
        $this->template->title = 'Edit post';
        $this->template->content = View::forge('posts/edit', $data, false);
	}

	public function action_delete($id)
	{
		$post = Model_Post::find($id);
		$post->delete();
		Session::set_flash('success', 'Post deleted');
		Response::redirect('/');
	}
	public function action_search($search)
	{
		
		$query = DB::select('*')->from('posts');
		$query->having('title', 'like', '%$search%');
		// $query->having('category', 'like', '%$search%');
		// $query->having('body', 'like', '%$search%');
		// $query->having('tags', 'like', '%$search%');
			
		
	
		$data = array('post'=>$query);
        $this->template->title = 'Search';
        $this->template->content = View::forge('posts/search', $data, false);
	}
}