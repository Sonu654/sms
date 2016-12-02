<h1 style="text-align: center">Student Details</h1>
<form class="form-inline">
    <div class="form-group">
        <label>Roll No :</label>
        <input type="text" class="form-control" name="roll" id="roll">
        <label>Sem</label>
        <select name='sem' class="form-control">
            <?php for ($i = 0; $i < count($sem); $i++) {
                ?>    <option value='<?php echo $sem[$i]['sem_id']; ?>'><?php echo $sem[$i]['sem_name']; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label>Name :</label><label id="stdName">Name of the Student</label>
        <label>Course :</label> <label id="stdCrs">Course</label>
        <label>Examination :</label>
        <select name='exam' class="form-control">
            <?php for ($i = 0; $i < count($exam); $i++) {
                ?>    <option value='<?php echo $exam[$i]['exam_id']; ?>'><?php echo $exam[$i]['exam_name']; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label>Obtained Marks</label>
        <input type="number" max="100" min="0" name="mrks" class="form-control"> 
    </div><br>
    <div class="form-group">
        <input type="button" name="submit" class="btn btn-primary" value="Insert">
    </div>
</form>