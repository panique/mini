# TODO

FIX: Warning: Creating default object from empty value in D:\Entwicklung\Ampps\www\php-mvc\application\controller\songs.php on line 29

### Full documentation on how to use this
### Full documentation on how this works (graphics !)

"As manually as possible, as simple as possible. No automation when not needed."

### Autoloader for models
### "Autoloader" for header/footer
### Always open only one database connection (inject into model)
### Loading two models
### Composer tutorial
### Add SQL statement file
### Folder protection
### fix utf8 settings in SQL file

# Advanced TODO:

### Perfect code (?), rewrite code so PHPStorm notices disappear
### Paths: Use constants, directory separators etc.
### Controllers: Eventually work with GET/POST routes instead of page/action

# Ideas

1. basic version and advanced version ?

Basic version could be totally manually and reduced (manual require() of models and views),
advanced could automate things

# Code styles

### PSR 0/1/2/3
### Modern PHP does not use closing tags

# Installation guideline

1. TODO: Install mod_rewrite

2. Create a new database (and remember the name, you'll need that in step 5) and import the SQL file from the
application/_install folder (which contains demo data).

3. Change the .htaccess file from
RewriteBase /php-mvc/
to where you put this project, relative to the web root folder (usually /var/www). So when you put this project into
the web root, like directly in /var/www, then the line should look like or can be commented out:
RewriteBase /
If you have put the project into a sub-folder, then put the name of the sub-folder here:
RewriteBase /sub-folder/

4. Edit the application/config/config.php, change this line
define('URL', 'http://127.0.0.1/php-mvc/');
to where your project is. Real domain, IP or 127.0.0.1 when developing locally. Make sure you put the sub-folder
in here (when installing in a sub-folder) too, also don't forget the trailing slash !

5. Edit the application/config/config.php, change this lines
define('DB_TYPE', 'mysql');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'php-mvc');
define('DB_USER', 'root');
define('DB_PASS', 'mysql');
to your database credentials. If you don't have an empty database, create one. Only change the type `mysql` if you
know what you are doing.

# Useful information

1. SQLite does not have a rowCount() method (!). Keep that in mind in case you use SQLite.

2. Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
   This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php


