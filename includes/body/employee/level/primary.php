<div class="page-title">
    <div class="title_left">
        <h4><blue>Home</blue> / class teacher result </h4>
    </div>

    <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
                </span>
            </div>
        </div>
    </div>
</div>





<div class="x_panel">
<div class="x_title">
    <h2><?php echo $employeeresponsibility->classname.' '; ?><?php echo $employeeresponsibility->classdetails; ?> / <?php echo $schoolsession->term; ?> </h2>

    <div class="clearfix"></div>
</div>
<div class="x_content">
   



<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th style="width:20%;">Name</th>
            <th style="width:5%;">ID</th>
            <th style="width:10%;">Marks</th>
            <th style="width:10%;">Marks</th>
            <th style="width:10%;">Mathematics</th>
            <th style="width:10%;">English</th>
            <th style="width:10%;">Kiswahili</th>
            <th style="width:10%;">Sccience</th>
            <th style="width:10%;">Social studies</th>
            <th style="width:10%;">Marks</th>
            <th style="width:10%;">Average</th>
            <th style="width:10%;">Grade</th>
            <th style="width:10%;">Average</th>
            <th style="width:10%;">Grade</th>
            <th style="width:10%;">Update</th>              
        </tr>
    </thead>
    <tbody>
       <?php
          $stmt = $auth_user->runQuery("SELECT * FROM `students` WHERE `class`='$employeeresponsibility->classname' AND `classdetails`='$employeeresponsibility->classdetails'   ");
        $stmt->execute(array());
        $students=$stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($students as $students) {
            ?> 
                <tr>
                    <td><?php echo $students->firstname.' '; ?><?php echo $students->middlename.' '; ?><?php echo $students->lastname; ?></td>
                   <?php
                      $stmt = $auth_user->runQuery("SELECT * FROM `primaryschoolmarks` WHERE `term`='$schoolsession->term' AND `year`='$schoolsession->year' AND `studentid`='$students->studentid'  ");
                    $stmt->execute(array());
                    $primaryschoolmarks=$stmt->fetchAll(PDO::FETCH_OBJ);
                    foreach ($primaryschoolmarks as $primaryschoolmarks) {
                        ?> 
                        <td><?php echo $primaryschoolmarks->studentid; ?></td>
                        <td><?php echo $primaryschoolmarks->classname; ?></td>
                        <td><?php echo $primaryschoolmarks->classdetails; ?></td>
                        <td><?php echo $primaryschoolmarks->mathematicstotal; ?></td>
                        <td><?php echo $primaryschoolmarks->englishtotal; ?></td>
                        <td><?php echo $primaryschoolmarks->kiswahilitotal; ?></td>
                        <td><?php echo $primaryschoolmarks->sciencetotal; ?></td>
                        <td><?php echo $primaryschoolmarks->sstudiestotal; ?></td>
                        <td><?php echo ($primaryschoolmarks->mathematicstotal + $primaryschoolmarks->englishtotal + $primaryschoolmarks->kiswahilitotal + $primaryschoolmarks->sciencetotal + $primaryschoolmarks->sstudiestotal); ?></td>
                        <td><?php echo ($primaryschoolmarks->mathematicstotal + $primaryschoolmarks->englishtotal + $primaryschoolmarks->kiswahilitotal + $primaryschoolmarks->sciencetotal + $primaryschoolmarks->sstudiestotal)/5; ?></td> 
                        <td>Grade</td> 
                    <?php
                    }
                    ?>
                    <td>Grade</td> 
                    <td>Grade</td> 
                    <td><a href="index/studentmarks/<?php echo $students->studentid; ?>"><button class="btn btn-xs btn-primary" style="width:100%;">Update</button></a></td> 
                </tr>
            
        <?php
        }
        ?>
    </tbody>
</table>






    </div>
</div>
     
