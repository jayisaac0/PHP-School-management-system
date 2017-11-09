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
    <h1><i class="fa fa-plus"> </i> Update session</h1>
    <div class="clearfix"></div>
</div>
<div class="x_panel">
    <div class="x_content">
        <br />
    <?php

        $stmt = $auth_user->runQuery("SELECT * FROM schoolsession  ");
        $stmt->execute(array());
        $schoolsession=$stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($schoolsession as $schoolsession) {
            echo $schoolsession->schoolsession_id;
        }
            ?>

        <?php require_once 'includes/controllers/insert/systemsession.php'; ?>
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
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select type="text" id="term" name="term" required="required" placeholder="Class" class="form-control col-md-7 col-xs-12">
                        <option value="Term one">Term one</option>
                        <option value="Term two">Term two</option>
                        <option value="Term three">Term three</option>
                    </select>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="year" name="year" required="required" value="<?php echo date('Y'); ?>" class="form-control col-md-7 col-xs-12" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-0">
                    <button type="submit" id="postschoolsession" name="postschoolsession" class="btn btn-success btn-lg">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
              
<div id= "country"></div>
<script type="text/javascript">
//Automaticaly load forum chats
    $(document).ready(function() {
        setInterval(function(){
            $('#country').load('includes/controllers/retrive/systemsession.php')
        }, 1000);
    });

</script>


