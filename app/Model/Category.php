<?php

class Category extends AppModel {

	var $name = 'Category';

	public $hasMany = array(
        'SubCategory' => array(
            'className' => 'Category',
        )
    );

    public $hasAndBelongsToMany = array(
        'Application' => array(
            'className' => 'Application'
        )
    );


}
