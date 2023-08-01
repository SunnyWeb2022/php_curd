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
            margin: 0px;
            padding: 0px;
            box-sizing:border-box;
        }
        .box{
            width:100%;
            height: 600px;
            background:linear-gradient(rgb(3, 3, 77),rgb(44, 44, 61));
            box-sizing:border-box;
            border-radius: 20px;
        }
        .innerbox{
            display: flex;
            margin-top:2%;
            margin-right:2%;
        }
        .child-1{
            margin: 6% 0px;
            width: 100%;
            height: 500px;
            text-align:center;
        }
        h2{
           
            box-sizing:border-box;
            color:#fff;
           margin-top: 55%;

        }
        .child-1 p{
            width: 100%;
            padding:2% 4%; 
            color:#fff;
            margin: 20% 0px;
        }
        .child-2{
            margin: 6% 0px;
            width: 95%;
            height: 70%;
            background-color:rgb(26, 25, 25);
            padding: 2% 5%;
            box-sizing:border-box;
            border-radius: 10px;
        }
        h3{
            color:#fff;
            text-align:center;
            margin-bottom:10%;
        }
        input[type="text"]
        {
            width:45%;
            margin: 2% 2%;
        }
        input[type="email"]
        {
            width:45%;
            margin: 2% 2%;
        }
       
        #sele{
            width:45%;
            margin: 2% 2%; 
        }
    </style>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 mt-5">
                <div class="box">
                    <div class="row">
                        <div class="col-md-3" >
                            <div class="child-1">
                                <h2>Welcome</h2>
                                <p>Please fill all the details carefully . This form can chenge your life </p>
                                <a href="check_status.php" class="btn-info px-5 py-2 rounded-pill ">Check Form</a>
                            </div>
                                
                        </div>
                        <div class="col-md-9 ">
                                        <div class="child-2">
                                        <h3>Apply for Web Developer Post</h3>  
                                        <?php
                                          
                                          include("database.php");
                                          
                                          $id=$_GET["idtt"];  
                                          $name="";
                                          $qli="";
                                          $phone="";
                                          $email="";
                                          $ref="";
                                          $course="";
                                          
                                          $query=mysqli_query($sql,"Select * from student_applay_form Where id=$id");
                                          if($row=mysqli_fetch_assoc($query))
                                          {
                                              $id=$row['id'];
                                              $name=$row['name'];
                                              $qli=$row['qualifation'];
                                              $phone=$row['phone'];
                                              $email=$row['email'];
                                              $ref=$row['support'];
                                              $course=$row ['course'];
                                          ?>
                                          
                                          <form  method="POST">
                                          <div class="innerbox">
                                          <input type="hidden" name="h1" value="<?php  echo $id ?>">   
                                          <input type="text" value="<?php echo $name ?>" name="t1" class="form-control " required>
                                          <input type="text" value="<?php echo $qli ?>" name="t2" class="form-control" required>
                                          </div>
                                          
                                          <div class="innerbox">
                                          <input type="text" value="<?php echo $phone ?>" name="t3" class="form-control " required>
                                          <input type="email" value="<?php echo $email ?>" name="t4"  class="form-control" required>
                                          </div>
                                          
                                          <div class="innerbox">
                                          <input type="text" value="<?php echo $ref ?>" name="t5" class="form-control " required>
                                          <?php
                                                include('./database.php');
                                                $select_course="select * from course";
                                                $select_query=mysqli_query($sql,$select_course);
                                                  if(mysqli_num_rows($select_query) > 0)
                                                  {
                                                    echo "<select class='form-control' name=t6 id='sele' '>
                                                    <option value='$course' selected hidden>$course</option>";
                                                      
                                                    while($row=mysqli_fetch_assoc($select_query))
                                                    {
                                                        echo " <option value='{$row['course_name']}'>{$row['course_name']}</option>";
                                                    }
                                                    echo "</select>";
                                                  }
                                          

                                          ?>

                                         
                                          </div>
                                          
                                          <div class="innerox">
                                          <p class="text-end mr-5 my-4"><input type="submit" value="Upadte" name="update" class="btn-warning px-5 py-1 rounded-pill border-none"> </p>
                                          </div>
                                          
                                          </form> 
                                          
                                          <?php
                                          }
                                          ?>
                                          
                                          
                                          
                                </div>   
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</body>
</html>
<?php
    if(isset($_POST["update"]))
    {
        $id=$_GET["idtt"];

        $name=$_POST["t1"];
        $qli=$_POST["t2"];
        $mob=$_POST["t3"];
        $email=$_POST["t4"];
        $ref=$_POST["t5"];
        $course=$_POST["t6"];

        $updation=mysqli_query($sql,"Update student_applay_form set name='$name', qualifation='$qli', phone='$mob', email='$email', support='$ref', course='$course' where id='$id' ");

        if($updation >0)
        {
           
        echo   ' <script>alert("Updation is Successfully")</script>';
         echo "<script>window.location='index.php'</script>";        
        }
        else{
            echo   '<script>alert("Updation is not Successfully")</script>'; 
            echo "<script>window.location='update.php'</script>";       
      
        }

    }



?>

                                    
