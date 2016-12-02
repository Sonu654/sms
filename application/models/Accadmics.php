<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Accadmics
 *
 * @author Sanwal
 */
class Accadmics extends CI_Model {

    //put your code here

    function getCourse() {
        $q = $this->db->select('Course_id')
                ->order_by('dept_id')
                ->get('course');
        foreach ($q->result_array() as $res)
            $result[] = $res;
        return $result;
    }

    function getCat() {
        $q = $this->db->select(['Cat_id', 'cat_name'])
                ->order_by('Cat_id')
                ->get('category');
        foreach ($q->result_array() as $res)
            $result[] = $res;
        return $result;
    }

    function getSem() {
        $q = $this->db->select(['sem_id', 'sem_name'])
                ->order_by('sem_id')
                ->get('semster');
        foreach ($q->result_array() as $res)
            $result[] = $res;
        return $result;
        // return $q->row_array();;
    }

    function getExams() {
        $q = $this->db->select(['exam_id', 'exam_name'])
                ->order_by('exam_id')
                ->get('examinition');
        foreach ($q->result_array() as $res)
            $result[] = $res;
        return $result;
    }

}
