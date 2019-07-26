<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Template for Bootstrap</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
  <?php wp_head();?>
</head>

<body>

	<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="header">
                    <div id="headerimg">
                        <img src="<?php header_image(); ?>" class="img-fluid" alt="vienna events" />
                    </div>
                <div>
            </div>
        </div>
    </div>


  <div class="container">
    <div class="row">
        <h1 class=""><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
        <p class=""><?php echo get_bloginfo( 'description' ); ?></p>
    </div><hr>
    <nav class="navbar">
        <a class="nav-link" href="#">Home</a>
        <?php wp_list_categories( '&title_li=' ); ?>
        <?php wp_list_pages( '&title_li=' ); ?>
    </nav> <hr>   
</div> 