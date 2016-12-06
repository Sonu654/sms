<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Addmisssion
 *
 * @author Sanwal
 */
class Addministration extends CI_Controller {

    function Index() {
        if (empty($this->session->userdata('id'))) {
            redirect('/');
        }
        $this->session->userdata('id');
        $this->load->view('header', ['title' => 'Dashboard']);
        //echo $_SESSION['id'];
        $data['left'] = 'Menu';
        $data['center'] = 'Dashboard';
        $data['user'] = $this->session->userdata('id');
        $data['userType'] = $this->session->userdata('type');
        $this->load->view('index', $data);
        $this->load->view('footer');
    }

    function AddStd() {
        $this->load->view('header', ['title' => 'Add Student']);
        $data['left'] = 'Menu';
        $data['center'] = 'addStdFrm';
        $data['user'] = $this->session->userdata('id');
        $data['userType'] = $this->session->userdata('type');
        $this->load->model('Accadmics', 'ad');
        $data['course'] = $this->ad->getCourse();
        $data['sem'] = $this->ad->getSem();
        $data['cat'] = $this->ad->getCat();
        $this->load->view('index', $data);
        $this->load->view('footer');
    }

    function addStdDB() {
        $this->load->model('accadmics', 'ad');
        $roll = $this->ad->insertStd($this->input->post());
        redirect("/Addministration/AddStd?error=Student Registred Roll NO is $roll");
    }

    //

    function addMarks() {
        $this->load->model('accadmics', 'ad');
        $error = $this->ad->insertMarks($this->input->post());
        redirect("/Addministration/Marks?error=$error");
    }

    function getStdName() {
        $this->load->model('accadmics', 'ad');
        echo $this->ad->getName($this->input->post('roll'));
    }

    function getStdCourse() {
        $this->load->model('accadmics', 'ad');
        echo $this->ad->getCrs($this->input->post('roll'));
    }

    function Marks() {
        $this->load->view('header', ['title' => 'Update Student Marks']);
        $data['left'] = 'Menu';
        $data['center'] = 'MarksFrm';
        $data['user'] = $this->session->userdata('id');
        $data['userType'] = $this->session->userdata('type');
        $this->load->model('Accadmics', 'ad');
        $data['exam'] = $this->ad->getExams();
        $data['sem'] = $this->ad->getSem();
        //$data['sub'] = $this->ad->getSub();
        $this->load->view('index', $data);
        $this->load->view('footer');
    }

    function getStdSubject() {
        $this->load->model('accadmics', 'ad');
       echo $this->ad->getSub($this->input->post());
      //  print_r($this->ad->getSub(['sem'=>3,'roll'=>1611103]));
    }

}
