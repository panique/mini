<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MVC skeleton</title>
    <link href="<?php echo URL; ?>/public/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Header-Navigation -->
    <div class="container">
        <h2>Navigation (everything in this box is loaded from application/views/_templates/header.php)</h2>
        <div class="navigation">
            <ul>
                <!-- same like "home" or "home/index" -->
                <li><a href="<?php echo URL; ?>"><?php echo URL; ?>home</a></li>
                <li><a href="<?php echo URL; ?>home/exampleone"><?php echo URL; ?>home/exampleone</a></li>
                <li><a href="<?php echo URL; ?>home/exampletwo"><?php echo URL; ?>home/exampletwo</a></li>
                <!-- "songs" and "songs/index" are the same -->
                <li><a href="<?php echo URL; ?>songs/"><?php echo URL; ?>songs/index</a></li>
                <li>
                    <a href="<?php echo URL; ?>songs/multiplemodels"><?php echo URL; ?>
                        songs/multiplemodels (two models in one controller)
                    </a>
                </li>
            </ul>
        </div>
    </div>
