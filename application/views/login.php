<?php

echo validation_errors();

echo form_open('login/validate');

$in = array(
    'name' => 'login_id',
    'type'=>'email',
    'id' => '',
    'value' => '',
    'placeholder'=>'Email Address',
    'maxlength' => '50',
    'size'=>'',
    'style'=>'',
    'class'=>'form-control'
);
echo '<h3 style="color:white; padding:15px;">Login Crediminal\'s</h3>';
echo form_input($in);

$in = array(
    'name' => 'password',
    'type'=>'password',
    'id' => '',
    'value' => '',
    'placeholder'=>'Password',
    'maxlength' => '20',
    'size'=>'',
    'style'=>'',
    'class'=>'form-control'
);
echo '<br>';
echo form_input($in);

$in = array(
    'name' => 'Button',
    'type'=>'Submit',
    'id' => '',
    'value' => 'Login',
    'placeholder'=>'',
    'maxlength' => '20',
    'size'=>'',
    'style'=>'margin-left:70%; width:30%;',
    'class'=>'btn btn-default'
);
echo '<br>';
echo form_input($in);
