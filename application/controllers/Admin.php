<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author Sanwal
 */
class Admin extends CI_Controller {

    function Index() {
        if (empty($this->session->userdata('id'))) {
            redirect('/');
        }
        $this->session->userdata('id');
        $this->load->view('header',['title'=>'Dashboard']);
        //echo $_SESSION['id'];
        $data['left'] = 'Menu';
        $data['center'] = 'Dashboard';
        $data['user'] = $this->session->userdata('id');
        $data['userType']= $this->session->userdata('type');
        $this->load->view('index', $data);
        $this->load->view('footer');
    }

    //
}

//put your code here

