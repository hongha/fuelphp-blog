	<div class="blog-post">
            <h2 class="blog-post-title"><?php echo $post->title;?></h2>
            <p class="blog-post-meta"><?php echo $post->create_date;?>	<a href="#">Hongha</a></p>
            <?php echo $post->body;?>
    </div>
    <li>Category: <?php echo $post->category;?></li>
    <li>Tags: <?php echo $post->tags;?></li>
    <hr>
    <a href="/myblog/public/posts/edit/<?php echo $post->id; ?>" class="btn btn-primary">Edit</a>
    <a href="/myblog/public/posts/delete/<?php echo $post->id; ?>" class="btn btn-danger">Delete</a>
