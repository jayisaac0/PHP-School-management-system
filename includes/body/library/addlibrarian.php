<div class="page-title">
    <div class="title_left">
        <h4><blue>Home</blue> /Add Librarian

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
    <h1><i class="fa fa-plus"> </i> Add Librarian</h1>
    <div class="clearfix"></div>
</div>

<div class="x_panel">
        <div class="alert alert-warning blue alert-dismissible " role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        No notice...
        </div>
    <div class="x_content">
        <br />

        <?php require_once 'includes/controllers/insert/addlibrarian.php'; ?>  
        <form id="demo-form2" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                <?php
                    if(isset($error))
                    {
                        foreach($error as $error)
                        {
                             ?>
                             <div class="alert alert-danger" style = "padding:1px;margin:1px;">
                                <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                             </div>
                             <?php
                        }
                    }
                ?>            
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Employee id</label>
                    <input type="text" id="librarianid" name="librarianid" required="required" placeholder="Enter Title" class="form-control col-md-6 col-xs-12 " value="<?php echo time(); ?>" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Title</label>
                    <select class="select2_single form-control" id="title" name="title"  required="required" tabindex="-1">
                        <option>---Select Country---</option>
                        <option value="mr">Mr</option>
                        <option value="miss">Miss</option>
                        <option value="mrs">Mrs</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">First name</label>
                    <input type="text"  id="firstname" name="firstname"  required="required" placeholder="Enter Title" class="form-control col-md-7 col-xs-12 "  />
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Middle name</label>
                    <input type="text"  id="middlename" name="middlename" middlename required="required" placeholder="Enter Title" class="form-control col-md-7 col-xs-12 "  />
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Last name</label>
                    <input type="text"  id="lastname" name="lastname"  required="required" placeholder="Enter Title" class="form-control col-md-7 col-xs-12 "  />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Gender</label>
                    <select class="select2_single form-control" id="gender" name="gender" required="required" tabindex="-1">
                        <option>---Select Gender---</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">E- mail ID</label>
                    <input type="text"  id="email" name="email"  required="required" placeholder="Enter Title" class="form-control col-md-7 col-xs-12 "  />
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Mobile number</label>
                    <input type="text"  id="mobilenumber" name="mobilenumber"  required="required" placeholder="Enter Title" class="form-control col-md-7 col-xs-12 "  />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Date of birth</label>
                    <input type="text"  id="dateofbirth" name="dateofbirth"  required="required" placeholder="Enter Title" class="form-control col-md-7 col-xs-12 "  />
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label class="col-sm-12 col-md-12 col-xs-12">Nationality</label>
                        <input type="text" id="nationality" name="nationality" required="required" placeholder="Nationality" class="form-control col-md-7 col-xs-12 "  />
                    </div>
                </div>
            </div>




            <div class="alert alert-warning alert-dismissible " role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                No notice...
            </div>



            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-0">
                    <button class="btn btn-primary btn-lg" type="reset">Reset</button>
                    <button type="submit" id="postnewemployee" name="postnewemployee" class="btn btn-success btn-lg">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
              




