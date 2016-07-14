
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $title; ?></title>
    <script src="../../../myblog/ckeditor/ckeditor.js"></script>
   <?php echo Asset::css('bootstrap.css'); ?>
   <?php echo Asset::css('style.css'); ?>
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav col-md-8">
          <a class="blog-nav-item active" href="/myblog/public">Home</a>
          <a href="/myblog/public/posts/add" class="blog-nav-item" >Add Posts</a>
          <a class="blog-nav-item" href="#">About author</a>
        </nav>
        <?php echo Form::open('/posts/search');?>

        <?php echo Form::input('search', Input::search('search', isset($search) ? $search : ''), array('class'=>'form-control')); ?>
        <?php echo Form::submit('submit'); ?>
        <?php echo Form::close(); ?>
        <!-- <form action="posts/search" class="navbar-form pull-right col-md-4" ">
          <input type="text" name="q" id="search-query" class="search-query span3 form-control" placeholder="Serach...">
          <input type="submit" name="search">
        </form> -->
      </div>
    </div>

    <div class="container">


      <div class="row">

        <div class="col-sm-8 blog-main">

       
        <?php echo $content; ?>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
 
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


  </body>
</html>
