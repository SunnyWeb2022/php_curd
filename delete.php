<?php
    include("database.php");

    $id=$_GET["idth"];

    $query=mysqli_query($sql,"DELETE FROM `student_applay_form` WHERE id=$id ");
    if($query > 0)
    {
       ?>
       <script>
            alert("Deleted is successfully");
       </script> 
    <?php 
    }
    else{
        ?>
        <script>
            alert("Not delete");
        </script>
        <?php
    }

    header('location:check_status.php');

?>