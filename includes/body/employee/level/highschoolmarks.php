
<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="x_panel" style="min-height:350px;">
        <div class="x_content">
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">




                            <?php require_once 'includes/controllers/insert/posthighschoolmarks.php'; ?>
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
                                            <td><input type="text" id="mathematicspaperone" name="mathematicspaperone" placeholder="mathematics paper one" class="form-control" /></td>
                                            <td><input type="text" id="mathematicspapertwo" name="mathematicspapertwo" placeholder="mathematics paper two" class="form-control" /></td>
                                            <td><input type="text" id="mathematicspaperthree" name="mathematicspaperthree" placeholder="mathematics paper three" class="form-control" /></td>
                                            <td><input type="text" id="mathematicsmarks" name="mathematicsmarks" placeholder="mathematics marks" class="form-control" /></td>
                                            <td><input type="text" id="mathematicsgrade" name="mathematicsgrade" placeholder="mathematics grade" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td>English</td>
                                            <td><input type="text" id="englishpaperone" name="englishpaperone" placeholder="english paper one" class="form-control" /></td>
                                            <td><input type="text" id="englishpapertwo" name="englishpapertwo" placeholder="english paper two" class="form-control" /></td>
                                            <td><input type="text" id="englishpaperthree" name="englishpaperthree" placeholder="english paper three" class="form-control" /></td>
                                            <td><input type="text" id="englishmarks" name="englishmarks" placeholder="english marks" class="form-control" /></td>
                                            <td><input type="text" id="englishgrade" name="englishgrade" placeholder="english grade" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td>Kiswahili</td>
                                            <td><input type="text" id="kiswahilipaperone" name="kiswahilipaperone" placeholder="kiswahili paper one" class="form-control" /></td>
                                            <td><input type="text" id="kiswahilipapertwo" name="kiswahilipapertwo" placeholder="kiswahili paper two" class="form-control" /></td>
                                            <td><input type="text" id="kiswahilipaperthree" name="kiswahilipaperthree" placeholder="kiswahili paper three" class="form-control" /></td>
                                            <td><input type="text" id="kiswahilimarks" name="kiswahilimarks" placeholder="kiswahili marks" class="form-control" /></td>
                                            <td><input type="text" id="kiswahiligrade" name="kiswahiligrade" placeholder="kiswahili grade" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td>Physics</td>
                                            <td><input type="text" id="physicspaperone" name="physicspaperone" placeholder="physics paper one" class="form-control" /></td>
                                            <td><input type="text" id="physicspapertwo" name="physicspapertwo" placeholder="physics paper two" class="form-control" /></td>
                                            <td><input type="text" id="physicspaperthree" name="physicspaperthree" placeholder="physics paper three" class="form-control" /></td>
                                            <td><input type="text" id="physicsmarks" name="physicsmarks" placeholder="physics marks" class="form-control" /></td>
                                            <td><input type="text" id="physicsgrade" name="physicsgrade" placeholder="physics grade" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td>Biology</td>
                                            <td><input type="text" id="biologypaperone" name="biologypaperone" placeholder="biology paper one" class="form-control" /></td>
                                            <td><input type="text" id="biologypapertwo" name="biologypapertwo" placeholder="biology paper two" class="form-control" /></td>
                                            <td><input type="text" id="biologypaperthree" name="biologypaperthree" placeholder="biology paper three" class="form-control" /></td>
                                            <td><input type="text" id="biologymarks" name="biologymarks" placeholder="biology marks" class="form-control" /></td>
                                            <td><input type="text" id="biologygrade" name="biologygrade" placeholder="biology grade" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td>Chemistry</td>
                                            <td><input type="text" id="chemistrypaperone" name="chemistrypaperone" placeholder="chemistry paper one" class="form-control" /></td>
                                            <td><input type="text" id="chemistrypapertwo" name="chemistrypapertwo" placeholder="chemistry paper two" class="form-control" /></td>
                                            <td><input type="text" id="chemistrypaperthree" name="chemistrypaperthree" placeholder="chemistry paper three" class="form-control" /></td>
                                            <td><input type="text" id="chemistrymarks" name="chemistrymarks" placeholder="chemistry marks" class="form-control" /></td>
                                            <td><input type="text" id="chemistrygrade" name="chemistrygrade" placeholder="chemistry grade" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td>Geography</td>
                                            <td><input type="text" id="geographypaperone" name="geographypaperone" placeholder="geography paper one" class="form-control" /></td>
                                            <td><input type="text" id="geographypapertwo" name="geographypapertwo" placeholder="geography paper two" class="form-control" /></td>
                                            <td><input type="text" id="geographypaperthree" name="geographypaperthree" placeholder="geography paper three" class="form-control" /></td>
                                            <td><input type="text" id="geographymarks" name="geographymarks" placeholder="geography marks" class="form-control" /></td>
                                            <td><input type="text" id="geographygrade" name="geographygrade" placeholder="geography grade" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td>Business studies</td>
                                            <td><input type="text" id="bstudiespaperone" name="bstudiespaperone" placeholder="bstudies paper one" class="form-control" /></td>
                                            <td><input type="text" id="bstudiespapertwo" name="bstudiespapertwo" placeholder="bstudies paper two" class="form-control" /></td>
                                            <td><input type="text" id="bstudiespaperthree" name="bstudiespaperthree" placeholder="bstudies paper three" class="form-control" /></td>
                                            <td><input type="text" id="bstudiesmarks" name="bstudiesmarks" placeholder="bstudies marks" class="form-control" /></td>
                                            <td><input type="text" id="bstudiesgrade" name="bstudiesgrade" placeholder="bstudies grade" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td>Agriculture</td>
                                            <td><input type="text" id="agriculturepaperone" name="agriculturepaperone" placeholder="agriculture paper one" class="form-control" /></td>
                                            <td><input type="text" id="agriculturepapertwo" name="agriculturepapertwo" placeholder="agriculture paper two" class="form-control" /></td>
                                            <td><input type="text" id="agriculturepaperthree" name="agriculturepaperthree" placeholder="agriculture paper three" class="form-control" /></td>
                                            <td><input type="text" id="agriculturemarks" name="agriculturemarks" placeholder="agriculture marks" class="form-control" /></td>
                                            <td><input type="text" id="agriculturegrade" name="agriculturegrade" placeholder="agriculture grade" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td>History</td>
                                            <td><input type="text" id="historypaperone" name="historypaperone" placeholder="history paper one" class="form-control" /></td>
                                            <td><input type="text" id="historypapertwo" name="historypapertwo" placeholder="history paper two" class="form-control" /></td>
                                            <td><input type="text" id="historypaperthree" name="historypaperthree" placeholder="history paper three" class="form-control" /></td>
                                            <td><input type="text" id="historymarks" name="historymarks" placeholder="history marks" class="form-control" /></td>
                                            <td><input type="text" id="historygrade" name="historygrade" placeholder="history grade" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td>Religious education</td>
                                            <td><input type="text" id="religiouseducationpaperone" name="religiouseducationpaperone" placeholder="religiouseducation paper one" class="form-control" /></td>
                                            <td><input type="text" id="religiouseducationpapertwo" name="religiouseducationpapertwo" placeholder="religiouseducation paper two" class="form-control" /></td>
                                            <td><input type="text" id="religiouseducationpaperthree" name="religiouseducationpaperthree" placeholder="religiouseducation paper three" class="form-control" /></td>
                                            <td><input type="text" id="religiouseducationmarks" name="religiouseducationmarks" placeholder="religiouseducation marks" class="form-control" /></td>
                                            <td><input type="text" id="religiouseducationgrade" name="religiouseducationgrade" placeholder="religiouseducation grade" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td>Foreign language</td>
                                            <td><input type="text" id="foreignlanuagepaperone" name="foreignlanuagepaperone" placeholder="foreignlanuage paper one" class="form-control" /></td>
                                            <td><input type="text" id="foreignlanuagepapertwo" name="foreignlanuagepapertwo" placeholder="foreignlanuage paper two" class="form-control" /></td>
                                            <td><input type="text" id="foreignlanuagepaperthree" name="foreignlanuagepaperthree" placeholder="foreignlanuage paper three" class="form-control" /></td>
                                            <td><input type="text" id="foreignlanuagemarks" name="foreignlanuagemarks" placeholder="foreignlanuage marks" class="form-control" /></td>
                                            <td><input type="text" id="foreignlanuagegrade" name="foreignlanuagegrade" placeholder="foreignlanuage grade" class="form-control" /></td>
                                        </tr>



                                            
                                        </tbody>
                                    </table>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-0">
                                        <button class="btn btn-primary btn-lg" type="reset">Reset</button>
                                        <button type="submit" id="postsecondarymarks" name="postsecondarymarks" class="btn btn-success btn-lg">Post marks</button>
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

            <th style="width:10%;">mathematicsmarks</th>
            <th style="width:10%;">englishmarks</th>
            <th style="width:10%;">kiswahilimarks</th>
            <th style="width:10%;">physicsmarks</th>
            <th style="width:10%;">biologymarks</th>
            <th style="width:10%;">chemistrymarks</th>
            <th style="width:10%;">geographymarks</th>
            <th style="width:10%;">bstudiesmarks</th>
            <th style="width:10%;">agriculturemarks</th>
            <th style="width:10%;">historymarks</th>
            <th style="width:10%;">religiouseducationmarks</th>
            <th style="width:10%;">foreignlanuagemarks</th>

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
          $stmt = $auth_user->runQuery("SELECT * FROM `highschoolmarks` WHERE `term`='$schoolsession->term' AND `year`='$schoolsession->year' AND `studentid`='$student'  ");
        $stmt->execute(array());
        $highschoolmarks=$stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($highschoolmarks as $highschoolmarks) {
            ?> 
                <tr>
                    <td><?php echo $highschoolmarks->studentid; ?></td>
                    <td><?php echo $highschoolmarks->classname; ?></td>
                    <td><?php echo $highschoolmarks->classdetails; ?></td>

                    <td><?php echo $highschoolmarks->mathematicsmarks; ?></td>
                    <td><?php echo $highschoolmarks->englishmarks; ?></td>
                    <td><?php echo $highschoolmarks->kiswahilimarks; ?></td>
                    <td><?php echo $highschoolmarks->physicsmarks; ?></td>
                    <td><?php echo $highschoolmarks->biologymarks; ?></td>
                    <td><?php echo $highschoolmarks->chemistrymarks; ?></td>
                    <td><?php echo $highschoolmarks->geographymarks; ?></td>
                    <td><?php echo $highschoolmarks->bstudiesmarks; ?></td>
                    <td><?php echo $highschoolmarks->agriculturemarks; ?></td>
                    <td><?php echo $highschoolmarks->historymarks; ?></td>
                    <td><?php echo $highschoolmarks->religiouseducationmarks; ?></td>
                    <td><?php echo $highschoolmarks->foreignlanuagemarks; ?></td>


                    <td>total</td>

                    <td>average</td> 
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