<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-11">
        <h1 style="text-align: center">Student Details</h1>
        <?php
        if (isset($_GET['error'])) {
            echo '<div class="alert alert-success">' . $_GET['error'] . '</div>';
        }
        ?>
        <form class="form-inline" action="<?php echo site_url('Addministration/addMarks'); ?>" method="post">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Roll No :</label>
                        <input type="text" class="form-control" name="roll" id="roll_name">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Sem</label>
                        <select name='sem' class="form-control" id="stdSem">
                            <?php for ($i = 0; $i < count($sem); $i++) {
                                ?>    <option value='<?php echo $sem[$i]['sem_id']; ?>'><?php echo $sem[$i]['sem_name']; ?></option>
<?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Name :</label>
                        <label id="stdName"></label>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="form-group">
                        <label>Course :
                        </label> <label id="stdCrs"></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Examination :</label>
                        <select name='exam' class="form-control">
                            <?php for ($i = 0; $i < count($exam); $i++) {
                                ?>    <option value='<?php echo $exam[$i]['exam_id']; ?>'><?php echo $exam[$i]['exam_name']; ?></option>
<?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Subject :</label>
                        <select name='sub' id="stdSub" class="form-control">
                            <?php /* for ($i = 0; $i < count($sub); $i++) {
                              ?>    <option value='<?php echo $sub[$i]['sub_id']; ?>'><?php echo $sub[$i]['sub_name']; ?></option>
                              <?php } */ ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Obtained Marks</label>
                        <input type="number" max="100" min="0" name="mrks" class="form-control"> 
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Insert">
            </div>
        </form>    
    </div>

</div>