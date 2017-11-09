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





<div id = "postedmessageoftheday"></div>
<script type="text/javascript">
//Automaticaly load forum chats
    $(document).ready(function() {
        setInterval(function(){
            $('#postedmessageoftheday').load('includes/controllers/retrive/messageoftheday.php')
        }, 1000);
    });

</script>

