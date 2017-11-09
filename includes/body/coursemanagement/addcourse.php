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







<div class="x_title">
    <h2>Addcourse/ Subject</h2>
    <ul class="nav navbar-right panel_toolbox">
        <li><a href="index/coursemodule"><button class = "btn btn-primary">Delete</button></a></li>
        <li><a><button class = "btn btn-danger">Delete</button></a></li>
        <li><a href="index/update"><button class = "btn btn-warning">Update</button></a></li>
    </ul>
    <div class="clearfix"></div>
</div>
<div class="x_panel">
    <div class="x_content">
        <br />
        <?php require_once 'includes/controllers/insert/addcourse.php'; ?>  
        <form id="demo-form2" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <label>Subject</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="text" id="subject" name="subject" required="required" placeholder="Course name/ subject" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <label>Subject code</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="text" id="subjectcode" name="subjectcode" required="required" placeholder="Course code" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <label>Subject Alias</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="text" id="subjectaliase" name="subjectaliase" required="required" placeholder="Alias" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="clearfix"></div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-0">
                    <button class="btn btn-primary btn-lg" type="reset">Reset</button>
                    <button type="submit" id="postnewcourse" name="postnewcourse" class="btn btn-success btn-lg">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
              









