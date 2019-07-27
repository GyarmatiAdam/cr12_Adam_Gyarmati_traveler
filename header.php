<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Adam's Traveler</title>
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
        <div class="text-right col-sm-5">
            <h1 class=""><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
        </div>
        <div class="text-left col-sm-7">
            <p class=""><?php echo get_bloginfo( 'description' ); ?></p>
        </div>
    </div>
</div><hr>
<div class="container">
    <div class="row">
        <div class="col-sm-12 bg-info">
            <nav class="navbar">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <p class="dropdown-item"><?php wp_list_pages( '&title_li=' ); ?></p>
                    </div>
                </div>
                <?php wp_list_categories( '&title_li=' ); ?>
            </nav> 
        </div> 
    </div> <br>
</div><hr>