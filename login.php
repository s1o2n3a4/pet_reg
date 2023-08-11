

<?php

require_once "./connection.php";
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];


$sql = "SELECT * FROM  users where email = ? AND password = ?";
$statement = $pdo->prepare($sql);
$statement->execute([
    $email,
     $password
]);
$result = $statement->fetch();

if(!empty($result)){
    header("Location: index.php");
}
else{
    
        $errors['email'] = "Email incorrect";
        $errors['password']= "Password incorrect";
    }
}

?>


<! DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-in!</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    body {
            background-image: url('image/bg2.png'); /* Replace with your image path */
            background-size: cover; /* Adjust how the image covers the element */
            background-repeat: no-repeat; /* Prevent image repetition */
            background-position: center center; /* Position the image in the center */
            /* ...other styles... */
    }
.a{
    
}

</style>
<body class="bg-gray-200 flex justify-center items-center h-screen">
<div class="container w-1/3 "> <!-- Adjusted width here -->

    <h1 class="text-center text-3xl font-bold my-2">SIGN IN!</h1>

    <form method="post" class="form-container bg-white p-8 mt-4 shadow-md">
        <?php if (!empty($errors)) { ?>
            <div class="errors bg-blue-200 text-blue-700 p-4 my-4">
                <?php foreach ($errors as $key => $value) { ?>
                    <li><?php echo $value; ?></li>
                <?php } ?>
            </div>
        <?php } ?>

        <div class="row flex mt-2">
            <div class="col w-full">
                <label>Email Address</label>
                <input type="text" class="block border-2 border-gray-300 w-full px-4 py-1 mt-2" name="email">
            </div>
        </div>

        <div class="row flex mt-2">
            <div class="col w-full">
                <label>Password</label>
                <input type="password" class="block border-2 border-gray-300 w-full px-4 py-1 mt-2" name="password">
            </div>
        </div>

        <div class="text-center mt-4">
           <button class="bg-gray-500 px-12 py-2 text-black mt-2 uppercase hover:bg-red-700" name="login">Login</button>
        </div>
         
    </form>
</div>
</body>
</html>