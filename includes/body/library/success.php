<?php

    if(isset($_GET['ref'])) {
    @$ref = $_GET['ref'];
    @$student = $_GET['student'];

        try
        { 
            $stmt = $auth_user->runQuery("DELETE FROM borrowed WHERE `borrowed_id`='$student' ");
            $stmt->bindparam(":borrowed_id", $_GET['student']);
            $stmt->execute();

?>
<div class="page-title">
    <div class="title_left">
        <h4><blue>Home</blue> / Return book / Success

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
    <h1><i class="fa fa-plus"> </i> Book returned</h1>
    <div class="clearfix"></div>
</div>






<div class="x_panel">
    <div class=" col-md-12 col-sm-12 col-xs-12">
        <div class="x_title">
            <h2><?php echo $student; ?></h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
        <h1 style="color:green;">BOOK RETURNED</h1>
        </div>
        <a href="index/return"><div class="x_content">
        <button class="btn-primary btn btn-lg">Back</button>
        </div></a>

        
    </div>

</div>
<?php

            return $stmt;
            ?>
            <div class="alert alert-danger">
            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
            </div>
            <?php
        }
        catch(PDOException $e)
        {
            //echo $e->getMessage();
        }


    }

?>


