<h1 style="text-align: center">Student Details</h1>
<?php if(isset($_GET['error'])){
    echo '<div class="alert alert-success">'.$_GET['error'].'</div>';
} ?>
<form class="form-inline" name="addStdFrm" action="<?php echo site_url('Addministration/AddStdDB'); ?>" method="post">
    <div class="form-group">
        <?php //print_r($sem); ?>
        <label>Select Course :</label>     <select name='course' class="form-control">
            <?php
         
            for ($i = 0; $i < count($course); $i++) {
                //foreach ($course as $c) {
                    ?>
                    <option value='<?php echo $course[$i]['Course_id']; ?>'><?php echo $course[$i]['Course_id']; ?></option>
                    <?php
                }
            //}
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
        <label>Registration No :</label> <input class="form-control" type="text" name="reg_no" required="required">
<label>Enrollment No :</label> <input class="form-control" type="text" name="enroll_no">
    </div>
    <div class="form-group">
        <label>Name :</label> 
        <input type="text" class="form-control" name="fname" placeholder="first" required="required">
        <input type="text" name="mname" placeholder="Mid" class="form-control" >
        <input type="text" name="lname" placeholder="Last" class="form-control" >
    </div>
    <div class="form-group">
        <label>Father Name :</label>
        <input type="text" name="fathername" class="form-control" required="required">
        <label>Mother Name :</label>
        <input type="text" name="mothername" class="form-control" required="required">
    </div>
    <div class="form-group">   
        <label>Gender : </label>
        <input type="checkbox" class="checkbox" value="g1" name="gender" >Male        
        <input type="checkbox" class="checkbox" value="g2" name="gender" >Female
        <label>Select Category: </label>
        <select name='cat' class="form-control">
            <?php   // print_r($cat);
            for ($i = 0; $i < count($cat); $i++) {
                ?>    <option value='<?php echo $cat[$i]['Cat_id']; ?>'><?php echo $cat[$i]['cat_name']; ?></option>
            <?php } ?>
        </select>

    </div>
    <div class="form-group">
        <label>Email :</label>
        <input type="email" name="uemail" class="form-control" required="required">
        <label>Contact :</label>
        <input type="text" name="phn" class="form-control" required="required">
    </div>
    <div class="form-group">
        <label>Father Contact :</label>
        <input type="text" name="fcontact" class="form-control" required="required"> 
    </div>
    <div class="form-group">
        <label>Date of Birth :</label>
        <input type="date" name="dob" class="form-control" required="required">
      <!--  <lable>Img Path :</lable>
        <input type="file" name="img_url" class="form-control">
    --></div>
    <br>
    <div class="form-group">
        <input type="submit" value="ADD" class="btn btn-primary">
    </div>
</form>