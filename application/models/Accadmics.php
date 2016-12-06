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

    function getInfo($data) {
        $sel = array(
            'st.roll', 'st.firstName', 'st.lastName', 'st.midName',
            'cs.course_name', 'dp.dept_name'
        );
        $this->db->select($sel)
                ->from('student st')
                ->where('st.roll', "$data")
                ->join('course cs', 'st.course_id=cs.course_id')
                ->join('department dp', 'cs.dept_id=dp.dept_id');

        $qe = $this->db->get_compiled_select();
        $qe = $this->db->query($qe);
        //  print_r($qe->result_array());
        return $qe->result_array();
    }

    function getMarks($data, $sem) {
        $sel = array(
            'mrk.sub_id', 'mrk.exam_id', 'mrk.marks', 'sub.sub_name'
        );
        $this->db->select($sel)
                ->from('marks mrk')
                ->where('mrk.roll', "$data")
                ->where('mrk.sem_id', $sem)
                ->order_by('mrk.sub_id')
                ->order_by('mrk.exam_id')
                ->join('student st', 'st.roll=mrk.roll')
                ->join('subject sub', 'sub.sub_id=mrk.sub_id');

        $qe = $this->db->get_compiled_select();
        $qe = $this->db->query($qe);
        // print_r($qe->result_array());
        return $qe->result_array();
    }

    function getSemName($sem) {
        $q = $this->db->select('sem_name')
                ->where('sem_id', $sem)
                ->get('semster');
        return $q->result_array()[0]['sem_name'];
    }

    function getResult($data, $sem) {
        $d['info'] = $this->getInfo($data, $sem);
        $d['info'][0]['sem'] = $this->getSemName($sem);
        $d['marks'] = $this->getMarks($data, $sem);
        return $d;
    }

    function getNewRoll() {
        $q = $this->db->select_max('roll')
                ->get('student');
        return $q->result_array()[0]['roll'] + 1;
    }

    function insertStd($info) {
        // print_r($info);
        $student = array(
            'roll' => $this->getNewRoll(),
            'registration_no' => $info['reg_no'],
            'enroll_no' => $info['enroll_no'],
            'FirstName' => $info['fname'],
            'midName' => $info['mname'],
            'lastName' => $info['lname'],
            'session' => date('Y'),
            'std_img_path' => '//',
            'fatherName' => $info['fathername'],
            'motherName' => $info['mothername'],
            'father_contact' => $info['fcontact'],
            'email' => $info['uemail'],
            'gen_id' => $info['gender'],
            'contact' => $info['phn'],
            'cat_id' => $info['cat'],
            'dob' => $info['dob'],
            'course_id' => $info['course']
        );
        $this->db->insert('student', $student);
        return $student['roll'];
    }

    function getName($roll) {
        $q = $this->db->select(['firstName', 'midName', 'lastName'])
                ->where('roll', $roll)
                ->get('student');
        foreach ($q->result() as $r) {
            if (empty($r->midName))
                $name = $r->firstName . ' ' . $r->lastName;
            else
                $name = $r->firstName . ' ' . $r->midName . ' ' . $r->lastName;
        }
        return @$name;
    }

    function getCrs($roll) {
        $q = $this->db->select(['cs.Course_name', 'cs.Course_id'])
                ->from('student st')
                ->join('course cs', 'st.course_id=cs.Course_id')
                ->where('st.roll', $roll);
        $q = $this->db->get();
        echo @$re = "<input type='hidden' name='crs' id='stdCrsid' value='" . $q->result_array()[0]['Course_id'] . "'>" . $q->result_array()[0]['Course_name'];
        //return $re;
    }

    function getStdCrs($roll) {
        $q = $this->db->select('course_id')
                ->where('roll', $roll)
                ->get('student');
        return $q->result()[0]->course_id;
    }

    function getSub($info) {
        $crs = $this->getStdCrs($info['roll']);
        $q = $this->db->select(['sub_id', 'sub_name'])
                ->order_by('sub_id')
                ->where('sem_id', $info['sem'])
                ->where('course_id', $crs)
                ->get('subject');
        $result = '';
        foreach ($q->result() as $res)
            $result .= '<option value="' . $res->sub_id . '">' . $res->sub_name . '</option>';
        return $result;
        // $this->getStdCrs($info['roll']);
    }

    function insertMarks($info) {
        $data = array(
            'roll' => $info['roll'],
            'sem_id' => $info['sem'],
            'exam_id' => $info['exam'],
            'sub_id' => $info['sub'],
            'marks' => $info['mrks']
        );
        if ($this->db->insert('marks', $data))
            $error = 'Marks Updated...!';
        else
            $error = 'ERROR Unable to Update';
        return @$error;
    }

}
