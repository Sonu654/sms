<h1 style="text-align: center">Student Details</h1>
<form class="form-inline" enctype="multipart/form-data" name="addStdFrm">
    <div class="form-group">
        <?php //print_r($sem); ?>
        <label>Select Course :</label>     <select name='course' class="form-control">
            <?php
            for ($i = 0; $i <= count($course); $i++) {
                foreach ($course[$i] as $c) {
                    ?>
                    <option value='<?php echo $c; ?>'><?php echo $c; ?></option>
                    <?php
                }
            }
            ?>
        </select>
        <label>Select Semester: </label>
        <select name='sem' class="form-control">
            <?php for ($i = 0; $i < count($sem); $i++) {
                ?>    <option value='<?php echo $sem[$i]['sem_id']; ?>'><?php echo $sem[$i]['sem_name']; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
                <label>Registration No :</label> <input class="form-control" type="text" name="reg_no">
<label>Enrollment No :</label> <input class="form-control" type="text" name="enroll_no">
    </div>
    <div class="form-group">
        <label>Name :</label> 
        <input type="text" class="form-control" name="fname" placeholder="first">
        <input type="text" name="mname" placeholder="Mid" class="form-control">
        <input type="text" name="lname" placeholder="Last" class="form-control">
    </div>
    <div class="form-group">
        <label>Father Name :</label>
        <input type="text" name="fathername" class="form-control">
        <label>Mother Name :</label>
        <input type="text" name="mothername" class="form-control">
    </div>
    <div class="form-group">   
        <label>Gender : </label>
        <input type="checkbox" class="checkbox" value="g1">Male        
        <input type="checkbox" class="checkbox" value="g2">Female
        <label>Select Category: </label>
        <select name='cat' class="form-control">
            <?php for ($i = 0; $i < count($cat); $i++) {
                ?>    <option value='<?php echo $cat[$i]['cat_id']; ?>'><?php echo $cat[$i]['cat_name']; ?></option>
            <?php } ?>
        </select>

    </div>
    <div class="form-group">
        <label>Email :</label>
        <input type="email" name="uemail" class="form-control">
        <lable>Contact :</lable>
        <input type="text" name="phn" class="form-control">
    </div>
    
    <div class="form-group">
        <lable>Date of Birth :</lable>
        <input type="date" class="form-control">
        <lable>Img Path :</lable>
        <input type="file" name="img_url" class="form-control">
    </div>
    <div class="form-group">
        <input type="button" value="ADD" class="btn btn-primary">
    </div>
</form>