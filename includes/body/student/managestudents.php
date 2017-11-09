<div class="page-title">
    <div class="title_left">
        <h4><blue>Home</blue> /Student /Manage Students</h4>
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






<div id = "poststudent"></div>
<script type="text/javascript">
//Automaticaly load forum chats
    $(document).ready(function() {
        setInterval(function(){
            $('#poststudent').load('includes/controllers/retrive/addstudent.php')
        }, 1000);
    });

</script>

<a href="index/addstudent"><button class="btn btn-primsry">Add Student</button></a>



