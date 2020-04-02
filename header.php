<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo get_bloginfo( 'name' ); ?></title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/kok3gzl.css">
  <link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head();?>
</head>

<body>

  <div class="container">

    <div class="blog-header">
        <div class='header-content'>
            <a class="logo" href="<?php echo get_bloginfo('wpurl');?>"><img src='http://localhost/goshen_historical/wp-content/uploads/2020/04/logo.png'/></a>
            <img class='divider' src='http://localhost/goshen_historical/wp-content/uploads/2020/04/divider.png' />
            <nav class="blog-nav">
                <a class="blog-nav-item active" href="#">Home</a>
                <?php wp_list_pages( '&title_li=' ); ?>
            </nav>
            <img class='divider' src='http://localhost/goshen_historical/wp-content/uploads/2020/04/divider.png' />
            <div class='address'>
                <span>The Adam's Store</span><br />
                <span>124 S. Main St</span><br />
                <span>Goshen, IN 46526</span><br />
            </div>
        </div>
        <img class='header-background' src="http://localhost/goshen_historical/wp-content/uploads/2020/04/paper_tear.png">
    </div>
