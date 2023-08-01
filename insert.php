<?php

include("./database.php");

    // $hid=$_POST["h1"];
    $name=$_POST["t1"];
    $qli=$_POST["t2"];
    $phone=$_POST["t3"];
    $email=$_POST["t4"];
    $any=$_POST["t5"];
    $course=$_POST["t6"];

        
    $query=mysqli_query($sql,"insert into student_applay_form (name,qualifation,phone,email,support,course) values ('$name','$qli','$phone','$email','$any','$course')");
    if($query > 0 )
    {
        echo "<script>alert('Successfully inseration')</script>";
        echo "<script>window.location='index.php'</script>";   
    }
    else{

        echo "<script>alert('inseration is not')</script>";
        echo "<script>window.location='index.php'</script>"; 
    }

?>