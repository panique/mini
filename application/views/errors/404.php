<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP MVC skeleton</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div>
    <h1 style="color: red; text-align: center;">404 Page Not Found</h1>
    <p>The page you requested may have been removed, had its name changed, or You may have mistyped the address.</p>
    <h3>The reasons might be</h3>
    <ul>
        <li>Clicking on a broken or out-of-date link from the search engine result page or a referring website.</li>
        <li>Misspelling the URL of the site in the address box.</li>
        <li>Clicking on a link where the page has been deleted or no longer exists.</li>
    </ul>
    <h3>Here are some suggestion</h3>
    <ul>
        <li>Retype the address</li>
        <li><a href="<?php echo URL ?>">Go back to Sitemap</a></li>
    </ul>
    <hr>
    <div>
    <?php echo $e; ?>
    </div>
</div>
</body>
</html>