[![MINI - A naked barebone PHP application](_install/php-mini.png)](http://www.php-mini.com)

# MINI

MINI is an extremely simple and easy to understand skeleton PHP application, reduced to the max.
MINI is NOT a professional framework and it does not come with all the stuff real frameworks have.
If you just want to show some pages, do a few database calls and a little-bit of AJAX here and there, without
reading in massive documentations of highly complex professional frameworks, then MINI might be very useful for you.
MINI is easy to install, runs nearly everywhere and doesn't make things more complicated than necessary.

#### MINI 2 is also in the making!

Have a look [here for MINI 2](https://github.com/panique/mini2).

## Features

- extremely simple, easy to understand
- simple but clean structure
- makes "beautiful" clean URLs
- demo CRUD actions: Create, Read, Update and Delete database entries easily
- demo AJAX call
- tries to follow PSR 1/2 coding guidelines
- uses PDO for any database requests, comes with an additional PDO debug tool to emulate your SQL statements
- commented code
- uses only native PHP code, so people don't have to learn a framework

## Forks of MINI

### TINY
 
MINI has a smaller brother, named [TINY](https://github.com/panique/tiny). It's similar to MINI, but runs without 
mod_rewrite in nearly every environment. Not suitable for live sites, but nice for quick prototyping.
 
MINI also has a bigger brother, named MINI2. It's in development and comes with an improved architecture, 
SASS-compiling, Twig, Unit Tests, etc.

### branch feature-better-view

This branch handles the view in a better (but more complicated) way. Have a look, it's self-explaining.

## Requirements

- PHP 5.3.0+
- MySQL
- mod_rewrite activated (tutorials below, but there's also [TINY](https://github.com/panique/tiny), a mod_rewrite-less 
version of MINI)

## Installation (in Vagrant, 100% automatic)

If you are using Vagrant for your development, then you can install MINI with one click (or one command on the
command line) [[Vagrant doc](https://docs.vagrantup.com/v2/getting-started/provisioning.html)]. MINI comes with a demo 
Vagrant-file (defines your Vagrant box) and a demo bootstrap.sh which automatically installs Apache, PHP, MySQL, 
PHPMyAdmin, git and Composer, sets a chosen password in MySQL and PHPMyadmin and even inside the application code, 
downloads the Composer-dependencies, activates mod_rewrite and edits the Apache settings, downloads the code from GitHub
and runs the demo SQL statements (for demo data). This is 100% automatic, you'll end up after +/- 5 minutes with a fully 
running installation of MINI2 inside an Ubuntu 14.04 LTS Vagrant box.

To do so, put `Vagrantfile` and `bootstrap.sh` from `_vagrant` inside a folder (and nothing else). 
Do `vagrant box add ubuntu/trusty64` to add Ubuntu 14.04 LTS ("Trusty Thar") 64bit to Vagrant (unless you already have 
it), then do `vagrant up` to run the box. When installation is finished you can directly use the fully installed demo 
app on `192.168.33.44`. As this just a quick demo environment the MySQL root password and the PHPMyAdmin root password 
are set to `12345678`, the project is installed in `/var/www/html/myproject`. You can change this for sure inside
`bootstrap.sh`.

## Auto-Installation on Ubuntu 14.04 LTS (in 10 seconds)

You can install MINI including Apache, MySQL, PHP and PHPMyAdmin, mod_rewrite, Composer, all necessary settings and even the passwords inside the configs file by simply downloading one file and executing it, the entire installation will run 100% automatically. See the bootstrap.sh file for more infos (and the default passwords). Keep in mind that this is quick dev setup, not a perfect choice for production for sure. This should work perfectly in every naked Ubuntu 14.04 LTS.

Download the installer script

```bash
wget https://raw.githubusercontent.com/panique/mini/master/_vagrant/bootstrap.sh
```

Make it executable [is this necessary ?]

```bash
chmod +x bootstrap.sh
```

Run it! Boooooom. Give it some minutes to perform all the tasks. And yes, you can thank me later :)

```bash
sudo ./bootstrap.sh
```

## Installation

1. Edit the database credentials in `application/config/config.php`
2. Execute the .sql statements in the `_install/`-folder (with PHPMyAdmin for example).
3. Make sure you have mod_rewrite activated on your server / in your environment. Some guidelines:
   [Ubuntu 14.04 LTS](http://www.dev-metal.com/enable-mod_rewrite-ubuntu-14-04-lts/),
   [Ubuntu 12.04 LTS](http://www.dev-metal.com/enable-mod_rewrite-ubuntu-12-04-lts/),
   [EasyPHP on Windows](http://stackoverflow.com/questions/8158770/easyphp-and-htaccess),
   [AMPPS on Windows/Mac OS](http://www.softaculous.com/board/index.php?tid=3634&title=AMPPS_rewrite_enable/disable_option%3F_please%3F),
   [XAMPP for Windows](http://www.leonardaustin.com/blog/technical/enable-mod_rewrite-in-xampp/),
   [MAMP on Mac OS](http://stackoverflow.com/questions/7670561/how-to-get-htaccess-to-work-on-mamp)

MINI runs without any further configuration. You can also put it inside a sub-folder, it will work without any 
further configuration.
Maybe useful: A simple tutorial on [How to install LAMPP (Linux, Apache, MySQL, PHP, PHPMyAdmin) on Ubuntu 14.04 LTS](http://www.dev-metal.com/installsetup-basic-lamp-stack-linux-apache-mysql-php-ubuntu-14-04-lts/)
and [the same for Ubuntu 12.04 LTS](http://www.dev-metal.com/setup-basic-lamp-stack-linux-apache-mysql-php-ubuntu-12-04/).

## Documentation

A very early documentation can be found on [php-mini.com/documentation](http://php-mini.com/documentation/).

## Server configs for

### nginx

TODO (please commit if you have a perfect config)

### IIS

TODO (please commit if you have a perfect config)

## Security

The script makes use of mod_rewrite and blocks all access to everything outside the /public folder.
Your .git folder/files, operating system temp files, the application-folder and everything else is not accessible
(when set up correctly). For database requests PDO is used, so no need to think about SQL injection (unless you
are using extremely outdated MySQL versions).

## Goodies

MINI comes with a little customized [PDO debugger tool](https://github.com/panique/pdo-debug) (find the code in
application/libs/helper.php), trying to emulate your PDO-SQL statements. It's extremely easy to use:

```php
$sql = "SELECT id, artist, track, link FROM song WHERE id = :song_id LIMIT 1";
$query = $this->db->prepare($sql);
$parameters = array(':song_id' => $song_id);

echo Helper::debugPDO($sql, $parameters);

$query->execute($parameters);
```

## License

This project is licensed under the MIT License.
This means you can use and modify it for free in private or commercial projects.

## Follow on Facebook

Follow the repo on [Facebook](https://www.facebook.com/pages/MINI-a-supersimple-PHP-application/1488883564703966).

## Support

If you want to support MINI, then rent your next server at
[A2Hosting](https://affiliates.a2hosting.com/idevaffiliate.php?id=4471&url=579) or donate a coffee via
[PayPal](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=P5YLUK4MW3LDG),
[GitTip](https://www.gittip.com/Panique/) or
[Flattr](https://flattr.com/submit/auto?user_id=panique&url=https%3A%2F%2Fgithub.com%2Fpanique%2Fmini).

## TODO: documentation

coming soon

## Quick-Start

#### The structure in general

The application's URL-path translates directly to the controllers (=files) and their methods inside 
application/controllers. 

`example.com/home/exampleOne` will do what the *exampleOne()* method in application/controllers/home.php says.

`example.com/home` will do what the *index()* method in application/controllers/home.php says.

`example.com` will do what the *index()* method in application/controllers/home.php says (default fallback).

`example.com/songs` will do what the *index()* method in application/controllers/songs.php says.

`example.com/songs/editsong/17` will do what the *editsong()* method in application/controllers/songs.php says and
will pass `17` as a parameter to it.

Self-explaining, right ?

#### Showing a view

Let's look at the exampleOne()-method in the home-controller (application/controllers/home.php): This simply shows
the header, footer and the example_one.php page (in views/home/). By intention as simple and native as possible.

```php
public function exampleOne()
{
    // load view
    require APP . 'views/_templates/header.php';
    require APP . 'views/home/example_one.php';
    require APP . 'views/_templates/footer.php';
}
```  

#### Working with data

Let's look into the index()-method in the songs-controller (application/controllers/songs.php): Similar to exampleOne,
but here we also request data. Again, everything is extremely reduced and simple: $this->model->getAllSongs() simply
calls the getAllSongs()-method in application/model/model.php.

```php
public function index()
{
    // getting all songs and amount of songs
    $songs = $this->model->getAllSongs();
    $amount_of_songs = $this->model->getAmountOfSongs();

   // load view. within the view files we can echo out $songs and $amount_of_songs easily
    require APP . 'views/_templates/header.php';
    require APP . 'views/songs/index.php';
    require APP . 'views/_templates/footer.php';
}
```

For extreme simplicity, all data-handling methods are in application/model/model.php. This is for sure not really
professional, but the most simple implementation. Have a look how getAllSongs() in model.php looks like: Pure and
super-simple PDO.

```php
public function getAllSongs()
{
    $sql = "SELECT id, artist, track, link FROM song";
    $query = $this->db->prepare($sql);
    $query->execute();
    
    return $query->fetchAll();
}
```

The result, here $songs, can then easily be used directly
inside the view files (in this case application/views/songs/index.php, in a simplified example):

```php
<tbody>
<?php foreach ($songs as $song) { ?>
    <tr>
        <td><?php if (isset($song->artist)) echo htmlspecialchars($song->artist, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($song->track)) echo htmlspecialchars($song->track, ENT_QUOTES, 'UTF-8'); ?></td>
    </tr>
<?php } ?>
</tbody>
```

## History

MINI is the successor of php-mvc. As php-mvc didn't provide a real MVC structure (and several people complained
about that - which is totally right!) I've renamed and rebuild the project.

## Dear haters, trolls and everything-sucks-people...

... MINI is just a simple helper-tool I've created for my daily work, simply because it was much easier to setup and to
handle than real frameworks. For daily agency work, quick prototyping and frontend-driven projects it's totally okay,
does the job and there's absolutely no reason to discuss why it's "shit compared to Laravel", why it does not follow 
several MVC principles or why there's no personal unpaid support or no russian translation or similar weird stuff. 
The trolling against Open-Source-projects (and their authors) has really reached insane dimensions.

I've written this unpaid, voluntarily, in my free-time and uploaded it on GitHub to share.
It's totally free, for private and commercial use. If you don't like it, don't use it.
If you see issues, then please write a ticket (and if you are really cool: I'm very thankful for any commits!).
But don't bash, don't complain, don't hate. Only bad people do so.

## Contribute

Please commit into the develop branch (which holds the in-development version), not into master branch
(which holds the tested and stable version).

## Changelog

**December 2014**
- [panique] renamed controller / view to singular
- [panique] added charset to PDO creation (increased security) 

**November 2014**
- [panique] auto-install script for Vagrant
- [panique] basic documentation
- [panique] PDO-debugger is now a static helper-method, not a global function anymore
- [panique] folder renaming
- [reg4in] JS AJAX calls runs now properly even when using script in sub-folder
- [panique] removed all "models", using one model file now
- [panique] full project renaming, re-branding

**October 2014**
- [tarcnux/panique] PDO debugging
- [panique] demo ajax call
- [panique] better output escaping
- [panique] renamed /libs to /core
- [tarcnux] basic CRUD (create/read/update/delete) examples have now an U (update)
- [panique] URL is now config-free, application detects URL and sub-folder
- [elysdir] htaccess has some good explanation-comments now
- [bst27] fallback for non-existing controller / method
- [panique] fallback will show error-page now
- [digitaltoast] URL split fix to make php-mvc work flawlessly on nginx
- [AD7six] security improvement: moved index.php to /public, route ALL request to /public

**September 2014**
- [panique] added link to support forum
- [panique] added link to Facebook page

**August 2014**
- [panique] several changes in the README, donate-button changes

**June 2014**
- [digitaltoast] removed X-UA-Compatible meta tag from header (as it's not needed anymore these days)
- [digitaltoast] removed protocol in jQuery URL (modern way to load external files, making it independent to protocol change)
- [digitaltoast] downgraded jQuery from 2.1 to 1.11 to avoid problems when working with IE7/8 (jQuery 2 dropped IE7/8 support)
- [panique] moved jQuery loading to footer (to avoid page render blocking)

**April 2014**
- [panique] updated jQuery link to 2.1
- [panique] more than 3 parameters (arguments to be concrete) are possible
- [panique] cleaner way of parameter handling
- [panique] smaller cleanings and improvements
- [panique] Apache 2.4 install information

**January 2014**
- [panique] fixed .htaccess issue when there's a controller named "index" and a base index.php (which collide)
