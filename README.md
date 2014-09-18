Menco
=====

A PHP package mainly developed for Laravel to generate "postLink" like cakePHP has.

Installation&setting for Laravel
====

After installation using composer, add the followings to the array in  app/config/app.php

    'providers' => array(  
        ...Others...,  
        'Sukohi\Menco\MencoServiceProvider'  
    )

Also

    'aliases' => array(  
        ...Others...,  
        'Sukohi\Menco\MencoServiceProvider'  
    )

Usage
====

	echo Menco::get(array(
		'id' => 'remove', 
		'label' => 'remove', 
		'url' => URL::to('/'), 
		'class' => 'btn btn-danger', 
		'message' => 'Are you sure?'
	));

	// All of the parameters are skippable.
