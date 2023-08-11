<?php
require_once "./connection.php";
$errors = [];

function checkIfEmpty($value, $name){
global $errors;

    if($value== "" ){
        $errors[$name] = "$name must not be empty";
    }
}


if(isset($_POST['register'])){
    //this is post data
    $firstName= $_POST['first_name'];
    $lastName= $_POST['last_name'];
    $phoneNumber= $_POST['phoneno'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $confirmPassword= $_POST['cpassword'];
    
    //check if required fields are empty
    checkIfEmpty($firstName, "First name");
    checkIfEmpty($lastName, "Last name");
    checkIfEmpty($email, "email");
    checkIfEmpty($password, "Password");
    checkIfEmpty($confirmPassword, "Password confirmation");

    //check if user enetered valid email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Must enter valid email";
    }

    //check if password and confirm password are same
    if($password != $confirmPassword){
        $errors['password']= "Password and confirm password doesnt match";
    }

    if (empty($errors)){
        $sql = "INSERT INTO users(first_name, last_name, email, phoneno, password)
        VALUE(?,?,?,?,?)
        ";
        $statement = $pdo->prepare($sql);
        $statement->execute([
            $firstName,
            $lastName,
            $email,
            $phoneNumber,
            $password
        ]);
        header("Location: login.php");
    }
        
}

//this is get request






?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
      <script src="https://cdn.tailwindcss.com"></script>

</head>
<style>
    
        body {
            background-image: url('image/bg2.png'); /* Replace with your image path */
            background-size: 100rem; /* Adjust how the image covers the element */
            background-repeat: no-repeat; /* Prevent image repetition */
            background-position: center center; /* Position the image in the center */
            
    }
    .link{
        margin-top:5px;
       color:black;
     
    }
</style>
<body class="bg-gray-200 flex justify-center ">
    
<!-- <h1 class="text-4xl text-purple-500 bg-amber-500 w-full lowercase font=bold mr-4 py-4 " >hello world </h1>
<div class="flex gap-2 justify-center items-center h-screen" >
    <div class="p-8 bg-orange-500 rounded-full shadow-2xl text-center" >Box 1</div>
    <div class="p-8 bg-orange-800" >Box 2</div>
</div> -->
<div class="container w-1/2 mt-12">

    <h1 class="text-center text-3xl font-bold my-2">Welcome</h1>
<p class="text-center uppercase text-orange-500 font-bold text-sm">Cats are waiting for you!</p>
    <form method= "post" class="form-container bg-white p-8 mt-4 shadow-md">
        <?php if(!empty($errors)){ ?>
       <div class="errors bg-red-200 text-red-700 p-4 my-4">
        <?php foreach($errors as $key => $value){     ?>
            <li><?php echo $value; ?> </li>
            <?php } ?>
        </div>
        <?php } ?>
    
    <div class="row flex mt-2">
            <div class="col w-full">
                <label >First Name</label>
                <input type="text" class="block border-2 border-gray-300 w-full px-4 py-1 mt-2" name="first_name">   
        </div>

            <div class="col w-full ml-4">
                 <label >Last Name</label>
                <input type="text" class="block border-2 border-gray-300 w-full px-4 py-1 mt-2" name="last_name">   
            </div>
            </div>
            
            <div class="row flex mt-2">
            <div class="col w-full">
                <label >Email Address</label>
                <input type="text" class="block border-2 border-gray-300 w-full px-4 py-1 mt-2" name="email">   
        </div>

        <div class="col w-full ml-4">
                <label >Phone Number</label>
                <input type="text" class="block border-2 border-gray-300 w-full px-4 py-1 mt-2" name="phoneno">   
        </div>
        </div>

        <div class="row flex mt-2">
            <div class="col w-full">
                <label >Password</label>
                <input type="text" class="block border-2 border-gray-300 w-full px-4 py-1 mt-2" name="password">   
        </div>

        <div class="col w-full ml-4">
                <label >Confirm Password</label>
                <input type="password" class="block border-2 border-gray-300 w-full px-4 py-1 mt-2" name="cpassword">   
        </div>
        </div>

        <div class="text-center mt-4">
                <button class="bg-orange-400 px-12 py-2 text-white mt-2 uppercase hover:bg-red-400" name="register">Sign Up</button>
            </div>
            <div class="link">
            <a href="login.php">Already have an account? Sign in! </a>
            </div>
            </div>
           

            
        
       
                
               
        </div>
        </div>
    </div>

</body>
</html>