<?php

    include("./database.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curd Operation</title>
    <link rel="stylesheet" href="./css/bootstrap_responsive.css">
    <script src="./css/bootstrap.bundle.js"></script>
    <style>
        *{
            margin:0px;
            padding:0px;
            box-sizing:border-box;
        }
        
        h1{
            text-align:center;
            margin-bottom:2%;
            box-sizing:border-box;
            color:#000;
        }
        table{
            width:80%;
            margin:0px auto;
        }
        thead th{
            padding:1% 0px;
        }
        tbody td{
            padding:0.5% 10px;
            color:black;
            font-weight:500;
        }
        .delete{
            color:red;
            text-decoration:none;
            font-weight:700;
            font-size:20px;
            text-shadow:5px 5px 10px black;
            border:none;
            
          
        }
        .edit{
            color:blue;
            text-decoration:none;
            font-weight:700;
            font-size:20px;
            text-shadow:5px 5px 10px black;
            border:none;
            
            
        }
    </style>
</head>
<body>

   <div class="container-fluid" style="background-color:#c7ecee;height:100vh;">     
    <div class="container">    
       <div class="box">
            <h1 class="py-4">Check Your Status</h1>
            <table class="table table-striped">
                <thead class="table-danger">
                    <th>user_id</th>
                    <th>Name</th>
                    <th>Qualifation</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Reference</th>
                    <th>Course</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </thead>
                <tbody>
                    <?php

                    $id="";
                    $name="";
                    $qli="";
                    $phone="";
                    $email="";
                    $ref="";
                    $course="";
                    
                    $query=mysqli_query($sql,"select * from student_applay_form");
                    while($row=mysqli_fetch_array($query))
                    {
                        $id=$row[0];
                        $name=$row[1];
                        $qli=$row[2];
                        $phone=$row[3];
                        $email=$row[4];
                        $ref=$row[5];
                        $course=$row[6];
                    
                    ?>


                   <form method="GET">
                     <tr> 
                          <td> <?php echo $id  ?> </td>
                          <td> <?php echo $name  ?> </td>
                          <td> <?php echo $qli  ?> </td>
                          <td> <?php echo $phone  ?> </td>
                          <td> <?php echo $email  ?> </td>
                          <td> <?php echo $ref  ?> </td>
                          <td> <?php echo $course  ?> </td>
                          <td> <a href="delete.php?idth=<?php echo $id;  ?>" class="delete">Delete </a></td>
                          <td> <a href="update.php?idtt=<?php echo $id; ?>" class="edit">Edit</a> </td>
                     <tr>
                   </form>
                  
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div> 
</div>           

</body>
</html>

