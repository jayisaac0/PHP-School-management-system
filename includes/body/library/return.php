
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
    <h1><i class="fa fa-plus"> </i> Return book</h1>
    <div class="clearfix"></div>
</div>






<div class="x_panel">
    <div class=" col-md-12 col-sm-12 col-xs-12">
        <div class="x_title">
            <h2>Book Sub-categories list</h2><a href="index/return"><button class="pull-right btn-primary btn">Refresh</button></a>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th style="width:5%;">#</th>
                        <th style="width:10%;">Student</th>
                        <th style="width:10%;">Name</th>
                        <th style="width:10%;">Class</th>
                        <th style="width:10%;">Number</th>
                        <th style="width:5%;">Book</th>
                        <th style="width:15%;">Book title</th>
                        <th style="width:15%;">Book author</th>
                        <th style="width:10%;">Category</th>
                        <th style="width:15%;">Return</th>

                    </tr>
                </thead>
                <tbody>
                <?php $stmt = $auth_user->runQuery("SELECT * FROM `borrowed` ");
                $stmt->execute(array());
                $borrowed=$stmt->fetchAll(PDO::FETCH_OBJ); 
                 foreach ($borrowed as $borrowed) { 
                    ?>
                    <tr>
                        <td>1</td>
                        <td><?php echo $borrowed->student; ?></td>
                        <?php $stmt = $auth_user->runQuery("SELECT * FROM `students` WHERE `studentid`='$borrowed->student' ");
                        $stmt->execute(array());
                        $students=$stmt->fetchAll(PDO::FETCH_OBJ); 
                        foreach ($students as $students) { 
                        ?>
                        <td><?php echo $students->firstname.' '; ?><?php echo $students->middlename.' '; ?></td>
                        <td><?php echo $students->class; ?></td>
                        <td><?php echo $students->mobilenumber; ?></td>
                        <?php
                        }
                        ?>
                        <td><?php echo $borrowed->book; ?></td>
                        <?php $stmt = $auth_user->runQuery("SELECT * FROM `books` WHERE `bookref`='$borrowed->book' ");
                        $stmt->execute(array());
                        $books=$stmt->fetchAll(PDO::FETCH_OBJ); 
                        foreach ($books as $books) { 
                        ?>
                        <td><?php echo $books->booktitle; ?></td>
                        <td><?php echo $books->bookauthor; ?></td>
                        <td><?php echo $books->bookcategory; ?></td>
                        <?php
                        }
                        ?>
                        <td><a href="index/success/<?php echo $borrowed->borrowed_id; ?>"><button class="btn btn-primary btn-xs" style="width:100%;">Return</button></a></td>
                    </tr>  
                    <?php
                    }
                ?>  
                </tbody>
            </table>
        </div>
    </div>

</div>

