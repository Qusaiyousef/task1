<?php
    session_start();
   include "./init.php";
    //check connection
    if(!$conn)
    {
        die("connection failed: " .mysqli_connect_error());
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Student GATEWAY </title>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body dir="rtl">
        <!-- <section class="contact" id="contact"> -->

        <div class="title">
        <span class="black">Student Result</span> <span class="green"> Management System</span> 
       </div>

    <div class="search">
    <form method="post" class="title">
    <fieldset>
                    <legend class="heading"></legend>
        <?php 
        include "init.php";
        $term_result=mysqli_query($conn,"select term_id , term_name from term ");
      
            echo '<select name="term" class=box >';
                    while($row=mysqli_fetch_array($term_result)){
                        $get_term_name=$row['term_name'];
                        $get_term_id=$row['term_id'];
                        echo ' <option  value="'.$get_term_id.'"> '.$get_term_name.' </option>';
                    }
           echo '</select>';
        
        ?>
                    <!-- <select name="term" id="" class="box"> 
                        <option value="1">الترم الاول</option> 
                        <option value="2">الترم الثاني</option>
                        <option value="3">الترم الثالث</option> 
                        <option value="4">الترم الرابع</option>
                    </select> -->
                    <input type="text" name= "logid" placeholder="الرقم الاكاديمي" class="box" required autocomplete > 
                    <input type="password" name= "password" placeholder="كلمة المرور" class="box" required>      
                    <input type="submit" value="Get Result " class="btn btnta">
                </form>
                </fieldset>
    </div>
            <a href="index.html" class="btn ">back</a>  


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
            header('location:grade.php');
        }  
        else 
            echo "<script>alert('كلمة المرور خاظئة');</script>"; 
    else
        echo "<script>alert('الرقم الاكاديمي خاظئ');</script>";
    
        
      
        
 }
 
    mysqli_close($conn);
?>

    </body>
</html>