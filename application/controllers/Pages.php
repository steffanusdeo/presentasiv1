<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $data = array('menu' => 'dashboard');
        $this->template->load('view_template', 'view_dashboard', $data);
    }

    function tables() {
        $data = array('menu' => 'table');
        $this->template->load('view_template', 'view_table', $data);
    }

    function profile() {
        $data = array('menu' => 'profile');
        $this->template->load('view_template', 'view_profile', $data);
    }

    function maps() {
        $data = array('menu' => 'maps');
        $this->template->load('view_template', 'view_maps', $data);
    }

}
