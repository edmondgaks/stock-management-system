<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
    public function home() {
        $this->load->view('Home');
    }
    
}

?>