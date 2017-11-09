<?php
    if(isset($_POST['borrowbook']))
    {
        @$student = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['student'])))));
        @$book = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['book'])))));

        if($student == "") {
            $error[] = "No student selected!";
        }
        else if($book == "") {
            $error[] = "No book selected!";
        }
        else
        {


        $stmt = $auth_user->runQuery("SELECT `student`, `book` FROM `borrowed` WHERE book=:book ");
        $stmt->execute(array(':book'=>$book));
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        if(strtolower($row['book']) == strtolower($book) ) {
            ?>
                <div class="alert alert-danger" >
                    <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                    <?php echo 'Book already borrowed'; ?>
                </div>
            <?php
        }else{

            try
            {
                if($auth_user->bookborrowed($student, $book, $user_id))
                {
                    ?>
                        <div class="alert alert-success" >
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                            <?php echo 'Book borrowed'; ?>
                        </div>
                    <?php
                }
            }catch(PDOException $e)
                {
                    echo $e->getMessage();
                }


        }



        }

    }

?>
