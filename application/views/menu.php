    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">Home</a></li>
        <?php
        if ($userType == 'Addministration' || $userType == 'Admin') {
            ?>  
            <li><a href="#">Menu 1</a></li>
            <li><a href="#">Menu 1</a></li>
            <li><a href="#">Menu 1</a></li>
        <?php
        }
        if ($userType == 'Exam' || $userType == 'Admin') {
            ?>
            <li><a href="#">Menu 2</a></li>
            <li><a href="#">Menu 2</a></li>
            <li><a href="#">Menu 2</a></li>
        <?php
        }
        if ($userType == 'Student' || $userType == 'Admin') {
            ?>
            <li><a href="#">Menu 3</a></li>
            <li><a href="#">Menu 3</a></li>
            <li><a href="#">Menu 3</a></li>
            <?php
        }
        if ($userType == 'Faculty' || $userType == 'Admin') {
            ?>
            <li><a href="#">Menu 4</a></li>
            <li><a href="#">Menu 4</a></li>
            <li><a href="#">Menu 4</a></li>
            <?php
        }
        ?>
        <li></li>
    </ul>
<?php//} ?>


