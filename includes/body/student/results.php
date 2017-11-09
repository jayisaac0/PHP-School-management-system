<?php
if(isset($_GET['ref'])) {
$ref = $_GET['ref'];
$student = $_GET['student'];

?>

<div class="page-title">
  <div class="title_left">
    <h3></h3>
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

<div class="clearfix"></div>




   <?php
    $stmt = $auth_user->runQuery("SELECT * FROM `students` WHERE `studentid`='".$userRow['user_name']."' ");
    $stmt->execute(array());
    $students=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($students as $students) {


    $stmt = $auth_user->runQuery("SELECT * FROM `schoolsession`   ");
    $stmt->execute(array());
    $schoolsession=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($schoolsession as $schoolsession) {

    $stmt = $auth_user->runQuery("SELECT * FROM `admisioncategory` ");
    $stmt->execute(array());
    $admisioncategory=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($admisioncategory as $admisioncategory) {
        if(strtolower($admisioncategory->category) == "primary")
        {
            //echo "FOUND";
            require_once 'level/primary.php';
        }else
        {
            //echo "Nothing";
            require_once 'level/highschool.php';

        }
    }

    }
}
 
}
?>