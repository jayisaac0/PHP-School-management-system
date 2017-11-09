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
                              <small class="pull-right">Date: <?php echo $students->class.' '; ?><?php echo $schoolsession->term.' '; echo $schoolsession->year; ?></small>
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
            <th style="width:15%;">Paper one</th>
            <th style="width:15%;">Paper two</th>
            <th style="width:15%;">Paper three</th>
            <th style="width:15%;">Marks</th>
            <th style="width:10%;">Grade</th>
            <th style="width:20%;">Remark</th>
        </tr>
    </thead>
   <?php
      $stmt = $auth_user->runQuery("SELECT * FROM `highschoolmarks` WHERE `classdetails`='$students->classdetails' AND `term`='$schoolsession->term' AND `studentid`='".$userRow['user_name']."' ");
    $stmt->execute(array());
    $highschoolmarks=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($highschoolmarks as $highschoolmarks) {
        ?> 

        <tbody>
            <tr>
                <td>Mathematics</td>
                <td><?php echo $highschoolmarks->mathematicspaperone; ?></td>
                <td><?php echo $highschoolmarks->mathematicspapertwo; ?></td>
                <td><?php echo $highschoolmarks->mathematicspaperthree; ?></td>
                <td><?php echo $highschoolmarks->mathematicsmarks; ?></td>
                <td><?php echo $highschoolmarks->mathematicsgrade; ?></td>
            </tr>
            <tr>
                <td>English</td>
                <td><?php echo $highschoolmarks->englishpaperone; ?></td>
                <td><?php echo $highschoolmarks->englishpapertwo; ?></td>
                <td><?php echo $highschoolmarks->englishpaperthree; ?></td>
                <td><?php echo $highschoolmarks->englishmarks; ?></td>
                <td><?php echo $highschoolmarks->englishgrade; ?></td>
            </tr>
            <tr>
                <td>Kiswahili</td>
                <td><?php echo $highschoolmarks->kiswahilipaperone; ?></td>
                <td><?php echo $highschoolmarks->kiswahilipapertwo; ?></td>
                <td><?php echo $highschoolmarks->kiswahilipaperthree; ?></td>
                <td><?php echo $highschoolmarks->kiswahilimarks; ?></td>
                <td><?php echo $highschoolmarks->kiswahiligrade; ?></td>
            </tr>
            <tr>
                <td>Physics</td>
                <td><?php echo $highschoolmarks->physicspaperone; ?></td>
                <td><?php echo $highschoolmarks->physicspapertwo; ?></td>
                <td><?php echo $highschoolmarks->physicspaperthree; ?></td>
                <td><?php echo $highschoolmarks->physicsmarks; ?></td>
                <td><?php echo $highschoolmarks->physicsgrade; ?></td>
            </tr>
            <tr>
                <td>Biology</td>
                <td><?php echo $highschoolmarks->biologypaperone; ?></td>
                <td><?php echo $highschoolmarks->biologypapertwo; ?></td>
                <td><?php echo $highschoolmarks->biologypaperthree; ?></td>
                <td><?php echo $highschoolmarks->biologymarks; ?></td>
                <td><?php echo $highschoolmarks->biologygrade; ?></td>
            </tr>
            <tr>
                <td>Chemistry</td>
                <td><?php echo $highschoolmarks->chemistrypaperone; ?></td>
                <td><?php echo $highschoolmarks->chemistrypapertwo; ?></td>
                <td><?php echo $highschoolmarks->chemistrypaperthree; ?></td>
                <td><?php echo $highschoolmarks->chemistrymarks; ?></td>
                <td><?php echo $highschoolmarks->chemistrygrade; ?></td>
            </tr>
            <tr>
                <td>Geography</td>
                <td><?php echo $highschoolmarks->geographypaperone; ?></td>
                <td><?php echo $highschoolmarks->geographypapertwo; ?></td>
                <td><?php echo $highschoolmarks->geographypaperthree; ?></td>
                <td><?php echo $highschoolmarks->geographymarks; ?></td>
                <td><?php echo $highschoolmarks->geographygrade; ?></td>
            </tr>
            <tr>
                <td>Business studies</td>
                <td><?php echo $highschoolmarks->bstudiespaperone; ?></td>
                <td><?php echo $highschoolmarks->bstudiespapertwo; ?></td>
                <td><?php echo $highschoolmarks->bstudiespaperthree; ?></td>
                <td><?php echo $highschoolmarks->bstudiesmarks; ?></td>
                <td><?php echo $highschoolmarks->bstudiesgrade; ?></td>
            </tr>
            <tr>
                <td>Agriculture</td>
                <td><?php echo $highschoolmarks->agriculturepaperone; ?></td>
                <td><?php echo $highschoolmarks->agriculturepapertwo; ?></td>
                <td><?php echo $highschoolmarks->agriculturepaperthree; ?></td>
                <td><?php echo $highschoolmarks->agriculturemarks; ?></td>
                <td><?php echo $highschoolmarks->agriculturegrade; ?></td>
            </tr>
            <tr>
                <td>History</td>
                <td><?php echo $highschoolmarks->historypaperone; ?></td>
                <td><?php echo $highschoolmarks->historypapertwo; ?></td>
                <td><?php echo $highschoolmarks->historypaperthree; ?></td>
                <td><?php echo $highschoolmarks->historymarks; ?></td>
                <td><?php echo $highschoolmarks->historygrade; ?></td>
            </tr>
            <tr>
                <td>Religious education</td>
                <td><?php echo $highschoolmarks->religiouseducationpaperone; ?></td>
                <td><?php echo $highschoolmarks->religiouseducationpapertwo; ?></td>
                <td><?php echo $highschoolmarks->religiouseducationpaperthree; ?></td>
                <td><?php echo $highschoolmarks->religiouseducationmarks; ?></td>
                <td><?php echo $highschoolmarks->religiouseducationgrade; ?></td>
            </tr>
            <tr>
                <td>Foreign language</td>
                <td><?php echo $highschoolmarks->foreignlanguagepaperone; ?></td>
                <td><?php echo $highschoolmarks->foreignlanguagepapertwo; ?></td>
                <td><?php echo $highschoolmarks->foreignlanguagepaperthree; ?></td>
                <td><?php echo $highschoolmarks->foreignlanguagemarks; ?></td>
                <td><?php echo $highschoolmarks->foreignlanguagegrade; ?></td>
            </tr>

        </tbody>
    <?php
    }
    ?>
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
                      <td>Total</td>
                    </tr>
                    <tr>
                      <th>Average</th>
                      <td>Avg</td>
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


