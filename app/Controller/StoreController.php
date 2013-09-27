<?php
class StoreController extends AppController {

	public $components = array('RequestHandler');

	public function index() {
        $stores = $this->Store->find('all');
       
        $this->set(array(
            'stores' => $stores,
            '_serialize' => array('stores')
        ));
    }

}