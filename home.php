<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Home</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Upload Dashboard</a> </p>
        </div>

        <div class="right-links">

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            
            echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
            ?>

            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>
            <a href="/Timetable_frontend/DepartmentsXOX/Home.html" target="blank"> <button class="btn">Home Page</button> </a>
            <a href="http://127.0.0.1:8000/" target="blank"> <button class="btn">Admin Page</button> </a>
        </div>
    </div>
    <main>
            
       <div class="main-box top">
          <div class="top">
          <center>  <div class="box">
                <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
            </div>
            <div class="box">
               <a href="/CompEngStu/Comp Eng.html" class="boxtext">Computer Engineering(Students)</a>
            </div>
            <div class="box">
               <a href="/CompEngLec/Comp Eng.html" class="boxtext">Computer Engineering(Lecturers)</a>
            </div>
            <div class="box">
               <a href="/ElecEngStu/Electrical.html" class="boxtext">Electrical Engineering(Students)</a>
            </div>
            <div class="box">
               <a href="/ElecEngLec/Electrical.html" class="boxtext">Electrical Engineering(Lecturers)</a>
            </div>
            <div class="box">
               <a href="/MathStu/Maths.html" class="boxtext">Mathematics(Students)</a>
            </div><br>
            <div class="box">
               <a href="/MathLec/Maths.html" class="boxtext">Mathematics(Lecturers)</a>
            </div>
            <div class="box">
               <a href="/TelecomregStu/Telecom.html" class="boxtext">Telecom Engineering Regular(Students)</a>
            </div>
            <div class="box">
               <a href="/TelecomregLec/Telecom.html" class="boxtext">Telecom Engineering Regular (Lecturers)</a>
            </div>
            <div class="box">
               <a href="/TelecomTopStu/TelecomTopUp.html" class="boxtext">Telecom Engineering TopUp(Students)</a>
            </div>
            <div class="box">
               <a href="/TelecomTopLec/TelecomTopUp.html" class="boxtext">Telecom Engineering TopUp (Lecturers)</a>
            </div>
            <div class="box">
               <a href="/TelecomDipStu/TelecomDiploma.html" class="boxtext">Telecom Engineering Diploma(Students)</a>
            </div>
            <div class="box">
               <a href="/TelecomDipLec/TelecomDiploma.html" class="boxtext">Telecom Engineering Diploma (Lecturers)</a>
            </div></center>
        
            
          </div>
          <!-- <div class="bottom">
            <div class="box">
                <p>And you are <b><?php echo $res_Age ?> years old</b>.</p> 
            </div>
          </div> -->
       </div>

    </main>
</body>
</html>