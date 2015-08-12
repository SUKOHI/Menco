Menco
=====

A PHP package mainly developed for Laravel to generate "postLink" like cakePHP has.  
(This is for Laravel 4.2. [For Laravel 5](https://github.com/SUKOHI/Menco))


Installation
====

Add this package name in composer.json

    "require": {
      "sukohi/menco": "1.*"
    }

Execute composer command.

    composer update

Register the service provider in app.php

    'providers' => [
        ...Others...,  
        'Sukohi\Menco\MencoServiceProvider',
    ]

Also alias

    'aliases' => [
        ...Others...,  
        'Menco' => 'Sukohi\Menco\Facades\Menco',
    ]

Usage
====

	echo Menco::get(array(
		'id' => 'remove', 
		'label' => 'remove', 
		'url' => URL::to('/'), 
		'class' => 'btn btn-danger', 
		'message' => 'Are you sure?', 

		'title' => 'title', // Optional: Property you want.
		'data-value' => 'value', // Optional: Property you want.
	), array(
		'data' => 'data', 
		'data2' => 'data2', 
		'data3' => 'data3'
	));  
	
All of the parameters are Optional.
        
License
====

This package is licensed under the MIT License.

Copyright 2014 Sukohi Kuhoh