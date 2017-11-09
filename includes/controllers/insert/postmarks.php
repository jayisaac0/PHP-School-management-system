<?php
    if(isset($_POST['postmarks']))
    {
        $year = date('Y');  
        $term = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['term'])))));
        $studentid = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['studentid'])))));
        $classname = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['classname'])))));
        $classdetails = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['classdetails'])))));
        $mathematicsone = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['mathematicsone'])))));
        $mathematicstwo = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['mathematicstwo'])))));
        $mathematicsthree = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['mathematicsthree'])))));
        $mathematicstotal = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['mathematicstotal'])))));
        $mathematicsremark = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['mathematicsremark'])))));
        $englishone = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['englishone'])))));
        $englishtwo = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['englishtwo'])))));
        $englishthree = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['englishthree'])))));
        $englishtotal = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['englishtotal'])))));
        $englishreview = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['englishreview'])))));
        $kiswahilione = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['kiswahilione'])))));
        $kiswahilitwo = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['kiswahilitwo'])))));
        $kiswahilithree = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['kiswahilithree'])))));
        $kiswahilitotal = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['kiswahilitotal'])))));
        $kiswahiliremark = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['kiswahiliremark'])))));
        $scienceone = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['scienceone'])))));
        $sciencetwo = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['sciencetwo'])))));
        $sciencethree = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['sciencethree'])))));
        $sciencetotal = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['sciencetotal'])))));
        $scienceremark = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['scienceremark'])))));
        $sstudiesone = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['sstudiesone'])))));
        $sstudiestwo = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['sstudiestwo'])))));
        $sstudiesthree = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['sstudiesthree'])))));
        $sstudiestotal = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['sstudiestotal'])))));
        $sstudiesremark = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['sstudiesremark'])))));

        try
        {
            $stmt = $auth_user->runQuery("INSERT INTO primaryschoolmarks(year, term, studentid, classname, classdetails, mathematicsone, mathematicstwo, mathematicsthree, mathematicstotal, mathematicsremark, englishone, englishtwo, englishthree, englishtotal, englishreview, kiswahilione, kiswahilitwo, kiswahilithree, kiswahilitotal, kiswahiliremark, scienceone, sciencetwo, sciencethree, sciencetotal, scienceremark, sstudiesone, sstudiestwo, sstudiesthree, sstudiestotal, sstudiesremark, created_by)
             VALUES(:year, :term, :studentid, :classname, :classdetails, :mathematicsone, :mathematicstwo, :mathematicsthree, :mathematicstotal, :mathematicsremark, :englishone, :englishtwo, :englishthree, :englishtotal, :englishreview, :kiswahilione, :kiswahilitwo, :kiswahilithree, :kiswahilitotal, :kiswahiliremark, :scienceone, :sciencetwo, :sciencethree, :sciencetotal, :scienceremark, :sstudiesone, :sstudiestwo, :sstudiesthree, :sstudiestotal, :sstudiesremark, :user_id) ");





            $stmt->bindparam(":year", $year);
            $stmt->bindparam(":term", $term);
            $stmt->bindparam(":studentid", $studentid);
            $stmt->bindparam(":classname", $classname);
            $stmt->bindparam(":classdetails", $classdetails);
            $stmt->bindparam(":mathematicsone", $mathematicsone);
            $stmt->bindparam(":mathematicstwo", $mathematicstwo);
            $stmt->bindparam(":mathematicsthree", $mathematicsthree);
            $stmt->bindparam(":mathematicstotal", $mathematicstotal);
            $stmt->bindparam(":mathematicsremark", $mathematicsremark);
            $stmt->bindparam(":englishone", $englishone);
            $stmt->bindparam(":englishtwo", $englishtwo);
            $stmt->bindparam(":englishthree", $englishthree);
            $stmt->bindparam(":englishtotal", $englishtotal);
            $stmt->bindparam(":englishreview", $englishreview);
            $stmt->bindparam(":kiswahilione", $kiswahilione);
            $stmt->bindparam(":kiswahilitwo", $kiswahilitwo);
            $stmt->bindparam(":kiswahilithree", $kiswahilithree);
            $stmt->bindparam(":kiswahilitotal", $kiswahilitotal);
            $stmt->bindparam(":kiswahiliremark", $kiswahiliremark);
            $stmt->bindparam(":scienceone", $scienceone);
            $stmt->bindparam(":sciencetwo", $sciencetwo);
            $stmt->bindparam(":sciencethree", $sciencethree);
            $stmt->bindparam(":sciencetotal", $sciencetotal);
            $stmt->bindparam(":scienceremark", $scienceremark);
            $stmt->bindparam(":sstudiesone", $sstudiesone);
            $stmt->bindparam(":sstudiestwo", $sstudiestwo);
            $stmt->bindparam(":sstudiesthree", $sstudiesthree);
            $stmt->bindparam(":sstudiestotal", $sstudiestotal);
            $stmt->bindparam(":sstudiesremark", $sstudiesremark);
            $stmt->bindparam(":user_id", $user_id);
            $stmt->execute();
                ?>
                    <div class="alert alert-success" >
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                        <?php echo 'Marks posted';
                        ?>
                    </div>
                <?php
            return $stmt;
        }
            catch(PDOException $e)
        {
            echo $e->getMessage();
        }

    }

?>
