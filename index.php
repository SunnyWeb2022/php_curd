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
            height:100%;
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
            
            text-align:center;
        }
        h2{
           
            box-sizing:border-box;
            color:#fff;
        }
        .child-1 p{
            width: 100%;
            color:#fff;
           
        }
        .child-2{
            
            width: 95%;
            height: 85%;
            background-color:rgb(26, 25, 25);
            padding: 3% 5%;
            box-sizing:border-box;
            border-radius: 10px;
            margin: 0px auto;
        }
        h3{
            color:#fff;
            text-align:center;
            margin-bottom:5%;
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
        <!-- <div class="row"> -->
            <!-- <div class="col-md-1"></div> -->
            <!-- <div class="col-md-10 "> -->
                <div class="box">
                    <div class="row p-0 mt-5">
                        <div class="col-lg-3 py-lg-5 py-2" >
                            <div class="child-1 py-lg-5 py-0">
                                <h2>Welcome</h2>
                                <p class="my-md-5 my-3 text-center px-2">Please fill all the details carefully . This form can chenge your life </p>
                                <a href="check_status.php" class="btn-info px-5 py-2 rounded-pill ">Check Form</a>
                            </div>
                                
                        </div>
                        <div class="col-lg-9">
                            <div class="child-2  my-5">
                                 <h3>Apply for Web Developer Post</h3>  
                                    <form action="insert.php" method="POST" id="refesh_page">
                                    <div class="innerbox">
                                    <input type="hidden" name="h1">   
                                    <input type="text" name="t1" placeholder="Enter your Name *" class="form-control " pattern="[A-Za-z\s]{3,}" title="Minimum three letter input field " required>
                                    <input type="text" name="t2" placeholder="Enter your qualification *" class="form-control" pattern="[A-Za-z0-9\s][-_()]{3,}" title="Minimum three letter input field " required>
                                    </div>

                                    <div class="innerbox">
                                    <input type="text" name="t3" placeholder="Enter your mob_No *" class="form-control " pattern="[0-9\s]{10}" title="10 Digit input field " required>
                                    <input type="email" name="t4" placeholder="Enter your email *" class="form-control" required>
                                    </div>

                                    <div class="innerbox">
                                    <input type="text" name="t5" placeholder="Any Reference *" class="form-control " pattern="[A-za-z\s]{}{3,}" title="Minimum three letter input field " required>
                                    <select name="t6" class="form-control" id="sele" required>
                                        <option value="" selected disabled>Select your course*</option>
                                        <option value="Web_Developer">Web Developer</option>
                                        <option value="fornt_end">Fornt End</option>
                                        <option value="back_end">Back End</option>
                                    </select>
                                    </div>
                                        <p class="text-end me-4 mt-2"><input type="submit" value="Submit" class="btn-warning px-lg-5 px-4 py-2  rounded-pill border-none"> </p>
                                </form> 



                            </div>   
                        </div>
                    </div>
                </div>
            <!-- </div> -->
            <!-- <div class="col-md-1"></div> -->
        <!-- </div> -->
    </div>

   
    
</body>
</html>




    