Getting started with RukbatBitlyBundle
======================================

Setup
-----

RukbatBitlyBundle requires [cURL](http://it2.php.net/manual/en/book.curl.php) and [JSON](http://www.php.net/manual/en/book.json.php)

- Using the vendors script

Add rukbat/bitly-bundle as a dependency in your project's composer.json file:

```
{
    "require": {
        "rukbat/bitly-bundle": "dev-master"
    }
}
```

Or add to your deps

```
[RukbatBitlyBundle]
    git=git://github.com/rukbat/RukbatBitlyBundle.git
    target=bundles/Rukbat/BitlyBundle
```

... and run php bin/vendors install

... and add the Rukbat namespace to autoloader

``` php
<?php
   // app/autoload.php
   $loader->registerNamespaces(array(
    // ...
    'Rukbat' => __DIR__.'/../vendor/bundles',
  ));
```

- Add RukbatBitlyBundle to your application kernel

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Rukbat\BitlyBundle\RukbatBitlyBundle(),
    );
}
```
- Yml configuration

``` yml
# app/config/config.yml
rukbat_bitly:
    key: yourKey # Required
    login: yourLogin # Required
    password: null
    clientid: null
    secret: null
```
Visit [bitly your API key](http://bitly.com/a/your_api_key) for login and key parameters and [bitly doc](http://bitly.com/a/settings/advanced) for more details.

Usage
-----

 - Using service

Open your controller and call the service.

``` php
<?php
    $bitly = $this->get('RukbatBitly');
?>
```

Then you can use one of the methods of RukbatBitly class

``` php
<?php
    $result = $bitly->bitly_v3_shorten('http://www.contactlab.com/');
?>
```