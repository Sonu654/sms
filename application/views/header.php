<?php
    echo doctype('html5');
?>

<html>
    <head>
        <?php
        echo meta('viewport','width=device-width, initial-scale=1.0');
        echo meta('name', 'Student Management System');
        echo meta('discription', 'Student management system is an application that manage the records of students.');


        /*
         * To change this license header, choose License Headers in Project Properties.
         * To change this template file, choose Tools | Templates
         * and open the template in the editor.
         */
        ?>
        <script>
            base_url ="<?php echo base_url(); ?>";
            site_url ="<?php echo site_url(); ?>";
        </script>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css"/>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.2.1.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

        <style type="text/css">
    .navbar {
        background-color:#8e44ad;
        background-image: none;
        color:white;
        text-align: center;
            
            
    }
    *{
        text-align: center;
    }
</style>
    </head>
    <body>
        <section id="header">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="banner" style="z-index: 9999;"> 
                <div class="container"> 
                    <div class="navbar-header"> 
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
                            <span class="sr-only">Toggle navigation</span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span> 
                        </button> 
                        <a class="navbar-brand" href="<?php echo site_url(); ?>" style="background-color: #ffffff">
                            <img class="img-responsive" src="<?php echo base_url(); ?>logo.png" title="Student Management System">
                        </a> 
                    </div>

                </div>
            </nav>

        </section>