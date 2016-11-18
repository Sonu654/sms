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
        if($q==$pass)// print_r($q->result());
            return true;
    return false;
    }
    
    function getUserType($user){
        $this->db->select('ut.type')
                ->from('login_info li')
                ->join('user_type ut','li.type_id=ut.type_id')
                ->where('li.user_id',$user);
        $q= $this->db->get();
        return $q->row();
    }

//put your code here

    function test() {
        $rs = $this->db->select()
                ->get('sms_student');
        $res = $rs->result;
    }

}
