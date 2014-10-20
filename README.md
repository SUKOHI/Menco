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
<<<<<<< HEAD
        'Sukohi\Menco\Facades\Menco',
=======
        'Sukohi\Menco\MencoServiceProvider'  
>>>>>>> ce43c350e4287e3b3a010ebe284ed7662775c525
    )

Usage
====

	echo Menco::get(array(
		'id' => 'remove', 
		'label' => 'remove', 
		'url' => URL::to('/'), 
		'class' => 'btn btn-danger', 
		'message' => 'Are you sure?'
	), array(
		'data' => 'data', 
		'data2' => 'data2', 
		'data3' => 'data3'
	));

	// All of the parameters are skippable.
