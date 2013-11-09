# Structure

@TODO: dokumentation
@TODO: infografik




As manually as possible, as simple as possible. No automation when not needed.


# TODO:

Always open only one database connection
Loading two models
TODO: Composer tutorial

# Advanced TODO:

Perfect code (?), rewrite code so PHPStorm notices disappear
Paths: Use constants, directory seperators etc.

# Code styles

PSR 1/2
Modern PHP does not use closing tags

# Installation guideline

1. Change the .htaccess file from
RewriteBase /php-mvc/
to where you put this project, relative to the web root folder (usually /var/www). So when you put this project into
the web root, like directly in /var/www, then the line should look like or can be commented out:
RewriteBase /
If you have put the project into a sub-folder, then put the name of the sub-folder here:
RewriteBase /sub-folder/

2. Edit the application/config/config.php, change this line
define('URL', 'http://127.0.0.1/php-mvc/');
to where your project is. Real domain, IP or 127.0.0.1 when developing locally. Make sure you put the sub-folder
in here (when installing in a sub-folder) too, also don't forget the trailing slash !

3. Edit the application/config/config.php, change this lines
define('DB_TYPE', 'mysql');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'php-mvc');
define('DB_USER', 'root');
define('DB_PASS', 'mysql');
to your database credentials. If you don't have an empty database, create one. Only change the type `mysql` if you
know what you are doing.

# Useful information

SQLite does not have a rowCount() method (!). Keep that in mind.
