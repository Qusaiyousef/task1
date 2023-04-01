<?php
  session_start();
include "init.php";
    //التحقق من الاتصال 
    if(!$conn)
    {
        die("connection failed: " .mysqli_connect_error());
    }
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>grades</title>
    <link rel="stylesheet" href="css/student.css">
    <link rel="stylesheet" href="css/grade.css">

</head>
<body>
 
    <?php 

     include "init.php";
            $logid=$_SESSION['logid'];
            $pass=$_SESSION['password'];

     $name_sql=mysqli_query($conn,"select `f_name`,`m_name`,`l_name` from `student` where `std_id`=". $_SESSION['logid']." and pass='$pass'");
            while($row = mysqli_fetch_assoc($name_sql))
            {
            $f_name = $row['f_name'];
            $m_name = $row['m_name'];
            $l_name = $row['l_name'];
            }                                                             
   
     $sql2 = "select su.sub_name,SUM(g.m_mark+g.f_mark)as total ,count(g.f_mark) as total_count from subject su,grade  g where g.std_id="
    . $_SESSION['logid']." and su.term_id=".$_SESSION['term']." and su.sub_id=g.sub_id ";
            $result2=mysqli_query($conn,$sql2);
            while($row = mysqli_fetch_assoc($result2))
            {
            $sum = $row['total'];
            $avg=$row['total_count'];
            }
            $average=$sum/$avg;
   
     $sql = "select su.sub_name,g.m_mark,g.f_mark from subject su,grade  g where g.std_id="
     . $_SESSION['logid']." and su.term_id=".$_SESSION['term']." and su.sub_id=g.sub_id ";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
            echo "<div class=container>";
            echo "<div class=details>";
                echo  " <span>";echo "Name : "; echo"</span>"; echo "  $f_name $m_name $l_name "; echo '<br>';
                echo  " <span>";echo "PASS : "; echo"</span>"; echo   $pass ;  echo '<br>';
                echo  " <span>";echo "Roll No: "; echo"</span>"; echo"$logid"; echo '<br>';
            echo "</div>";
  
            echo "<div class=main>
                <div class=s1>
                    <p>المادة</p>
                </div>

                <div class=s1>
                    <p>نهائي</p>
                </div>

                <div class=s1>
                <p>نصفي</p>
                </div>

            </div>";
    

        while($row = mysqli_fetch_assoc($result)){  
            echo "  <div class=main>
            <div class=s2>
            <p>".$row['sub_name']."</p>
            </div>
            <div class=s2>
            <p>".$row['f_mark']."</p>
            </div>
            <div class=s2>
            <p>".$row['m_mark']."</p>
            </div>
           </div>";
     
        }
    }else{
                echo ' <div class="result">';
                echo '<p>Total Marks:&nbsp'.  "$sum ." .'</p>';
                echo '<p>Percentage:&nbsp'."$average .".'%</p>';
                echo '</div>';
                echo "<div class=button>
                        <button onclick=window.print()>Print Result</button>
                      </div>";
                echo'<a href="./login2.php" class="btn ">Back</a>';
                echo '</div>';

                echo "<script>alert('لا يوجد درجات لهذا الطالب');</script>";
                mysqli_close($conn);
            }


?>   
                

</body>
</html>


    