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
    public function Index() {
        // $this->load->helper('html');

        $this->load->view('header');
        $data['user'] = '';
        $data['userType'] = '';
        $data['left'] = 'login';
        $data['center'] = 'start';
        $this->load->view('Index', $data);
        $this->load->view('footer');
    }

    public function loginValidate() {
        $this->load->model('validation', 'vd');
        if ($this->vd->validPass($this->input->post('login_id'), $this->input->post('password')) == true) {
            $user = $this->vd->getUserType($this->input->post('login_id'));
            $user_ = array(
                'id' => $this->input->post('login_id'),
                'type' => $user->type
            );
            $this->session->set_userdata($user_);
            redirect("/" . $user->type . "/Index");
        } else {
            redirect('/?error=User%20Password%20Not%20Valid!');
        }
    }

    function logout() {
        $user = array(
            'id' => $this->session->userdata('id'),
            'type' => $this->session->userdata('type')
        );
        $this->session->unset_userdata($user);
        $this->session->sess_destroy();
        redirect('/?error=Logged Out Successfully!');
    }

    function Search() {
        $content = $this->input->post('content');
        $this->load->model('validation', 'vi');
        $res = $this->vi->search($content);
        foreach ($res as $r) {
            echo '<a id="sugresult">'.$r.'</a>';
            echo '<br>';
        }
    }

}
