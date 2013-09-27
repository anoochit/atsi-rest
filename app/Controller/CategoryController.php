<?php
class CategoryController extends AppController {
	public $components = array('RequestHandler');

	public function index() {
        $category = $this->Category->find('all');
       
        $this->set(array(
            'category' => $category,
            '_serialize' => array('category')
        ));
        
    }

    public function view($id) {
        $category = $this->Category->findById($id);
        $this->set(array(
            'category' => $category,
            '_serialize' => array('category')
        ));
    }

}