# MINI

MINI is an extremely simple and easy to understand skeleton PHP application, reduced to the max.
MINI is NOT a professional framework and it does not come with all the stuff real frameworks have.
If you just want to show some pages, do a few database calls and a little-bit of AJAX here and there, without
reading in massive documentations of highly complex professional frameworks, then MINI might be very useful for you.
MINI is easy to install, runs nearly everywhere and doesn't make things more complicated than necessary.

## Features

- extremely simple, easy to understand
- encourages people to code according to PSR 1/2 coding guidelines
- promotes the usage of PDO
- promotes the usage of external libraries via Composer
- promotes development with max. error reporting
- promotes to comment code
- uses only native PHP code, so people don't have to learn a framework

## Requirements

- PHP 5.3.0+
- MySQL
- mod_rewrite activated (tutorials below)

## Installation

1. Edit the database credentials in `application/config/config.php`
2. Execute the .sql statements in the `_installation/`-folder (with PHPMyAdmin for example).
3. Make sure you have mod_rewrite activated on your server / in your environment. Some guidelines:
   [TODO Ubuntu 14.04 LTS, Ubuntu 12.04 LTS, EasyPHP on Windows, ...]

MINI runs without any further configuration.

## After installation

In case you run the script inside a sub-folder: Then the AJAX-calls will not work by default. To fix this, you'll need
to add the folder's name to all paths in AJAX-calls in the `public/js/application.js`. This will be fixed in future
versions.

## Security

The script makes use of mod_rewrite and blocks all access to everything outside the /public folder.
You .git folder/files, the application-folder and everything else is not accessible (when set up correctly).

## License

This project is licensed under the MIT License.
This means you can use and modify it for free in private or commercial projects.

## Support

[![Donate by server affiliate sale](_tutorial/support-a2hosting.png)](https://affiliates.a2hosting.com/idevaffiliate.php?id=4471&url=579)

## History

MINI is the successor of php-mvc. As php-mvc didn't provide a real MVC structure (and several people complained
about that - which is totally right!) I've renamed and rebuild the project.

## Dear haters, trolls and i-hate-everything-people...

... MINI is just a simple helper-tool I've created for my daily work, simply because it was much easier to setup and
handle than real frameworks. For daily agency work, quick prototyping and frontend-driven projects it's totally okay.

I've written this unpaid, voluntarily, in my free-time and uploaded it on GitHub to share.
It's totally free, for private and commercial use. If you don't like it, don't use it.
If you see issues, then write a ticket (and if you are really cool: commit
a fix!). But don't bash, don't complain, don't hate. There's no reason to do so.

## Contribute

Please commit into the develop branch (which holds the in-development version), not into master branch
(which holds the tested and stable version).

## Support / Donate

If you think this script is useful and saves you a lot of work, then think about supporting the project:

1. Donate via [PayPal](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=P5YLUK4MW3LDG), [GitTip](https://www.gittip.com/Panique/) or [Flattr](https://flattr.com/submit/auto?user_id=panique&url=https%3A%2F%2Fgithub.com%2Fpanique%2Fphp-mvc).
2. Rent your next server at [A2 Hosting](http://www.a2hosting.com/4471.html).
3. Contribute to this project. Feel free to improve this project with your skills.
