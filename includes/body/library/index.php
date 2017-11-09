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
                $stmt = $auth_user->runQuery("SELECT * FROM `messageoftheday` ORDER BY `time_created` DESC LIMIT 1 ");
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
<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="x_panel">
        <div class="row top_tiles">
            <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats blue whitefont">
                    <div class="icon"><i class="fa fa-group"></i></div>
                            <?php $stmt = $auth_user->runQuery("SELECT * FROM `books` ");
                            $stmt->execute(array());
                            $books=$stmt->fetchAll(PDO::FETCH_OBJ); 
                             foreach ($books as $books) { @$msg_d = 1;  @$ms_g += $msg_d; }?>   
                    <div class="count"><?php echo $ms_g; ?></div>
                    <h3>Books</h3>
                    <p><center><a href="index/books">View books </a><i class="fa fa-arrow-circle-right"></i></center></p>
                </div>
            </div>
            <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats blue green">
                    <div class="icon"><i class="fa fa-user"></i></div>  
                            <?php $stmt = $auth_user->runQuery("SELECT * FROM `borrowed` ");
                            $stmt->execute(array());
                            $borrowed=$stmt->fetchAll(PDO::FETCH_OBJ); 
                             foreach ($borrowed as $borrowed) { @$bor_r = 1;  @$borrowed += $bor_r; }?>                    
                    <div class="count"><?php echo $borrowed; ?></div>
                    <h3>Borrowed books</h3>
                    <p><center><a href="index/return">View assignments </a><i class="fa fa-arrow-circle-right"></i></center></p>
                </div>
            </div>
            <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats orange whitefont">
                    <div class="icon"><i class="fa fa-graduation-cap"></i></div>                     
                    <div class="count">Term results</div>
                    <h3>Status</h3>
                    <p><center><a href="javascript::">View results</a><i class="fa fa-inbox"></i></center></p>
                </div>
            </div>
            <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats red whitefont">
                    <div class="icon"><i class="fa fa-check-square-o"></i></div>                    
                    <div class="count">0</div>
                    <h3>My Profile </h3>
                    <p><center><a href="javascript::">Edit profile</a><i class="fa fa-arrow-circle-right"></i></center></p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="col-md-4 col-sm-4 col-xs-12">
    <div class="x_panel blue blackfont">
        <div class="row top_tiles" style="min-height:300px;">
            <?php
                $stmt = $auth_user->runQuery("SELECT * FROM `notice` ORDER BY `time_created` DESC LIMIT 1 ");
                $stmt->execute(array());
                $notice=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($notice as $notice) {
                    ?>
                    <?php echo $notice->noticedescription; ?>
                    <?php
                }
            ?>
        </div>
    </div>
</div>