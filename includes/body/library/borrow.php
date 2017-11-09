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
    <h1><i class="fa fa-plus"> </i> Borrow book</h1>
    <div class="clearfix"></div>
</div>




<?php require_once 'includes/controllers/insert/borrowbooks.php'; ?>  
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

    <div class="x_panel">
        <div class=" col-md-6 col-sm-6 col-xs-12">
            <div class="x_title">
                <h2>Book Sub-categories list</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th style="width:5%;">check</th>
                            <th style="width:10%;">User ID</th>
                            <th style="width:15%;">Name</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $stmt = $auth_user->runQuery("SELECT * FROM `students` ");
                            $stmt->execute(array());
                            $students=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($students as $students) {
                                ?>
                                <tr>
                                    <td><input type="radio" class="flat" name="student" id="student" value="<?php echo $students->studentid; ?>"></td>
                                    <td><?php echo $students->studentid; ?></td>
                                    <td><?php echo $students->firstname.' '; $students->middlename; ?></td>
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
                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th style="width:5%;">Book ref::</th>
                            <th style="width:15%;">Book title</th>
                            <th style="width:10%;">Book author</th>
                            <th style="width:15%;">Book status</th>

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
                                    <td><input type="checkbox" class="flat" name="book" id="book" value="<?php echo $books->bookref; ?>"></td>
                                    <td><?php echo $books->booktitle; ?></td>
                                    <td><?php echo $books->bookauthor; ?></td>
                                    <?php 
                                        $stmt = $auth_user->runQuery("SELECT `book` FROM `borrowed` WHERE `book`='$books->bookref' ");
                                        $stmt->execute(array());
                                        $row=$stmt->fetch(PDO::FETCH_ASSOC);

                                        if($stmt->rowCount() == 1) {
                                            echo '<td style="color:green;">Borrowed</td>';
                                        }else{
                                            echo '<td>In stock</td>';
                                        }

                                        ?>  
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
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-0">
            <button class="btn btn-primary btn-lg" type="reset">Reset</button>
            <button type="submit" id="borrowbook" name="borrowbook" class="btn btn-success btn-lg">Create</button>
        </div>
    </div>
</form>