<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Validation
 *
 * @author Sanwal
 */
class Validation extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function validPass($user, $pass) {
        $q = $this->db->select('PASS')
                        ->where("user_id", $user)
                        ->get('login_info')
                        ->result_array()[0]['PASS'];
        if ($q == $pass)// print_r($q->result());
            return true;
        return false;
    }

    function getUserType($user) {
        $this->db->select('ut.type')
                ->from('login_info li')
                ->join('user_type ut', 'li.type_id=ut.type_id')
                ->where('li.user_id', $user);
        $q = $this->db->get();
        return $q->row();
    }

    function getUserName($user) {
        $this->db->select('li.user_id')
                ->from('login_info li')
                ->where('li.user_id', $user);
        $q = $this->db->get();
        return $q->row();
    }

    function search($content) {
        $c = array();
        $this->db->select('registration_no')
                ->like('registration_no', $content, 'after')
                ->from('student');
        $qe = $this->db->get_compiled_select();
        $q = $this->db->query($qe);
        if ($q->num_rows() > 0)
            foreach ($q->result() as $r) {
                $c[] = $r->registration_no;
            }

        $this->db->select('roll')
                ->like('roll', $content, 'after')
                ->from('student');
        $qe = $this->db->get_compiled_select();
        $q = $this->db->query($qe);
        if ($q->num_rows() > 0)
            foreach ($q->result() as $r) {
                $c[] = $r->roll;
            }

        $this->db->select(['firstName', 'lastName', 'midName'])
                ->like('firstName', $content, 'after')
                ->or_like('midName', $content, 'after')
                ->or_like('lastName', $content, 'after')
                ->from('student');
        $qe = $this->db->get_compiled_select();
        $q = $this->db->query($qe);
        if ($q->num_rows() > 0)
            foreach ($q->result() as $r) {
                if (empty($r->midName))
                    $c[] = $r->firstName . ' ' . $r->lastName;
                else
                    $c[] = $r->firstName . ' ' . $r->midName . ' ' . $r->lastName;
            }
        return $c;
    }
    function getData($data){
        $data = explode(' ',$data);
        $q=$this->db->select(['roll','registration_no','firstName','lastName','midName'])
                ->where('roll',$data[0])
                ->or_where('registration_no',$data[0])
                ->or_where('firstName',$data[0])
                ->or_where('midName',@$data[1])
                ->or_where('lastName',@$data[1])
                ->or_where('lastName',@$data[2])
                ->get('student');
        return $q->result();
    }
    
    function searchT($content = 'u') {
        $this->db->select('type_id')
                ->like('type_id', $content, 'after')
                ->from('user_type');
        $qe = $this->db->get_compiled_select();
        $q = $this->db->query($qe);
        $c = array();
        if ($q->num_rows() > 0)
            foreach ($q->result() as $r) {
                $c[] = $r->type_id;
            }
        return $c;
    }

//put your code here
}
