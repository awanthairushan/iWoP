
<html lang="en" dir="ltr"></html>
    <title> New Manager </title>

    <head> 

    <?php
      $result = require 'all_dash.php';
    ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!----Profile---->
        <link rel="stylesheet" href="admin_dashboard.css"> 
         <!-- Boxiocns CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'><!------------side nav icons----->
        

    </head>
    <body>
      <?php include '../../repeatable_contents/admin_navbar/topnav.php';?>
      <style> <?php include '../../repeatable_contents/admin_navbar/topnav.css'; ?>  </style>
      <br>
      <div class ="heading1" >  </div>   
       <?php include '../../repeatable_contents/admin_navbar/sidenav.php';?>
      <style> <?php include '../../repeatable_contents/admin_navbar/sidenav.css'; ?>  </style>
      <script type="../../repeatable_contents/admin_navbar/sidenav.js"></script>
      <br>
      <br>


<!----------------Dashboard------------------------------->
<b class="dashboard"> Dashboard </b> </br>

<div class="box3">  <div class="txt5"> Category Count </div> </div>
<div class="box4"> </div>
<div class="box5"> </div>



<!------------------- Mnagers table-------------------->
<div class ="heading1" > Managers </div>
        <div class= "container"> 
        <div class="table-wrapper">
            <table style="border-spacing: 25px" class="fl-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Contact No</th>
                        <th>Email</th>
                        <th>NIC</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php
            while ($rows = mysqli_fetch_array($result)){
                echo "<tr>
                    <td>".$rows['name']."</td>
                    <td>".$rows['contact_No']."</td>
                    <td>".$rows['email']."</td>
                    <td>".$rows['NIC']."</td>
                    
                </tr>";
            }
          ?>
                    
                </tbody>
            </table> 
    </div> 

    

    <!---------------------Added categories------------------>
    <div class ="heading1" > Added categories </div>
    <div class= "container"> 
        <div class="table-wrapper">
            <table style="border-spacing: 25px" class="fl-table">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Added Date</th>
                    </tr>
                </thead>
                <tbody>

                  <tr>
                      <td> Pottery </td>
                      <td> <img src="../../Images/category/waiter.png" class="image"> </td>
                      <td> 10/10/2021 </td>
                  </tr>
                
                    <?php
            // while ($rows = mysqli_fetch_array($result)){
            //     echo "<tr>
            //         <td>".$rows['name']."</td>
            //         <td>".$rows['contact_No']."</td>
            //         <td>".$rows['email']."</td>
            //         <td>".$rows['NIC']."</td>
                    
            //     </tr>";
            // }
          ?>
                    
                </tbody>
            </table>
    </div> </br>



    </body>

    </html>
   