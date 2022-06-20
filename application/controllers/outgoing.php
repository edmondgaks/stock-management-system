<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class outgoing extends CI_Controller {
    public function outgoing() {
        $this->load->view('Outgoing');
    }
}

?>