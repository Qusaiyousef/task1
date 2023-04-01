<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
    <div class="title">
        <span class="black">Student Result</span> <span class="green"> Management System</span>
    </div>
        <div class="search">
            <form action="" method="post">
                <fieldset>
                    <legend class="heading"></legend>

                    <?php
                        include('init.php');

                        $class_result=mysqli_query($conn,"SELECT `term_name`,'term_id' FROM `term`");
                            echo '<select name="term">';
                            echo '<option selected disabled>Select Term</option>';
                        while($row = mysqli_fetch_array($class_result)){
                            $display=$row['term_name'];
                            $display2=$row['term_id'];
                            echo '<option value="'.$display2.'">'.$display.'</option>';
                        }
                        echo'</select>'
                    ?>
                    <input type="text" name="logid" placeholder=" YOUR ID">
                    <input type="password" name="password" placeholder="Roll No">
                    <input type="submit" value="Get Result">

                    <?php 


if(isset($_POST['logid']) && isset($_POST['password']))
{
    $logid=$_POST['logid'];
    $password= $_POST['password'];

    $sql = "select std_id  from student where std_id = $logid ";
    $sql2 = "select pass from student where pass = '$password' ";
    $result=mysqli_query($conn , $sql);
    $result2=mysqli_query($conn , $sql2);
    if( mysqli_num_rows($result)>0)
        if( mysqli_num_rows($result2)>0){
            $_SESSION['logid']=$_POST['logid'];                 
            $_SESSION['password']= $_POST['password'];
            $_SESSION['term']=$_POST['term'];
            header('location:student.php');
        }  
        else 
            echo "<script>alert('كلمة المرور خاظئة');</script>"; 
    else
        echo "<script>alert('الرقم الاكاديمي خاظئ');</script>";  
 }

    mysqli_close($conn);
?>

                </fieldset>
            </form>
        </div>
    </div>

</body>
</html>




