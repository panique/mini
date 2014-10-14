CHANGE LOG
==========

** October 2014 **

- [bst27] fallback for non-existing controller / method
- fallback will show error-page now

** September 2014 **
- added link to support forum
- added link to Facebook page

** August 2014 **
- several changes in the README, donate-button changes

** June 2014 **
- [digitaltoast] removed X-UA-Compatible meta tag from header (as it's not needed anymore these days)
- [digitaltoast] removed protocol in jQuery URL (modern way to load external files, making it independent to protocol change)
- [digitaltoast] downgraded jQuery from 2.1 to 1.11 to avoid problems when working with IE7/8 (jQuery 2 dropped IE7/8 support)
- moved jQuery loading to footer (to avoid page render blocking)

** April 2014 **
- updated jQuery link to 2.1
- more than 3 parameters (arguments to be concrete) are possible
- cleaner way of parameter handling
- smaller cleanings and improvements
- Apache 2.4 install information

**January 4th 2014**
- fixed .htaccess issue when there's a controller named "index" and a base index.php (which collide)

**December 29th 2013**
- [grrnikos] fixed case-sensitive model file loading
