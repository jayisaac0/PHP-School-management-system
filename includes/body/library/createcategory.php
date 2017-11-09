<div class="page-title">
    <div class="title_left">
        <h4><blue>Home</blue> Add books

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
    <h1><i class="fa fa-plus"> </i> Create categories</h1>
    <div class="clearfix"></div>
</div>

<div class="x_panel">
    <div class=" col-md-6 col-sm-6 col-xs-12">
        <div class="x_content">
            
            <?php require_once 'includes/controllers/insert/createcategory.php'; ?>  
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
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label class="col-sm-12 col-md-12 col-xs-12">Book Category</label>
                        <input type="text"  id="bookcategory" name="bookcategory"  required="required" placeholder="Enter Title" class="form-control col-md-7 col-xs-12 "  />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-0">
                        <button class="btn btn-primary btn-lg" type="reset">Reset</button>
                        <button type="submit" id="postcategory" name="postcategory" class="btn btn-success btn-lg">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class=" col-md-6 col-sm-6 col-xs-12">
        <div class="x_content">
            
            <?php require_once 'includes/controllers/insert/createsubcategory.php'; ?>  
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
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label class="col-sm-12 col-md-12 col-xs-12">Book Sub-Category</label>
                        <input type="text"  id="booksubcategory" name="booksubcategory"  required="required" placeholder="Enter Title" class="form-control col-md-7 col-xs-12 "  />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-0">
                        <button class="btn btn-primary btn-lg" type="reset">Reset</button>
                        <button type="submit" id="postsubcategory" name="postsubcategory" class="btn btn-success btn-lg">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>              










<div class="x_panel">
    <div class=" col-md-6 col-sm-6 col-xs-12">
        <div class="x_title">
            <h2>Book categories list</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:5%;">#</th>
                    <th style="width:10%;">Employee Id</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $stmt = $auth_user->runQuery("SELECT * FROM `book_category` ");
                    $stmt->execute(array());
                    $book_category=$stmt->fetchAll(PDO::FETCH_OBJ);
                    foreach ($book_category as $book_category) {
                        ?>
                        <tr>
                            <td>1</td>
                            <td><?php echo $book_category->bookcategory; ?></td>
                        </tr>  
                        <?php
                    }
                ?>
            </tbody>
        </table>
        </div>
    </div>

    <div class=" col-md-6 col-sm-6 col-xs-12">
        <div class="x_title">
            <h2>Book Sub-categories list</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th style="width:5%;">#</th>
                        <th style="width:10%;">Employee Id</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $stmt = $auth_user->runQuery("SELECT * FROM `book_sub_category` ");
                        $stmt->execute(array());
                        $book_sub_category=$stmt->fetchAll(PDO::FETCH_OBJ);
                        foreach ($book_sub_category as $book_sub_category) {
                            ?>
                            <tr>
                                <td>1</td>
                                <td><?php echo $book_sub_category->booksubcategory; ?></td>
                            </tr>  
                            <?php
                        }
                    ?>  
                </tbody>
            </table>
        </div>
    </div>

</div>
