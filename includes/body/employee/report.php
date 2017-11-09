<?php
if(isset($_GET['ref'])) {
$ref = $_GET['ref'];
$student = $_GET['student'];
echo $ref;
echo $student;

$stmt = $auth_user->runQuery("SELECT * FROM `primaryschoolmarks` WHERE `primaryschoolmarks_id`='$student'  ");
$stmt->execute(array());
$primaryschoolmarks=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($primaryschoolmarks as $primaryschoolmarks) {

$stmt = $auth_user->runQuery("SELECT * FROM `students` WHERE `studentid`='$primaryschoolmarks->studentid' ");
$stmt->execute(array());
$students=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($students as $students) {
?>




<div class="page-title">
  <div class="title_left">
    <h3></h3>
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

<div class="clearfix"></div>



<div class="row table-responsive">
<div class="col-md-12">
<div class="x_panel">
<div class="x_title">
<h2>Report card</h2>
<div class="clearfix"></div>
</div>
<div class="x_content">



                    <section class="content invoice">
                      <!-- title row -->
                      <div class="row">
                        <div class="col-xs-12 invoice-header">
                          <h1>
                                          <i><img src="images/logo.gif" style="width:100px;height:100px;" /></i>
                                          <small class="pull-right">Date: <?php echo $primaryschoolmarks->classname.' '; ?><?php echo $primaryschoolmarks->term.' '; echo $primaryschoolmarks->year; ?></small>
                                      </h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                          <address>
                                          <strong><?php echo $students->firstname.' '; ?><?php echo $students->middlename.' '; ?><?php echo $students->lastname; ?></strong>
                                          <br><?php echo $students->class; ?>
                                          <br>New York, CA 94107
                                          <br>Phone: <?php echo $students->mobilenumber; ?>
                                          <br>Email: <?php echo $students->studentemail; ?>
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          <b>Invoice #007612</b>
                          <br>
                          <br>
                          <b>Order ID:</b> 4F3S8J
                          <br>
                          <b>Payment Due:</b> 2/22/2014
                          <br>
                          <b>Account:</b> 968-34567
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- Table row -->
                      <div class="row">
                        <div class="col-xs-12 table">
                          
            <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th style="width:20%;">Subject</th>
                        <th style="width:15%;">Marks</th>
                        <th style="width:15%;">Marks</th>
                        <th style="width:15%;">Marks</th>
                        <th style="width:15%;">Total Marks</th>
                        <th style="width:10%;">Grade</th>
                        <th style="width:20%;">Remark</th>
                    </tr>
                </thead>

       
                    <tbody>
                        <tr>
                            <td>Mathematics</td>
                            <td><?php echo $primaryschoolmarks->mathematicsone; ?></td>
                            <td><?php echo $primaryschoolmarks->mathematicstwo; ?></td>
                            <td><?php echo $primaryschoolmarks->mathematicsthree; ?></td>
                            <td><?php echo $primaryschoolmarks->mathematicsone + $primaryschoolmarks->mathematicstwo; ?></td>
                            <td>A</td>
                            <td><?php echo $primaryschoolmarks->mathematicsremark; ?></td>
                        </tr>
                        <tr>
                            <td>English</td>
                            <td><?php echo $primaryschoolmarks->englishone; ?></td>
                            <td><?php echo $primaryschoolmarks->englishtwo; ?></td>
                            <td><?php echo $primaryschoolmarks->englishthree; ?></td>
                            <td><?php echo $primaryschoolmarks->englishone + $primaryschoolmarks->englishtwo; ?></td>
                            <td>A</td>
                            <td><?php echo $primaryschoolmarks->englishreview; ?></td>
                        </tr>
                        <tr>
                            <td>Kiswahili</td>
                            <td><?php echo $primaryschoolmarks->kiswahilione; ?></td>
                            <td><?php echo $primaryschoolmarks->kiswahilitwo; ?></td>
                            <td><?php echo $primaryschoolmarks->kiswahilithree; ?></td>
                            <td><?php echo $primaryschoolmarks->kiswahilione + $primaryschoolmarks->kiswahilitwo; ?></td>
                            <td>A</td>
                            <td><?php echo $primaryschoolmarks->kiswahiliremark; ?></td>
                        </tr>
                        <tr>
                            <td>Science</td>
                            <td><?php echo $primaryschoolmarks->scienceone; ?></td>
                            <td><?php echo $primaryschoolmarks->sciencetwo; ?></td>
                            <td><?php echo $primaryschoolmarks->sciencethree; ?></td>
                            <td><?php echo $primaryschoolmarks->scienceone + $primaryschoolmarks->sciencetwo; ?></td>
                            <td>A</td>
                            <td><?php echo $primaryschoolmarks->scienceremark; ?></td>
                        </tr>
                        <tr>
                            <td>Social studies</td>
                            <td><?php echo $primaryschoolmarks->sstudiesone; ?></td>
                            <td><?php echo $primaryschoolmarks->sstudiestwo; ?></td>
                            <td><?php echo $primaryschoolmarks->sstudiesthree; ?></td>
                            <td><?php echo $primaryschoolmarks->sstudiesone + $primaryschoolmarks->sstudiestwo; ?></td>
                            <td>A</td>
                            <td><?php echo $primaryschoolmarks->sstudiesremark; ?></td>
                        </tr>
                    </tbody>

            </table>
                          
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-6">

                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Total:</th>
                                </tr>
                                <tr>
                                  <th>congradulations</th>
                                </tr>
                                <tr>
                                  <th><button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button></th>
                                  <td><button class="btn btn-primary pull-right" style="margin-right: 5px;" onclick="window.print();"><i class="fa fa-download"></i> Generate PDF</button></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-6">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Total:</th>
                                  <td><?php echo ($primaryschoolmarks->mathematicsone + $primaryschoolmarks->mathematicstwo + $primaryschoolmarks->englishone + $primaryschoolmarks->englishtwo + $primaryschoolmarks->kiswahilione + $primaryschoolmarks->kiswahilitwo + $primaryschoolmarks->scienceone + $primaryschoolmarks->sciencetwo + $primaryschoolmarks->sstudiesone + $primaryschoolmarks->sstudiestwo); ?></td>
                                </tr>
                                <tr>
                                  <th>Average</th>
                                  <td><?php echo ($primaryschoolmarks->mathematicsone + $primaryschoolmarks->mathematicstwo + $primaryschoolmarks->englishone + $primaryschoolmarks->englishtwo + $primaryschoolmarks->kiswahilione + $primaryschoolmarks->kiswahilitwo + $primaryschoolmarks->scienceone + $primaryschoolmarks->sciencetwo + $primaryschoolmarks->sstudiesone + $primaryschoolmarks->sstudiestwo)/5; ?></td>
                                </tr>
                                <tr>
                                  <th>Grade:</th>
                                  <td>A</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>

                    </section>

</div>
</div>
</div>
</div>




<?php
}
?>

<?php
}
?>        

<?php   
}
?>