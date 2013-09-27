<?php

class Application extends AppModel {

	var $name = 'Application';
	var $belongsTo = array(
		'User' => array(
			'className' => 'User'
		)
	);

	public $hasAndBelongsToMany = array(
        'Category' => array(
            'className' => 'Category',
        ),

        'Taxonomy' => array(
            'className' => 'Taxonomy',
        ),
    
        'Store' => array(
            'className' => 'Store',
        )
    );
 
}
