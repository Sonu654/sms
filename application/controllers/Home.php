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

        $this->load->view('header', ['title' => 'Login']);
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
            echo '<a id="sugresult">' . $r . '</a>';
            echo '<br>';
        }
    }

    function getSearchResult() {
        $this->load->model('validation', 'vi');
        //$daa = $this->input->post('content');
        $daa = 1611103;
        $res = $this->vi->getData($daa);
        echo '<table class="table table-responsive">'
        . '<tr>'
        . '<td>ROll</td>'
        . '<td>Registation No</td>'
        . '<td>Name</td>'
        . '<td>view</td>'
        . '</tr>';
        foreach ($res as $r) {
            echo '<tr>'
            . '<td>' . $r->roll . '</td>'
            . '<td>' . $r->registration_no . '</td>'
            . '<td>' . $r->firstName . ' ' . $r->midName . ' ' . $r->lastName . '</td>'
            . "<td><a href='" . site_url('Student\View\\' . $r->roll) . "'>view</a></td>"
            . "</tr>";
        }
        echo '</table>';
    }

    function GnrateResult() {
        $this->load->view('header', ['title' => 'Generate Result']);
        $data['left'] = 'Menu';
        $data['center'] = 'ResultFrm';
        $data['user'] = $this->session->userdata('id');
        $data['userType'] = $this->session->userdata('type');
        $this->load->model('Accadmics', 'ad');
        $data['sem'] = $this->ad->getSem();
        $this->load->view('index', $data);
        $this->load->view('footer');
    }

    function Result() {
        $this->load->view('header', ['title' => 'Result']);
        $data['left'] = 'menu';
        $data['center'] = 'Result';
        $data['user'] = $this->session->userdata('id');
        $data['userType'] = $this->session->userdata('type');
        $this->load->model('Accadmics', 'ad');
        $info = $this->input->get('stdRoll');
        $data['result']=$this->ad->getResult($info, $this->input->get('stdSem'));
        $this->load->view('index', $data);
        $this->load->view('footer');
    }

}
