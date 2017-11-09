<?php
    if(isset($_POST['postsecondarymarks']))
    {
        $year = date('Y');  
		$term = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['term'])))));
		$studentid = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['studentid'])))));
		$classname = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['classname'])))));
		$classdetails = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['classdetails'])))));
		$mathematicspaperone = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['mathematicspaperone'])))));
		$mathematicspapertwo = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['mathematicspapertwo'])))));
		$mathematicspaperthree = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['mathematicspaperthree'])))));
		$mathematicsmarks = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['mathematicsmarks'])))));
		$mathematicsgrade = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['mathematicsgrade'])))));
		$englishpaperone = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['englishpaperone'])))));
		$englishpapertwo = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['englishpapertwo'])))));
		$englishpaperthree = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['englishpaperthree'])))));
		$englishmarks = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['englishmarks'])))));
		$englishgrade = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['englishgrade'])))));
		$kiswahilipaperone = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['kiswahilipaperone'])))));
		$kiswahilipapertwo = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['kiswahilipapertwo'])))));
		$kiswahilipaperthree = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['kiswahilipaperthree'])))));
		$kiswahilimarks = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['kiswahilimarks'])))));
		$kiswahiligrade = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['kiswahiligrade'])))));
		$physicspaperone = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['physicspaperone'])))));
		$physicspapertwo = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['physicspapertwo'])))));
		$physicspaperthree = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['physicspaperthree'])))));
		$physicsmarks = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['physicsmarks'])))));
		$physicsgrade = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['physicsgrade'])))));
		$biologypaperone = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['biologypaperone'])))));
		$biologypapertwo = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['biologypapertwo'])))));
		$biologypaperthree = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['biologypaperthree'])))));
		$biologymarks = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['biologymarks'])))));
		$biologygrade = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['biologygrade'])))));
		$chemistrypaperone = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['chemistrypaperone'])))));
		$chemistrypapertwo = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['chemistrypapertwo'])))));
		$chemistrypaperthree = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['chemistrypaperthree'])))));
		$chemistrymarks = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['chemistrymarks'])))));
		$chemistrygrade = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['chemistrygrade'])))));
		$geographypaperone = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['geographypaperone'])))));
		$geographypapertwo = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['geographypapertwo'])))));
		$geographypaperthree = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['geographypaperthree'])))));
		$geographymarks = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['geographymarks'])))));
		$geographygrade = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['geographygrade'])))));
		$bstudiespaperone = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['bstudiespaperone'])))));
		$bstudiespapertwo = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['bstudiespapertwo'])))));
		$bstudiespaperthree = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['bstudiespaperthree'])))));
		$bstudiesmarks = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['bstudiesmarks'])))));
		$bstudiesgrade = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['bstudiesgrade'])))));
		$agriculturepaperone = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['agriculturepaperone'])))));
		$agriculturepapertwo = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['agriculturepapertwo'])))));
		$agriculturepaperthree = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['agriculturepaperthree'])))));
		$agriculturemarks = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['agriculturemarks'])))));
		$agriculturegrade = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['agriculturegrade'])))));
		$historypaperone = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['historypaperone'])))));
		$historypapertwo = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['historypapertwo'])))));
		$historypaperthree = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['historypaperthree'])))));
		$historymarks = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['historymarks'])))));
		$historygrade = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['historygrade'])))));
		$religiouseducationpaperone = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['religiouseducationpaperone'])))));
		$religiouseducationpapertwo = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['religiouseducationpapertwo'])))));
		$religiouseducationpaperthree = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['religiouseducationpaperthree'])))));
		$religiouseducationmarks = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['religiouseducationmarks'])))));
		$religiouseducationgrade = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['religiouseducationgrade'])))));
		$foreignlanuagepaperone = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['foreignlanuagepaperone'])))));
		$foreignlanuagepapertwo = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['foreignlanuagepapertwo'])))));
		$foreignlanuagepaperthree = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['foreignlanuagepaperthree'])))));
		$foreignlanuagemarks = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['foreignlanuagemarks'])))));
		$foreignlanuagegrade = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['foreignlanuagegrade'])))));

        try
        {
            $stmt = $auth_user->runQuery("INSERT INTO highschoolmarks(year, term, studentid, classname, classdetails, mathematicspaperone, mathematicspapertwo, mathematicspaperthree, mathematicsmarks, mathematicsgrade, englishpaperone, englishpapertwo, englishpaperthree, englishmarks, englishgrade, kiswahilipaperone, kiswahilipapertwo, kiswahilipaperthree, kiswahilimarks, kiswahiligrade, physicspaperone, physicspapertwo, physicspaperthree, physicsmarks, physicsgrade, biologypaperone, biologypapertwo, biologypaperthree, biologymarks, biologygrade, chemistrypaperone, chemistrypapertwo, chemistrypaperthree, chemistrymarks, chemistrygrade, geographypaperone, geographypapertwo, geographypaperthree, geographymarks, geographygrade, bstudiespaperone, bstudiespapertwo, bstudiespaperthree, bstudiesmarks, bstudiesgrade, agriculturepaperone, agriculturepapertwo, agriculturepaperthree, agriculturemarks, agriculturegrade, historypaperone, historypapertwo, historypaperthree, historymarks, historygrade, religiouseducationpaperone, religiouseducationpapertwo, religiouseducationpaperthree, religiouseducationmarks, religiouseducationgrade, foreignlanuagepaperone, foreignlanuagepapertwo, foreignlanuagepaperthree, foreignlanuagemarks, foreignlanuagegrade, created_by)
             VALUES(:year, :term, :studentid, :classname, :classdetails, :mathematicspaperone, :mathematicspapertwo, :mathematicspaperthree, :mathematicsmarks, :mathematicsgrade, :englishpaperone, :englishpapertwo, :englishpaperthree, :englishmarks, :englishgrade, :kiswahilipaperone, :kiswahilipapertwo, :kiswahilipaperthree, :kiswahilimarks, :kiswahiligrade, :physicspaperone, :physicspapertwo, :physicspaperthree, :physicsmarks, :physicsgrade, :biologypaperone, :biologypapertwo, :biologypaperthree, :biologymarks, :biologygrade, :chemistrypaperone, :chemistrypapertwo, :chemistrypaperthree, :chemistrymarks, :chemistrygrade, :geographypaperone, :geographypapertwo, :geographypaperthree, :geographymarks, :geographygrade, :bstudiespaperone, :bstudiespapertwo, :bstudiespaperthree, :bstudiesmarks, :bstudiesgrade, :agriculturepaperone, :agriculturepapertwo, :agriculturepaperthree, :agriculturemarks, :agriculturegrade, :historypaperone, :historypapertwo, :historypaperthree, :historymarks, :historygrade, :religiouseducationpaperone, :religiouseducationpapertwo, :religiouseducationpaperthree, :religiouseducationmarks, :religiouseducationgrade, :foreignlanuagepaperone, :foreignlanuagepapertwo, :foreignlanuagepaperthree, :foreignlanuagemarks, :foreignlanuagegrade, :user_id) ");

            $stmt->bindparam(":year", $year);
			$stmt->bindparam(":term", $term); 
			$stmt->bindparam(":studentid", $studentid); 
			$stmt->bindparam(":classname", $classname); 
			$stmt->bindparam(":classdetails", $classdetails); 
			$stmt->bindparam(":mathematicspaperone", $mathematicspaperone); 
			$stmt->bindparam(":mathematicspapertwo", $mathematicspapertwo); 
			$stmt->bindparam(":mathematicspaperthree", $mathematicspaperthree); 
			$stmt->bindparam(":mathematicsmarks", $mathematicsmarks); 
			$stmt->bindparam(":mathematicsgrade", $mathematicsgrade); 
			$stmt->bindparam(":englishpaperone", $englishpaperone); 
			$stmt->bindparam(":englishpapertwo", $englishpapertwo); 
			$stmt->bindparam(":englishpaperthree", $englishpaperthree); 
			$stmt->bindparam(":englishmarks", $englishmarks); 
			$stmt->bindparam(":englishgrade", $englishgrade); 
			$stmt->bindparam(":kiswahilipaperone", $kiswahilipaperone); 
			$stmt->bindparam(":kiswahilipapertwo", $kiswahilipapertwo); 
			$stmt->bindparam(":kiswahilipaperthree", $kiswahilipaperthree); 
			$stmt->bindparam(":kiswahilimarks", $kiswahilimarks); 
			$stmt->bindparam(":kiswahiligrade", $kiswahiligrade); 
			$stmt->bindparam(":physicspaperone", $physicspaperone); 
			$stmt->bindparam(":physicspapertwo", $physicspapertwo); 
			$stmt->bindparam(":physicspaperthree", $physicspaperthree); 
			$stmt->bindparam(":physicsmarks", $physicsmarks); 
			$stmt->bindparam(":physicsgrade", $physicsgrade); 
			$stmt->bindparam(":biologypaperone", $biologypaperone); 
			$stmt->bindparam(":biologypapertwo", $biologypapertwo); 
			$stmt->bindparam(":biologypaperthree", $biologypaperthree); 
			$stmt->bindparam(":biologymarks", $biologymarks); 
			$stmt->bindparam(":biologygrade", $biologygrade); 
			$stmt->bindparam(":chemistrypaperone", $chemistrypaperone); 
			$stmt->bindparam(":chemistrypapertwo", $chemistrypapertwo); 
			$stmt->bindparam(":chemistrypaperthree", $chemistrypaperthree); 
			$stmt->bindparam(":chemistrymarks", $chemistrymarks); 
			$stmt->bindparam(":chemistrygrade", $chemistrygrade); 
			$stmt->bindparam(":geographypaperone", $geographypaperone); 
			$stmt->bindparam(":geographypapertwo", $geographypapertwo); 
			$stmt->bindparam(":geographypaperthree", $geographypaperthree); 
			$stmt->bindparam(":geographymarks", $geographymarks); 
			$stmt->bindparam(":geographygrade", $geographygrade); 
			$stmt->bindparam(":bstudiespaperone", $bstudiespaperone); 
			$stmt->bindparam(":bstudiespapertwo", $bstudiespapertwo); 
			$stmt->bindparam(":bstudiespaperthree", $bstudiespaperthree); 
			$stmt->bindparam(":bstudiesmarks", $bstudiesmarks); 
			$stmt->bindparam(":bstudiesgrade", $bstudiesgrade); 
			$stmt->bindparam(":agriculturepaperone", $agriculturepaperone); 
			$stmt->bindparam(":agriculturepapertwo", $agriculturepapertwo); 
			$stmt->bindparam(":agriculturepaperthree", $agriculturepaperthree); 
			$stmt->bindparam(":agriculturemarks", $agriculturemarks); 
			$stmt->bindparam(":agriculturegrade", $agriculturegrade); 
			$stmt->bindparam(":historypaperone", $historypaperone); 
			$stmt->bindparam(":historypapertwo", $historypapertwo); 
			$stmt->bindparam(":historypaperthree", $historypaperthree); 
			$stmt->bindparam(":historymarks", $historymarks); 
			$stmt->bindparam(":historygrade", $historygrade); 
			$stmt->bindparam(":religiouseducationpaperone", $religiouseducationpaperone); 
			$stmt->bindparam(":religiouseducationpapertwo", $religiouseducationpapertwo); 
			$stmt->bindparam(":religiouseducationpaperthree", $religiouseducationpaperthree); 
			$stmt->bindparam(":religiouseducationmarks", $religiouseducationmarks); 
			$stmt->bindparam(":religiouseducationgrade", $religiouseducationgrade); 
			$stmt->bindparam(":foreignlanuagepaperone", $foreignlanuagepaperone); 
			$stmt->bindparam(":foreignlanuagepapertwo", $foreignlanuagepapertwo); 
			$stmt->bindparam(":foreignlanuagepaperthree", $foreignlanuagepaperthree); 
			$stmt->bindparam(":foreignlanuagemarks", $foreignlanuagemarks); 
			$stmt->bindparam(":foreignlanuagegrade", $foreignlanuagegrade); 
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
