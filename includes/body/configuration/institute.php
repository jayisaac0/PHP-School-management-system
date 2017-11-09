<div class="page-title">
    <div class="title_left">
        <h4><blue>Home</blue> / Configuration / Institute Setup / Nyambaria

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






 
    <div class="x_panel" style="min-height:350px;">
        <div class="x_title">
            <h2><i class="fa fa-bars"></i> Profile </h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                    <center><img src="" alt="" style="background:black;width:200px;height:200px;border-radius:200px;" class="caption thumbnail " /></center>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <?php
                        $stmt = $auth_user->runQuery("SELECT * FROM `town` JOIN `Nationality` ON `Nationality`.`created_by`=`town`.`created_by` ");
                        $stmt->execute(array());
                        $town=$stmt->fetchAll(PDO::FETCH_OBJ);
                        foreach ($town as $town) {
                            ?>
                            <center><h1>Nyammbaria High School</h1></center>

                            <center><h2><?php echo $town->town; ?></h2></center>
                            <center><h2><?php echo $town->country_name; ?></h2></center>
                            <center><h2><?php echo $town->nationality; ?></h2></center>
                            <center><h2><?php echo $town->state; ?></h2></center>
                            <?php
                        }
                    ?>

                    </div>
                    </div>
                </div>
            </div>
        </div>
 
</div>