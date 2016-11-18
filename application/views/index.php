<section id="mid">
    <div class="container-fluid">
        <div class="col-sm-3">
            <nav class="navbar navbar-inverse wet-asphalt" style=" height: 515px;">
                <?php $this->view($left); ?>
            </nav>
        </div>
        <div class="col-sm-6" style="background-color:#ecf0f1;" id="mid_panel" >
            <div class="row" style=" height: 515px;">
                <?php $this->view($center); ?>
            </div>
        </div>
        <div class="col-sm-3" id="rht_panel">
            <?php $this->view('feeds'); ?>
        </div>
    </div>
</section>