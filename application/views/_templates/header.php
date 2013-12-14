<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP MVC skeleton</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link href="<?php echo URL; ?>public/css/style.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <!-- our JavaScript -->
    <script src="<?php echo URL; ?>public/js/application.js"></script>
</head>
<body>
<!-- header -->
<div class="container">
    <!-- Info -->
    <div class="where-are-we-box">
        Everything in this box is loaded from <span class="bold">application/views/_templates/header.php</span> !
        <br />
        The green line is added via JavaScript (to show how to integrate JavaScript).
    </div>
    <h1>The header (used on all pages)</h1>
    <!-- demo image -->
    <h3>Demo image, to show usage of public/img folder</h3>
    <div>
        <img src="<?php echo URL; ?>public/img/demo-image.png" />
    </div>
    <!-- navigation -->
    <h3>Demo Navigation</h3>
    <div class="navigation">
        <ul>
            <!-- same like "home" or "home/index" -->
            <li><a href="<?php echo URL; ?>"><?php echo URL; ?>home</a></li>
            <li><a href="<?php echo URL; ?>home/exampleone"><?php echo URL; ?>home/exampleone</a></li>
            <li><a href="<?php echo URL; ?>home/exampletwo"><?php echo URL; ?>home/exampletwo</a></li>
            <!-- "songs" and "songs/index" are the same -->
            <li><a href="<?php echo URL; ?>songs/"><?php echo URL; ?>songs/index</a></li>
        </ul>
    </div>
    <!-- simple div for javascript output, just to show how to integrate js into this MVC construct -->
    <h3>Demo JavaScript</h3>
    <div id="javascript-header-demo-box">
    </div>
</div>
