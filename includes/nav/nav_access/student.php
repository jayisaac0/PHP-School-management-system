<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
<div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
        <li><a href=""><i class="fa fa-bars"></i>Menu</a></li>
        <li><a href="index/studentname/<?php echo $userRow['user_name']; ?>"><i class="fa fa-square"></i> Student dashboard</a></li>
        <li><a href="index/editaccount/<?php echo $userRow['user_name']; ?>"><i class="fa fa-edit"></i> Edit profile</a></li>
        <li><a href="index/results/<?php echo $userRow['user_name']; ?>"><i class="fa fa-user"></i> Latest Results</a></li>
        <li><a href="index/assignments/<?php echo $userRow['user_name']; ?>"><i class="fa fa-file-text"></i> Student assignments</a></li>
        <li><a href="index/library/<?php echo $userRow['user_name']; ?>"><i class="fa fa-book"></i> Library</a></li>
        <li><a href="index/fee/<?php echo $userRow['user_name']; ?>"><i class="fa fa-money"></i> Fee</a></li>
    </ul>
</div>
</div>