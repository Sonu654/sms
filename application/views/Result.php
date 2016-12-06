<h1 style="text-align: center">Final Result</h1>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <div class="row">
            <a href="<?php echo site_url('Home/GnrateResult')?>" class="btn btn-primary">Search Another</a>
            <button class="btn btn-primary" onclick="window.print()">Print</button>
        </div>
        <div class="row">
            <div class="col-sm-3">
                Roll
            </div>
            <div class="col-sm-9">
                <label><?php echo $result['info'][0]['roll']; ?></label>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                Name
            </div>
            <div class="col-sm-9">
                <label><?php echo $result['info'][0]['firstName'] . '' . $result['info'][0]['midName'] . ' ' . $result['info'][0]['lastName']; ?></label>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                Course
            </div>
            <div class="col-sm-9">
                <label><?php echo $result['info'][0]['course_name']; ?></label>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                Semester
            </div>
            <div class="col-sm-9">
                <label><?php echo $result['info'][0]['sem']; ?></label>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">Marks Detail</div>
            <div class="col-sm-4"></div>    
        </div>
        <div class="row">
            <div class="table table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>S.No</td>
                            <td>Subject Code</td>
                            <td>Subject Name</td>
                            <td>External</td>
                            <td>Internal</td>
                            <td>Pratical</td>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $marks = $result['marks'];
                        if (!empty($marks)) {
                            // print_r($marks);
                            $i = 0;
                            $k = 0;
                            //foreach ($marks as $mark) 
                            for ($j = 0; $j < count($marks); $j += 3) {
                                ?>
                                <tr>
                                    <td><?php echo $i + 1; ?></td>
                                    <td><?php echo $marks[$j]['sub_id'] ?></td>
                                    <td><?php echo $marks[$j]['sub_name']; ?></td>
                                    <td><?php
                                        if ($marks[$j + 2]['exam_id'] == 'ex03')
                                            echo $ex = $marks[$j + 2]['marks'];
                                        else
                                            $ex = '';
                                        //$i++;
                                        ?></td>
                                    <td><?php
                                        if ($marks[$j]['exam_id'] == 'ex01')
                                            $in1 = $marks[$j]['marks'];
                                        else
                                            $in1 = '';
                                        //$i++;
                                        if ($marks[$j + 1]['exam_id'] == 'ex02')
                                            $in2 = $marks[$j + 1]['marks'];
                                        else
                                            $in2 = '';
                                        echo $in = intval(($in1 + $in2) / 2);
                                        ?></td>
                                    <td><?php echo $pr = ''; ?></td>
                                    <td><?php echo $total[$k] = $ex + $in + $pr; ?></td>
                                </tr>
                                <?php
                                $i++;
                                $k++;
                            }
                            ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <th>Total</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <th><?php
                                    $t = 0;
                                    foreach ($total as $t1) {
                                        $t += $t1;
                                    }
                                    echo $t;
                                    ?></th>

                            </tr>
                            <?php
                        } else {
                            echo '<h3>No Record Found</h3>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
            
    </div>
    <div class="col-sm-1"></div>
</div>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */