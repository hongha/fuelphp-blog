
<h1>Add post</h1>
<?php echo Form::open('posts/add');?>
	<div class="form-group">
		<?php echo Form::label('Title', 'title');?>
		<?php echo Form::input('title', Input::post('title', isset($post) ? $post->title : ''), array('class'=>'form-control')); ?>
	</div>
	<div class="form-group">
		<?php echo Form::label('Category', 'category');?>
		<?php echo Form::select('category', '0', array(
			'0' => 'Select Category',
			'Web Design' => 'Web Design',
			'Programing' => 'Programing',
			'Graphic Design' => 'Graphic Design'
		), array('class'=>'form-control')); ?>
	</div>
	<div class="form-group">
		<?php echo Form::label('Body', 'body');?>
		<?php echo Form::textarea('body', Input::post('body', isset($post) ? $post->body : ''),array('class' => 'form-control', 'id' => 'CKEDITOR1'));
		?>
	</div>
	<div class="form-group">
		<?php echo Form::label('Tags', 'tags');?>
		<?php echo Form::input('tags', Input::post('tags', isset($post) ? $post->tags : ''), array('class'=>'form-control')); ?>
	</div>
	<div class="actions">
		<?php echo Form::submit('submit'); ?>
	</div>
<?php echo Form::close(); ?>
<script>CKEDITOR.replace('CKEDITOR1');</script>