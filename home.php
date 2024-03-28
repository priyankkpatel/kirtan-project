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
    <link rel="stylesheet" href="style.css">
    
    <title>Home</title>
</head>
    <style>
           .navbar
{
    height: 60px;
    background-color: #0f1111;
    color: white;
    display:flex;
    text-align: center;
    align-items:center ;
    justify-content: space-evenly;
}
    </style>
<body>
    //body homepage 

    <div class="navbar">
       <div class="signin border">
            <p> <span> Home</span></p>
        </div>

        <div class="navshop">
            <p> <span>shop</span></p>
        </div>
        
        <div clas="navcontact">
            contact us
        </div>
        <div class="signin border">
            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>
        </div>
</div>
   <form>
        <div class="right-links">

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_id = $result['Id'];
            }
            
            echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
            ?>

            

        </div>
    </div>
</form>
</body>
</html>
