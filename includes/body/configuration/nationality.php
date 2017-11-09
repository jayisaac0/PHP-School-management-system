<div class="page-title">
    <div class="title_left">
        <h4><blue>Home</blue> / Configuration / Nationality
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
    <h1><i class="fa fa-plus"> </i>Add Nationality</h1>
    <div class="clearfix"></div>
</div>
<div class="x_panel">
    <div class="x_content">
        <br />
        <?php require_once 'includes/controllers/insert/nationality.php'; ?>        
        <form id="demo-form2" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="text" id="nationality" name="nationality" required="required" placeholder="Nationality" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="clearfix"></div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-0">
                    <button class="btn btn-primary btn-lg" type="reset">Reset</button>
                    <button type="submit" id="postnationality" name="postnationality" class="btn btn-success btn-lg">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
              











<div id = "postednationality"></div>
<script type="text/javascript">
//Automaticaly load forum chats
    $(document).ready(function() {
        setInterval(function(){
            $('#postednationality').load('includes/controllers/retrive/nationality.php')
        }, 1000);
    });

</script>
