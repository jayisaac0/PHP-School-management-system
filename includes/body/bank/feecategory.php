<div class="page-title">
    <div class="title_left">
        <h4><blue>Home</blue> / Configuration / National Holiday List
</h4>
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

<div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_title">
            <h2><i class="fa fa-bars"></i> Paid/Unpaid Amount </h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                
                <div id="myTabContent" class="tab-content">

                <?php require_once 'includes/controllers/insert/feecategory.php'; ?>
                    <form id="demo-form2" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                                <?php
                                    if(isset($error))
                                    {
                                        foreach($error as $error)
                                        {
                                             ?>
                                             <div class="alert alert-danger">
                                                <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                                             </div>
                                             <?php
                                        }
                                    }
                                ?>                    
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <label>Level</label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <select type="text" id="classname" name="classname" required="required" placeholder="Course name/ subject" class="form-control col-md-12 col-sm-12 col-xs-12">
                                    <?php
                                    $stmt = $auth_user->runQuery("SELECT * FROM `classes` GROUP BY `classname` ");
                                    $stmt->execute(array());
                                    $classes=$stmt->fetchAll(PDO::FETCH_OBJ);
                                    foreach ($classes as $classes) {
                                    ?>                                  
                                    <option value="<?php echo $classes->classname; ?>"><?php echo $classes->classname; ?></option>
                                    <?php } ?>                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <label>Amount term one</label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" id="termone" name="termone" required="required" placeholder="Alias" class="form-control col-md-12 col-sm-12 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <label>Amount term two</label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" id="termtwo" name="termtwo" required="required" placeholder="Alias" class="form-control col-md-12 col-sm-12 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <label>Amount term three</label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" id="termthree" name="termthree" required="required" placeholder="Alias" class="form-control col-md-12 col-sm-12 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <label>Total year fee</label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" id="totalyearfee" name="totalyearfee" required="required" placeholder="Course code" class="form-control col-md-12 col-sm-12 col-xs-12">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-0">
                                <button class="btn btn-primary btn-lg" type="reset">Reset</button>
                                <button type="submit" id="postfeeref" name="postfeeref" class="btn btn-success btn-lg">Update</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
</div>

<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_title">
        <h2><i class="fa fa-bars"></i> Paid/Unpaid Amount </h2>

        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="" role="tabpanel" data-example-id="togglable-tabs">
            
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th style="width:20%;">Level</th>
                        <th style="width:20%;">Term one</th>
                        <th style="width:20%;">Term two</th>
                        <th style="width:20%;">Term three</th>
                        <th style="width:20%;">Total annual</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $stmt = $auth_user->runQuery("SELECT * FROM `feeref` ");
                $stmt->execute(array());
                $feeref=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($feeref as $feeref) {
                ?>            
                <tr>
                    <td><?php echo $feeref->classname; ?></td>
                    <td><?php echo $feeref->termone; ?></td>
                    <td><?php echo $feeref->termtwo; ?></td>
                    <td><?php echo $feeref->termthree; ?></td>
                    <td><?php echo $feeref->totalyearfee; ?></td>
                </tr>
                <?php } ?>                
                </tbody>
            </table>

        </div>
    </div>
</div>


</div>








