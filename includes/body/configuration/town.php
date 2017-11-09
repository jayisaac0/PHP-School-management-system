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







<div class="x_title">
    <h1><i class="fa fa-plus"> </i> Add City/Town</h1>
    <div class="clearfix"></div>
</div>
<div class="x_panel">
    <div class="x_content">
        <br />
        <?php require_once 'includes/controllers/insert/town.php'; ?>
        <form id="demo-form2" method="POST" data-parsley-validate class="form-horizontal form-label-left">
            <div class="form-group">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <select class="select2_single form-control" id="country_name" name="country_name" required="required" tabindex="-1">
                        <option>---Select Country---</option>
                    <?php
                        $stmt = $auth_user->runQuery("SELECT * FROM `state`  ");
                        $stmt->execute(array());
                        $state=$stmt->fetchAll(PDO::FETCH_OBJ);
                        foreach ($state as $state) {
                            ?>
                            <option value="<?php echo $state->country_name; ?>"><?php echo $state->country_name; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <select class="select2_single form-control" id="state" name="state" required="required" tabindex="-1">
                    <option>---Select State/province---</option>
                    <?php
                        $stmt = $auth_user->runQuery("SELECT * FROM `state`  ");
                        $stmt->execute(array());
                        $state=$stmt->fetchAll(PDO::FETCH_OBJ);
                        foreach ($state as $state) {
                            ?>
                            <option value="<?php echo $state->state; ?>"><?php echo $state->state; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <input type="text" id="town" name="town" required="required" placeholder="City/Town Name" class="form-control col-md-6 col-xs-12">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-0">
                    <button class="btn btn-primary btn-lg" type="reset">Reset</button>
                    <button type="submit" id="posttown" name="posttown" class="btn btn-success btn-lg">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
  


<div id = "postedtown"></div>
<script type="text/javascript">
//Automaticaly load forum chats
    $(document).ready(function() {
        setInterval(function(){
            $('#postedtown').load('includes/controllers/retrive/town.php')
        }, 1000);
    });

</script>



