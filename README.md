Menco
=====

A PHP package mainly developed for Laravel to generate "postLink" like cakePHP has.  
(This is for Laravel 5+. [For Laravel 4.2](https://github.com/SUKOHI/Menco/tree/1.0))

Installation
====

Add this package name in composer.json

    "require": {
      "sukohi/menco": "2.*"
    }

Execute composer command.

    composer update

Register the service provider in app.php

    'providers' => [
        ...Others...,  
        Sukohi\Menco\MencoServiceProvider::class,
    ]

Also alias

    'aliases' => [
        ...Others...,  
        'Menco'   => Sukohi\Menco\Facades\Menco::class
    ]

Usage
====

	$extra_data = [
		'data' => 'data', 
		'data2' => 'data2', 
		'data3' => 'data3'
	];

	echo \Menco::get([
			'id' => 'your-id', 
			'label' => 'Your Label', 
			'url' => \URL::to('/'), 
			'class' => 'your-class-name', 
			'message' => 'Are you sure?', 
			'title' => 'Your Title', 	// You can add properties you want.
		], $extra_data);  
	
All of the parameters are Optional.

License
====

This package is licensed under the MIT License.

Copyright 2014 Sukohi Kuhoh