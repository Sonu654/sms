<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author Sanwal
 */
class Home extends CI_Controller {
    //put your code here
    public function Index(){
       // $this->load->helper('html');
        $this->load->view('Index');
    }
}
