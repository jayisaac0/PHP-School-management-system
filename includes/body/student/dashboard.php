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






<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel blue blackfont">
        <div class="row top_tiles">
            <?php
                $stmt = $auth_user->runQuery("SELECT * FROM `messageoftheday` WHERE `target`='student'  OR `target`='both'  AND `messagestatus`='active'  ORDER BY `time_created` LIMIT 1 ");
                $stmt->execute(array());
                $messageoftheday=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($messageoftheday as $messageoftheday) {
                    ?>
                    <?php echo $messageoftheday->messageoftheday; ?>
                    <?php
                }
            ?>
        </div>
    </div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
    <div class="x_title">
        <h1><i class="fa fa-plus"> </i>Manage User Dashboard</h1>
        <div class="clearfix"></div>
    </div>
        <div class="row top_tiles">
            <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="green blackfont tile-stats ">
                    <div class="icon"><i class="fa fa-user black"></i></div>
                    <h5 class="fivepad">ASSIGNMENTS</h5>
                    <div class="count">0</div>
                    <h5 class="fivepad">Status : Active</h5>
                    <p><center class="right"><a href="index/assignments/<?php echo $userRow['user_name']; ?>">View</a><i class="fa fa-arrow-circle-right"></i></center></p>
                </div>
            </div>
            <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="orange blackfont tile-stats ">
                    <div class="icon"><i class="fa fa-gear black"></i></div>
                    <h5 class="fivepad">NOTICE</h5>
                    <div class="count">0</div>
                    <h5 class="fivepad">Manage Student/Employee Dashboard Notice</h5>
                    <p><center class="right"><a href="index/createnotice">Create New </a><i class="fa fa-arrow-circle-right"></i></center></p>
                </div>
            </div>
            <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="brown blackfont tile-stats ">
                    <div class="icon"><i class="fa fa-user black"></i></div>
                    <h5 class="fivepad">MASSAGE OF THE DAY</h5>
                    <div class="count">0</div>
                    <h5 class="fivepad">Status : Active</h5>
                    <p><center class="right"><a href="index/createmessageoftheday">Create New </a><i class="fa fa-arrow-circle-right"></i></center></p>
                </div>
            </div>
            <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="red blackfont tile-stats ">
                    <div class="icon"><i class="fa fa-gear black"></i></div>
                    <h5 class="fivepad">NOTICE</h5>
                    <div class="count">0</div>
                    <h5 class="fivepad">Manage Student/Employee Dashboard Notice</h5>
                    <p><center class="right"><a href="index/createnotice">Create New </a><i class="fa fa-arrow-circle-right"></i></center></p>
                </div>
            </div>
        </div>
    </div>
</div>