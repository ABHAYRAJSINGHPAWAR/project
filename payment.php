
<!DOCTYPE html>
<html lang="en">


    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title> | BOOK MY HOTEL</title>

        <?php
        include "includes/head_links.php";
        ?>
        <link href="css/property_list.css" rel="stylesheet" />

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
 


    </head>

    <body>
    <?php
    include "includes/header.php";
    ?>



       <h1 style="color:white"> YOUR ROOM IS BOOKED  </h1>
       <TABLE style="width:100% " >
            <TR style="color:white">
                <TH > 
                    REFRENCE NUMBER
                </TH>
                <TD>
                    12YUSHDDJKBFVH
                <TD>
            </TR> 
            
            <TR style="color:white">
                <TH>
                    BOOKING DATE
                </TH>
                <TD> <span id="time"> </span>
                <script src="TIME.js">   </script>
                <TD>
                
            </tr>  
        </table>      
            <br>
       
             <p style="color:white"><i>Thanyou for booking.For more booking <u><a href="index.php">click on</a></u> </i> </p> 
             <br>
             <br>
            
             

<TABLE style="width:100%">
<TR style="color:white">
    <TH> 
       cleaness
    </TH>
        <TD>
             <input type="range" name="clean" id="clean">
        </TD>
</TR>

<TR style="color:white">
    <TH>
        facilities
    </TH>
         <TD> 
            <input type="range" name="fac" id="fac">
        </TD>
</TR>

<TR style="color:white">
    <TH> 
        room quality
    </TH>
    <TD>
        <input type="range" name="quality" id="quality">
    </TD>
</TR> 

<TR style="color:white">

    <TH>
        staff behaviour
    </TH>
    <TD>
         <input type="range" name="beha" id="beha">
    </TD>


</TR>

</TABLE>

<?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>
    </body>
</html>