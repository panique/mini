*This is an in-development project, in a very early stage! Please keep that in mind. The release of this thing might
be in early 2014.*

# PHP-MVC

An extremely simple and easy to understand MVC skeleton application, reduced to the max.
Everything is as simple as possible, as readable as possible and as manually as possible.
This project tries to be the extremely slimmed down opposite of big frameworks like Zend2, Symfony or Laravel.

## Why does this project exist ?

One of the biggest question in the PHP world is "How do I build an application ?".
It's hard to find a good base, a good file structure and useful information on that, but at the same time
there are masses of frameworks that might be really good, but really hard to understand, hard to use and extremely
complex. This project tries to be some kind of naked skeleton bare-bone for quick application building,
especially for the not-so-advanced coder.

### This project tries to promote clean and modern PHP coding, by

- fitting PSR 1/2 coding guidelines
- usage of PDO
- promoting the usage of Composer, in exactly the way it should be used
- more or less clean folder/file structure
- promoting developing with max. error reporting

## Installation

As this is just a preview, not a finished project: See the the TODO file.

## TODO

Content of DOCUMENTATION.md goes here !

## TODO

TODO file

## What is a model, a view, a controller

### Controller

TODO

### Model

A model is that part of the application that reads, manipulates, deletes etc. data, according to the information
the model gets from the controller. The definition of what a model is or should be is not *really* clear, as a class
that handles all the data of - in this example - the songs can be defined as a model, but also the container that
holds all the data from several models (song model, stats model, etc.) can be defined as "the model". Some MVC
constructs collect data from several models and put everything in a container (let's say $model) and pass this to the
view. The view only accesses this $model, not the real model objects.

### View

TODO

## License

This project is licensed under the MIT License.
This means you can use and modify it for free in private or commercial projects.

The MIT License (MIT)

Copyright (c) 2013 Panique

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
the Software, and to permit persons to whom the Software is furnished to do so,
subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

## Support this project via [PayPal](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=P5YLUK4MW3LDG) or [GitTip](https://www.gittip.com/Panique/)

If you think this script is useful and saves you a lot of work, then donating a small amount would be very cool.

[![Paypal](http://www.php-login.net/img/paypal.png)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=P5YLUK4MW3LDG) or via [GitTip](https://www.gittip.com/Panique/)


## Statistics (by BitDeli)

[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/panique/php-mvc/trend.png)](https://bitdeli.com/free "Bitdeli Badge")
