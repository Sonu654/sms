<?php  if(empty($userType))
    $userType='Home';?>
<ul class="nav nav-pills nav-stacked">
    
    <li class="active"><a href="<?php echo site_url($userType.'/index'); ?>">Home</a></li>
    <li><a href="<?php echo site_url('Home/GnrateResult') ?>">Genetate Result</a></li>
    <?php
    if ($userType == 'Addministration' || $userType == 'Admin') {
        ?>  
        <li><a href="<?php echo site_url('Addministration\AddStd'); ?>">Add New Student</a></li>
        <li><a href="<?php echo site_url('Addministration\Marks'); ?>">Update Marks</a></li>
        <?php
    }
    if ($userType == 'Exam' || $userType == 'Admin') {
        ?>
        <?php
    }
    if ($userType == 'Student' || $userType == 'Admin') {
        ?>
        <?php
    }
    if ($userType == 'Faculty' || $userType == 'Admin') {
        ?>
        <?php
    }
    ?>
    <li></li>
</ul>
<?php //} ?>


