<?php
    include '../Models/worker.php';
    

    if(isset($_POST['worker_id']) && isset($_POST['worker_name']) && isset($_POST['worker_username']) && isset($_POST['worker_password']) && isset($_POST['worker_gender']) && isset($_POST['worker_age']) && isset($_POST['worker_phone']) && isset($_POST['is_workerVerified']) && isset($_POST['rating']) && isset($_POST['block_status']) && isset($_POST['work_categories']))
    {
        if($_POST['worker_id'] != "" && $_POST['worker_name'] != "" && $_POST['worker_username'] != "" && $_POST['worker_password'] != "" && $_POST['worker_age'] != "" && $_POST['worker_phone'] != "" && $_POST['rating'] != "")
        {
            if(strlen($_POST['worker_password']) >= 8)
            {
                if(is_numeric($_POST['worker_age']))
                {
                    if(is_numeric($_POST['worker_phone']))
                    {
                        if(is_numeric($_POST['rating']) && $_POST['rating'] >= 0 && $_POST['rating'] <= 5)
                        {
                            $worker_id = $_POST['worker_id'];
                            $worker_name = $_POST['worker_name'];
                            $worker_username = $_POST['worker_username'];
                            $worker_password = $_POST['worker_password'];
                            $worker_gender = $_POST['worker_gender'];
                            $worker_age = $_POST['worker_age'];
                            $worker_phone = $_POST['worker_phone'];
                            $is_workerVerified = $_POST['is_workerVerified'];
                            $rating = $_POST['rating'];
                            $block_status = $_POST['block_status'];
                            $work_categories = $_POST['work_categories'];
                            echo $worker_id;
                            echo $worker_name;
                            echo $worker_username;
                            echo $worker_password;
                            echo $worker_gender;
                            echo $worker_age;
                            echo $worker_phone;
                            echo $is_workerVerified;
                            echo $rating;
                            echo $block_status;


                            setWorker($worker_id,$worker_name,$worker_username,$worker_password,$worker_gender, $worker_age, $worker_phone, $is_workerVerified, $rating, $block_status, $work_categories);
                            echo $_POST['worker_id']."<br>";
                            echo $_POST['worker_name']."<br>";
                            echo $_POST['worker_username']."<br>";
                            echo $_POST['worker_password']."<br>";
                            echo $_POST['worker_gender']."<br>";
                            echo $_POST['worker_age']."<br>";
                            echo $_POST['worker_phone']."<br>";
                            echo $_POST['is_workerVerified']."<br>";
                            echo $_POST['rating']."<br>";
                            echo $_POST['block_status']."<br>";
                            print_r($_POST['work_categories'])."<br>";
                            echo "YOYO4";

                            //header('Location: ../Views/admin/view-workers.php?add=true');
                        }
                        else
                        {
                            //header('Location: ../Views/admin/view-workers.php?add=false');
                        }
                    }
                    else
                    {
                        //header('Location: ../Views/admin/view-workers.php?add=false');
                    }
                }
                else
                {
                    //header('Location: ../Views/admin/view-workers.php?add=false');
                }
            }
            else
            {
                //header('Location: ../Views/admin/view-workers.php?add=false');
            }       
        }
        else
        {
            //header('Location: ../Views/admin/view-workers.php?add=false');
        }
    }
    else
    {
        //header('Location: ../Views/admin/view-workers.php?add=false');
    }

    
?>