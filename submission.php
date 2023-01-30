<?php
session_start();
require "includes/database_connect.php";
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YOUR HOTEL AT <?php echo $city_name ?> IS BOOKED</title>
    <style>
table, th, td {
  border: 1px solid black;
  border-radius: 10px;
}

body
{
    background-image: url("BG.jpg");
}



</style>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/property_detail.css" rel="stylesheet" />
</head>

<body>
    
    <?php
    include "includes/header.php";
    ?>

    

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
           
            

        </ol>
    </nav>
      <H1 style="color:white"> Please fill your detail </H1>
        <TABLE style="width:100%" >
            <tr style="color:white">
                <th>REFRENCE NUMBER </th>
                <td>
                <span id="ONE"> </span>                 
                <script src="random.js">   </script>
                   </td>
            </tr>
            
            <tr style="color:white">
                 <th>
                    check in date
                 </th>
                    <td>  
                         <input type="month" NAME='CHECK_IN_DATE'>
                    </td>
            </tr>

        <tr style="color:white">
            <th>
                check in time
            </th>
                <td>    
                     <input type="time">
                </td>
        </tr>

        <tr style="color:white">
            <th>
                check out date
            </th>
                <td>  
                     <input type="month">
                <td>
            </tr>

        <tr style="color:white">
            <th>
                check out time
            </th>
            <td>  
                 <input type="time">
            </td>
        </tr>

        <tr style="color:white">
            <th>
                Number OF rooms
            </th>
                <td>
                       <input type="number">
                </td>
        </tr>

        <tr style="color:white">
            <th>
                Number OF people
            </th>
                <td>  
                 <input type="number">
                </td>
        </tr>

        <tr style="color:white">
            <th>
                IS ANY SPECIAL REQUIREMENT 
            </th>
            <td> 
                <input type="text">
            </td>
        </tr>

        <tr style="color:white">
            <td>
                <input type="checkbox">
            </td>
            <td> 
                  I agree with all term and condition of book my hotel
            </td>
        </tr>

        
                
            
        </TABLE>
        <div class="button-container col-6">
                            <a href="payment.php" class="btn btn-primary"> submit </a>
                        </div>
                        <br>


   <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>
</body>

</html>
