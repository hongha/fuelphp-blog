<?php foreach ($posts as $post) : ?>
    <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $post->title;?></h2>
            <p class="blog-post-meta"><?php echo $post->create_date;?><a href="#">Hongha</a></p>
            <?php echo Str::truncate($post->body, 300);?>
            ...
            <br>
            <p class="see_more"><a href="posts/view/<?php echo $post->id; ?>" >See more</a></p>
    </div>
    

<?php endforeach; ?>