<section id="mid">
    <div class="container-fluid">
        <div class="col-sm-3">
            <nav class="navbar navbar-inverse wet-asphalt leftNav" >
                <?php echo '<h2 style="text-align:center; display:inline">Welcome '.$user.'</h2>'; if(!empty($user)){
                    ?>
                <a class="btn btn-link" href="<?php echo site_url('/Home/Logout') ?>" style="display: inline" title="Logout"><span class="glyphicon glyphicon-log-out" ></span></a>
                    <?php 
                }
                $this->view($left,$userType); ?>
            </nav>
        </div>
        <div class="col-sm-6" style="background-color:#ecf0f1;" id="mid_panel" >
            <div class="row" style=" height: 500px;">
                <?php $this->view($center); ?>
            </div>
        </div>
        <div class="col-sm-3" id="rht_panel">
            <?php $this->view('feeds'); ?>
        </div>
    </div>
</section>