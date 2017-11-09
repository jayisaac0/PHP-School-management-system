
<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="x_panel" style="min-height:350px;">
        <div class="x_content">
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">




                            <?php require_once 'includes/controllers/insert/postmarks.php'; ?>
                            <form id="demo-form2" method="POST" data-parsley-validate class="form-horizontal form-label-left">


                                <?php
                                    $stmt = $auth_user->runQuery("SELECT * FROM `schoolsession` ");
                                    $stmt->execute(array());
                                    $schoolsession=$stmt->fetchAll(PDO::FETCH_OBJ);
                                    foreach ($schoolsession as $schoolsession) {
                                        ?>
                                        <input type="hidden" class="form-control" id="term" name="term" value="<?php echo $schoolsession->term; ?>" />
                                        <?php
                                    }
                                    ?>
                                    <input type="hidden" id="studentid" name="studentid" value="<?php echo $student; ?>" class="form-control" />
                                    <input type="hidden" id="classname" name="classname" value="<?php echo $students->class; ?>" class="form-control" />
                                    <input type="hidden" id="classdetails" name="classdetails" value="<?php echo $students->classdetails; ?>" class="form-control" />

                                    <table class="table table-striped table-responsive table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th style="width:15%;">Subject</th>
                                                <th style="width:15%;">Mark 1</th>
                                                <th style="width:15%;">Mark 2</th>
                                                <th style="width:15%;">Mark 3</th>
                                                <th style="width:15%;">Total</th>
                                                <th style="width:15%;">Remark</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>Mathematics</td>
                                            <td><input type="text" id="mathematicsone" name="mathematicsone" placeholder="First marks" class="form-control" /></td>
                                            <td><input type="text" id="mathematicstwo" name="mathematicstwo" placeholder="Second marks" class="form-control" /></td>
                                            <td><input type="text" id="mathematicsthree" name="mathematicsthree" placeholder="Third marks" class="form-control" /></td>
                                            <td><input type="text" id="mathematicstotal" name="mathematicstotal" placeholder="Total" class="form-control" /></td>
                                            <td><input type="text" id="mathematicsremark" name="mathematicsremark" placeholder="Total" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td>English</td>
                                            <td><input type="text" id="englishone" name="englishone" placeholder="First marks" class="form-control" /></td>
                                            <td><input type="text" id="englishtwo" name="englishtwo" placeholder="Second marks" class="form-control" /></td>
                                            <td><input type="text" id="englishthree" name="englishthree" placeholder="Third marks" class="form-control" /></td>
                                            <td><input type="text" id="englishtotal" name="englishtotal" placeholder="Total" class="form-control" /></td>
                                            <td><input type="text" id="englishreview" name="englishreview" placeholder="Total" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td>Kiswahili</td>
                                            <td><input type="text" id="kiswahilione" name="kiswahilione" placeholder="First marks" class="form-control" /></td>
                                            <td><input type="text" id="kiswahilitwo" name="kiswahilitwo" placeholder="Second marks" class="form-control" /></td>
                                            <td><input type="text" id="kiswahilithree" name="kiswahilithree" placeholder="Third marks" class="form-control" /></td>
                                            <td><input type="text" id="kiswahilitotal" name="kiswahilitotal" placeholder="Total" class="form-control" /></td>
                                            <td><input type="text" id="kiswahiliremark" name="kiswahiliremark" placeholder="Total" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td>Science</td>
                                            <td><input type="text" id="scienceone" name="scienceone" placeholder="First marks" class="form-control" /></td>
                                            <td><input type="text" id="sciencetwo" name="sciencetwo" placeholder="Second marks" class="form-control" /></td>
                                            <td><input type="text" id="sciencethree" name="sciencethree" placeholder="Third marks" class="form-control" /></td>
                                            <td><input type="text" id="sciencetotal" name="sciencetotal" placeholder="Total" class="form-control" /></td>
                                            <td><input type="text" id="scienceremark" name="scienceremark" placeholder="Total" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td>Social studies</td>
                                            <td><input type="text" id="sstudiesone" name="sstudiesone" placeholder="First marks" class="form-control" /></td>
                                            <td><input type="text" id="sstudiestwo" name="sstudiestwo" placeholder="Second marks" class="form-control" /></td>
                                            <td><input type="text" id="sstudiesthree" name="sstudiesthree" placeholder="Third marks" class="form-control" /></td>
                                            <td><input type="text" id="sstudiestotal" name="sstudiestotal" placeholder="Total" class="form-control" /></td>
                                            <td><input type="text" id="sstudiesremark" name="sstudiesremark" placeholder="Total" class="form-control" /></td>
                                        </tr>



                                            
                                        </tbody>
                                    </table>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-0">
                                        <button class="btn btn-primary btn-lg" type="reset">Reset</button>
                                        <button type="submit" id="postmarks" name="postmarks" class="btn btn-success btn-lg">Post marks</button>
                                    </div>
                                </div>
                            </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>







<div class="x_panel">
    <div class="x_title">
        <h2><?php echo $students->firstname.' '; ?><?php echo $students->middlename; ?> (Class: <?php echo $students->class.' '; ?><?php echo $students->classdetails; ?>)</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">

<h2><?php echo $student; ?></h2>






<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
        <tr>
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
        </tr>
    </thead>
    <tbody>
        <?php
            $stmt = $auth_user->runQuery("SELECT * FROM `schoolsession` ");
            $stmt->execute(array());
            $schoolsession=$stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($schoolsession as $schoolsession) {
                ?>


       <?php
          $stmt = $auth_user->runQuery("SELECT * FROM `primaryschoolmarks` WHERE `term`='$schoolsession->term' AND `year`='$schoolsession->year' AND `studentid`='$student'  ");
        $stmt->execute(array());
        $primaryschoolmarks=$stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($primaryschoolmarks as $primaryschoolmarks) {
            ?> 
                <tr>
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
                </tr>
            
        <?php
        }
        ?>
                <?php
            }
        ?>
    </tbody>
</table>








  

    
    </div>
</div>