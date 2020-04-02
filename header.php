<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Bryce Yoder">

  <title><?php echo get_bloginfo( 'name' ); ?></title>
  <script src="https://kit.fontawesome.com/cae1618de2.js" crossorigin="anonymous"></script>
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
    <div class="blog-header">
        <div class='header-content'>
            <a class="logo" href="<?php echo get_bloginfo('wpurl');?>"><img src='http://localhost/goshen_historical/wp-content/uploads/2020/04/logo.png'/></a>
            <img class='divider' src='http://localhost/goshen_historical/wp-content/uploads/2020/04/divider.png' />
            <nav class="blog-nav">
                <?php wp_list_pages( '&title_li=' ); ?>
            </nav>
            <img class='divider' src='http://localhost/goshen_historical/wp-content/uploads/2020/04/divider.png' />
            <div class='info'>
                <span>The Adam's Store</span><br />
                <span>124 S. Main St</span><br />
                <span>Goshen, IN 46526</span><br /><br />
                <span>(574) 975-0033</span>
                <a href='mailto:museum@goshenhistorical.org'><i>museum@goshenhistorical.org</i></a>
            </div>
            <div class='social-container'>
                <a href='https://facebook.com'><i class="fab fa-facebook-square"></i></a>
                <a href='https://instagram.com'><i class="fab fa-instagram"></i></a>
            </div>
            <img class='divider' src='http://localhost/goshen_historical/wp-content/uploads/2020/04/divider.png' />
            <b>Hours</b><br /><br />
            <span>Thur, Fri, Sat</span><br />
            <span><i>11:00 AM – 3:00 PM</i></span><br /><br />
            <span>First Friday</span><br />
            <span><i>3:00PM – 8:00PM</i></span><br /><br />
            <span><i>Other times by appointment</i></span>
        </div>
        <img class='header-background' src="http://localhost/goshen_historical/wp-content/uploads/2020/04/paper_tear.png">
    </div>
