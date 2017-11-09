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
    <h1><i class="fa fa-plus"> </i> Add Book</h1>
    <div class="clearfix"></div>
</div>

<div class="x_panel">
<div class=" col-md-4 col-sm-4 col-xs-12">
        <div class="alert alert-warning blue alert-dismissible " role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        No notice...
        </div>
    <div class="x_content">
        
        <?php require_once 'includes/controllers/insert/addbook.php'; ?>  
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
                    <label class="col-sm-12 col-md-12 col-xs-12">Book ref</label>
                    <input type="text"  id="bookref" name="bookref"  required="required" placeholder="Enter ref" class="form-control col-md-7 col-xs-12 "  />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Book title</label>
                    <input type="text"  id="booktitle" name="booktitle"  required="required" placeholder="Enter Title" class="form-control col-md-7 col-xs-12 "  />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Book author</label>
                    <input type="text"  id="bookauthor" name="bookauthor"  required="required" placeholder="Enter author" class="form-control col-md-7 col-xs-12 "  />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Publishing year</label>
                    <input type="text"  id="publishingyear" name="publishingyear"  required="required" placeholder="Enter publishing year" class="form-control col-md-7 col-xs-12 "  />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Book pages</label>
                    <input type="text"  id="bookpages" name="bookpages"  required="required" placeholder="Enter book pages" class="form-control col-md-7 col-xs-12 "  />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Book category</label>
                    <select type="text"  id="bookcategory" name="bookcategory"  required="required" placeholder="Enter Title" class="form-control col-md-7 col-xs-12 ">
                    <?php
                    $stmt = $auth_user->runQuery("SELECT * FROM `book_category` ");
                    $stmt->execute(array());
                    $book_category=$stmt->fetchAll(PDO::FETCH_OBJ);
                    foreach ($book_category as $book_category) {
                        ?>
                        <option value="<?php echo $book_category->bookcategory; ?>"><?php echo $book_category->bookcategory; ?></option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Book sub-category</label>
                    <select type="text"  id="booksubcategory" name="booksubcategory"  required="required" placeholder="Enter Title" class="form-control col-md-7 col-xs-12 ">
                    <?php
                    $stmt = $auth_user->runQuery("SELECT * FROM `book_sub_category` ");
                    $stmt->execute(array());
                    $book_sub_category=$stmt->fetchAll(PDO::FETCH_OBJ);
                    foreach ($book_sub_category as $book_sub_category) {
                        ?>
                        <option value="<?php echo $book_sub_category->booksubcategory; ?>"><?php echo $book_sub_category->booksubcategory; ?></option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
            </div>


            <div class="alert alert-warning alert-dismissible " role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            No notice...
            </div>



            <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-0">
                    <button class="btn btn-primary btn-lg" type="reset">Reset</button>
                    <button type="submit" id="postnewbook" name="postnewbook" class="btn btn-success btn-lg">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class=" col-md-8 col-sm-8 col-xs-12">

<div class="x_panel">
    <div class="x_title">
        <h2>Employees list</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:5%;">#</th>
                    <th style="width:10%;">Book title</th>
                    <th style="width:15%;">Employee Name</th>
                </tr>
            </thead>
            <tbody> 
                <?php
                    $stmt = $auth_user->runQuery("SELECT * FROM `books` ");
                    $stmt->execute(array());
                    $books=$stmt->fetchAll(PDO::FETCH_OBJ);
                    foreach ($books as $books) {
                        ?>
                        <tr>
                            <td>1</td>
                            <td><?php echo $books->booktitle; ?></td>
                            <td><?php echo $books->booktitle; ?></td>
                        </tr>  
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

</div>
</div>              




