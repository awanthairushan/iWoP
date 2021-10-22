<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Profile</title>
    <link rel="stylesheet" href="adminprof.css">
    <link rel="stylesheet" href="../../Repeating-pages/sidenav/sidenavigation.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
        <?php include '../../repeatable_contents/admin_navbar/topnav.php';?>
      <style> <?php include '../../repeatable_contents/admin_navbar/topnav.css'; ?>  </style>
      <div class ="heading1" >  </div>   
       <?php include '../../repeatable_contents/admin_navbar/sidenav.php';?>
      <style> <?php include '../../repeatable_contents/admin_navbar/sidenav.css'; ?>  </style>
      <script type="../../repeatable_contents/admin_navbar/sidenav.js"></script>


<div class="box2">
  <div class="txt">  Profile </div>
    <div class="mainDiv">
        <div class="cardStyle">
            <form action="" method="post">


                <img src="../../Images/img.png" class="userimg">
                <!-- <img src="../Images/addImage.png" alt="" id="imagePreview">
                <input type="file" name="image" id="image" hidden>
                <label for="image" id="uploadBtn">Choose Image</label> -->

                <input type="file" id="myFile" name="filename" class="input_profile">

               
                <!--<img src="camere.png" alt="camera" class="camera">-->
                <div class="inputDiv">
                    <label class="inputLabel" for="name">Name</label> </br>
                    <input type="text" id="name" name="name" class="input" required>
                </div>


                <div class="inputDiv">
                    <label class="inputLabel" for="email">Email</label> </br>
                    <input type="email" id="email" name="email" class="input" required>
                </div>

                <button type="submit" id="submitButton" onclick="validateSignupForm()" class="update">
                    <span>Update details</span>

                </button>



            </form>
        </div>
    </div>

</div>

</body>
</html>

