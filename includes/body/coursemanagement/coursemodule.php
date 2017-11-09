<div class="page-title">
    <div class="title_left">
        <h4><blue>Home</blue> Manage Course Modules</h4>
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
    <div class="x_panel">
    <div class="x_title">
        <h2><i class="fa fa-plus"> </i> Manage Modules</h2>
        <div class="clearfix"></div>
    </div>
        <div class="row top_tiles">
            <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats ">
                    <div class="icon"><i class="fa fa-user blue"></i></div>
                    <h5 class="fivepad">MANAGE SUBJECT</h5>
                    <div class="count">0</div>
                    <p><center class="right"><a href="index/addcourse">Create New </a><i class="fa fa-arrow-circle-right"></i></center></p>
                </div>
            </div>
            <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats ">
                    <div class="icon"><i class="fa fa-gear blue"></i></div>
                    <h5 class="fivepad">VIEW SUBJECT</h5>
                    <div class="count">0</div>
                    <p><center class="right"><a href="index/course">Create New </a><i class="fa fa-arrow-circle-right"></i></center></p>
                </div>
            </div> 
        </div>
    </div>
</div>

<div id = "postnewcourse"></div>
<script type="text/javascript">
//Automaticaly load forum chats
    $(document).ready(function() {
        setInterval(function(){
            $('#postnewcourse').load('includes/controllers/retrive/addcourse.php')
        }, 1000);
    });

</script>


