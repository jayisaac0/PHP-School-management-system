<div class="page-title">
    <div class="title_left">
        <h4><blue>Home</blue> / Admin Dashboard</h4>
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




<?php
$stmt = $auth_user->runQuery("SELECT * FROM `students` GROUP BY `class` ");
$stmt->execute(array());
$students=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($students as $students) {

?>  

<div class="x_panel">
    <div class="x_title">
        <h2><?php echo $students->class; ?></h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">


        <div class="animated flipInY col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="tile-stats " style="background:#FE9F45;">
                <div class="icon"><i class="fa fa-money green"></i></div>
                <h5 class="fivepad">Full Payments</h5>
                <div class="count">0</div>

                <p><center class="right"><a href="index/createnotice"> Create New </a><i class="fa fa-arrow-circle-right"></i></center></p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="tile-stats " style="background:#FE9F45;">
                <div class="icon"><i class="fa fa-money red"></i></div>
                <h5 class="fivepad">Unpayments</h5>
                <div class="count">0</div>

                <p><center class="right"><a href="index/createnotice"> Create New </a><i class="fa fa-arrow-circle-right"></i></center></p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="tile-stats " style="background:#FE9F45;">
                <div class="icon"><i class="fa fa-money orange"></i></div>
                <h5 class="fivepad">Partial Paymants</h5>
                <div class="count">0</div>

                <p><center class="right"><a href="index/createnotice"> Create New </a><i class="fa fa-arrow-circle-right"></i></center></p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="tile-stats " style="background:#FE9F45;">
                <div class="icon"><i class="fa fa-money blue"></i></div>
                <h5 class="fivepad">Over Paymants</h5>
                <div class="count">0</div>

                <p><center class="right"><a href="index/createnotice"> Create New </a><i class="fa fa-arrow-circle-right"></i></center></p>
            </div>
        </div>
        <a href="index/class/<?php echo base64_encode($students->class); ?>"><button class="btn btn-primary btn-lg col-lg-12 col-md-12 col-sm-12 col-xs-12">PROCEED</button></a>

    </div>
</div>

    <?php
    }
?> 

