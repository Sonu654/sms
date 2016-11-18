<?php
echo doctype('html5');
?>

<html>
    <head>
        <?php
        echo meta('viewport', 'width=device-width, initial-scale=1.0');
        echo meta('name', 'Student Management System');
        echo meta('discription', 'Student management system is an application that manage the records of students.');


        /*
         * To change this license header, choose License Headers in Project Properties.
         * To change this template file, choose Tools | Templates
         * and open the template in the editor.
         */
        ?>
        <script>
            base_url = "<?php echo base_url(); ?>";
            site_url = "<?php echo site_url(); ?>";
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

            .navbar-brand {
                padding: 0px;
            }
            .navbar-brand>img {
                height: 100%;
                padding: 15px;
                width: auto;
            }

            /* EXAMPLE 3
            
            line height is 20px by default so add 30px top and bottom to equal the new .navbar-brand 80px height  */

            .example3 .navbar-brand {
                height: 80px;
            }

            .example3 .nav >li >a {
                padding-top: 10px;
                padding-bottom: 30px;
            }
            .example3 .navbar-toggle {
                padding: 10px;
                margin: 25px 15px 25px 0;
            }





            .brand-centered .navbar-brand {
                display: flex;
                align-items: center;
            }





            /* CSS Transform Align Navbar Brand Text ... This could also be achieved with table / table-cells */
            .navbar-alignit .navbar-header {
                -webkit-transform-style: preserve-3d;
                -moz-transform-style: preserve-3d;
                transform-style: preserve-3d;
                height: 50px;
            }
            .navbar-alignit .navbar-brand {
                top: 50%;
                display: block;
                position: relative;
                height: auto;
                transform: translate(0,-50%);
                margin-right: 15px;
                margin-left: 15px;
            }





            .navbar-nav>li>.dropdown-menu {
                z-index: 9999;
            }

            body {
                font-family: "Lato";
            }
            
            #mid{
                margin: 90px 0; 
            }
            
            #lft_panel, #mid_panel, #rht_panel{
               
            }
        </style>
    </head>
    <body>
        <section id="header">
            <div class="example3">
                <nav class="navbar navbar-inverse navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo site_url(); ?>">
                              <!--  <img src="<?php echo base_url(); ?>assets/Img/logo.png" alt="" class="img-responsive" style="display: inline-block;">
                                <span style="display: inline-block;"></span>-->Student Managemt System
                            </a>
                        </div>
                      <!--  <div id="navbar3" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Nav header</li>
                                        <li><a href="#">Separated link</a></li>
                                        <li><a href="#">One more separated link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>-->
                        <!--/.nav-collapse -->
                    </div>
                    <!--/.container-fluid -->
                </nav>
            </div>

            <!--
            <nav class="navbar navbar-inverse navbar-fixed-top" role="banner" style="z-index: 9999;"> 
                <div class="container"> 
                    <div class="navbar-header"> 
                        <a class="navbar-brand" href="" style="background-color: #ffffff">
                            <img class="img-responsive" src="" style="display:inline-block;" title="Student Management System">
                            <span style="display: inline-block;">Student Managemt System</span>
                        </a> 
                    </div>

                </div>
            </nav>
            -->
        </section>