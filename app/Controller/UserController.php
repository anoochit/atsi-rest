<?php
class UserController extends AppController {

	public $components = array('RequestHandler');

	public function index() {
        $users = $this->User->find('all');
       
        $this->set(array(
            'users' => $users,
            '_serialize' => array('users')
        ));
    }

}