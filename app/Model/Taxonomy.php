<?php

class Taxonomy extends AppModel {

	var $name = 'Taxonomy';

	public $hasAndBelongsToMany = array(
        'Application' => array(
            'className' => 'Application'
        )
    );

}