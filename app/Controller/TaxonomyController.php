<?php
class TaxonomyController extends AppController {

	public $components = array('RequestHandler');

	public function index() {
        $taxonomies = $this->Taxonomy->find('all');
       
        $this->set(array(
            'taxonomies' => $taxonomies,
            '_serialize' => array('taxonomies')
        ));
        
    }

    public function view($id) {
        $taxonomies = $this->Taxonomy->findById($id);
        $this->set(array(
            'taxonomies' => $taxonomies,
            '_serialize' => array('taxonomies')
        ));
    }
}