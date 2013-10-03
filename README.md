PHP Project Skeleton
====================

I needed to stop reinventing the wheel everything I was doing a semi-basic PHP site. This is a nice middleground where you want to have an organized project setup, but don't really need something as verbose as the wonderful [Laravel](http://laravel.com)

Setup
-----

This project assumes that you have [Composer](http://getcomposer.org) installed. If not, follow the steps on the composer project page.

Once that's done, add any additional php components you want to include in your project to `composer.json` and install the components:

	composer install

Or, if you didn't install composer globally:
	
	php /path/to/composer.phar install

Once installation is done, you can use the included Makefile to move some of the related vendor assets to your public directory. This will have to be done anytime a composer package is updated (like bootstrap, which is included by default)

	make assets

And, finally, when you are done hacking away at `asset_src/less/main.less`, run this make command to build your main css file in `public/assets/css/main.min.css`

	make less

Then, make sure your webserver is pointing to the `public` directory as your project's webroot, or use PHP's built in webserver to test everything out (Run from within the public folder):

	php -S localhost:2000

License
-------

This is licensed under the BSD 2-Clause License to keep things nice and simple. See `LICENSE` for the actual verbage.