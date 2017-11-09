<div class="page-title">
    <div class="title_left">
        <h4><blue>Home</blue> Dashboard /Notice List /Add Notice
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
    <h1><i class="fa fa-plus"> </i> Add Notice</h1>
    <div class="clearfix"></div>
</div>
<div class="x_panel">
    <div class="x_content">
        <br />
        <?php require_once 'includes/controllers/insert/notice.php'; ?>  
        <form id="demo-form2" method="POST" data-parsley-validate class="form-horizontal form-label-left">
            <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <label class="col-sm-12 col-md-12 col-xs-12">Title</label>
                    <input type="text" id="noticetitle" name="noticetitle" required="required" placeholder="Enter Title" class="form-control col-md-7 col-xs-12 "  />
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                <label class="col-sm-12 col-md-12 col-xs-12">Description</label>
                    <textarea type="text" id="noticedescription" name="noticedescription" required="required" placeholder="Enter Description" class="form-control col-md-7 col-xs-12 " rows="5" ></textarea>
                </div>


                <div class="col-md-12 col-sm-12 col-xs-12">
                    <label class="control-label ">User Type </label>
                </div>

                <div class="radio col-md-2 col-sm-2 col-xs-12">
                    <label>
                        <input type="radio" class="flat" name="target" id="target" value="student"> Student
                    </label>
                </div>
                <div class="radio col-md-2 col-sm-2 col-xs-12">
                    <label>
                        <input type="radio" class="flat" name="target" id="target" value="employee"> Employee
                    </label>    
                </div>
                <div class="radio col-md-2 col-sm-2 col-xs-12">
                    <label>
                        <input type="radio" class="flat" name="target" id="target" value="both"> Both
                    </label>
                </div>

                <div class="radio col-md-12 col-sm-12 col-xs-12">
                    <label>
                        <input type="checkbox" class="flat" name="messagestatus" id="messagestatus" value="active"> Active
                    </label>
                </div>



            </div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-0">
                    <button class="btn btn-primary btn-lg" type="reset">Reset</button>
                    <button type="submit" id="postnotice" name="postnotice" class="btn btn-success btn-lg">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
              






