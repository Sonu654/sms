<h1 style="text-align: center">Student Details</h1>
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <form class="form-inline" action="<?php echo site_url('Home/Result');?>" method="get">
            <div class="form-group">
                <label>Semester : </label>
                <select name='stdSem' class="form-control">
            <?php for ($i = 0; $i < count($sem); $i++) {
                ?>    <option value='<?php echo $sem[$i]['sem_id']; ?>'><?php echo $sem[$i]['sem_name']; ?></option>
            <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <lable for="roll">Roll No. :</lable>
                <input type="text" class="form-control" name="stdRoll" required="required">
            </div>
            <div class="form-group center-block">
                <input type="Submit" class="btn btn-primary" value="Generate">
            </div>
        </form>
    </div>
    <div class="col-sm-3"></div>
</div>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

