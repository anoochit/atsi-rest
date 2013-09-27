<?php
class ApplicationController extends AppController {
	public $components = array('RequestHandler');

	public function index() {
        $applications = $this->Application->find('all');
       
        $this->set(array(
            'applications' => $applications,
            '_serialize' => array('applications')
        ));
        
    }

    public function view($id) {
        $applications = $this->Application->findById($id);
        $this->set(array(
            'applications' => $applications,
            '_serialize' => array('applications')
        ));
    }

	/*
    public function view($id) {
        $recipe = $this->Recipe->findById($id);
        $this->set(array(
            'recipe' => $recipe,
            '_serialize' => array('recipe')
        ));
    }

    public function edit($id) {
        $this->Recipe->id = $id;
        if ($this->Recipe->save($this->request->data)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }

    public function delete($id) {
        if ($this->Recipe->delete($id)) {
            $message = 'Deleted';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }
    */
 
}