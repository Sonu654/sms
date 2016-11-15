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
    
    function validPass($user,$pass){
        $this->db->select('pass')
                ->from('login_info')
                ->where("user_id",$user)
                ->get();
        return result();
    }    //put your code here
}
