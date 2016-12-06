<?php
echo doctype('html5');
?>

<html>
    <head>
        <?php
        echo '<title>'.$title.'</title>';
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
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/myJquery.js"></script>


        <style type="text/css">
            @media print{
                #rht_panel{
                    display: none;
                }
            }
            .navbar {
                background-color:rgb(64, 64, 64);
                background-image: none;
                color:white;
                text-align: center;


            }
            *{
                color:#fffff;
                padding-top: 5px;
                padding-left: 2px;
            }

            .navbar-brand {
                padding: 0px;
            }
            .navbar-brand>img {
                height: 100%;
                padding: 15px;
                width: auto;
            }

            #mid{
                margin-top: 80px;
                margin-bottom: 80px;
            }

            .leftNav{
                height:500px; 
                overflow: hidden; 
                text-align: left;
            }

            .leftNav:hover{
                overflow-y: auto;
            }

            /* Let's get this party started */
            ::-webkit-scrollbar {
                width: 8px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
                -webkit-border-radius: 10px;
                border-radius: 10px;
            }

            /* Handle */
            ::-webkit-scrollbar-thumb {
                -webkit-border-radius: 10px;
                border-radius: 10px;
                background: rgba(255,0,0,0.8); 
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
            }
            ::-webkit-scrollbar-thumb:window-inactive {
                background: rgba(255,0,0,0.4); 
            }

            #searchBox {
                margin: 0 10%;
                margin-top: 200px;
                width:80%;
                -webkit-transition: width 0.4s ease-in-out;
                transition: width 0.4s ease-in-out;
            }

            .suggest{
                margin: 0 10%;
                width:80%;
                padding:0 10px;
                color:black;
                height: auto;
                z-index: 9999;
                border:1px solid  #CCCCCC;
                -webkit-border-bottom-left-radius: 5px;
                -webkit-border-bottom-right-radius: 5px;
                display: none;
            }
            .searchResult{
                border:solid 1px green;
                margin: 0 5%;
                width:90%;
                padding:0 10px;
                color:black;
                height: auto;
                z-index: 9999;
                border:1px solid  #CCCCCC;
                -webkit-border-bottom-left-radius: 5px;
                -webkit-border-bottom-right-radius: 5px;
                display: none;
            }
            
            #sugresult{
                cursor:pointer;
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
                                <span style="display: inline-block;"></span>-->Student Management System
                            </a>
                        </div>
                    </div>

                </nav>
            </div>
        </section>