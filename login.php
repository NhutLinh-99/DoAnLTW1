 <!DOCTYPE html>
<?php
include 'accounts.php';
$data = new accounts();
$accou = $data->selectuser();
session_start();
?>
 <?php include './head.php';?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    </head>
    <body >
    <div class="container">
        <div class="col-md-6" >
            <form action="login.php" method="POST" > 
                <div class="col-md-4">
                    <p><b>User</b></p>
                </div>
                <div class="col-md-8">
                    <input type="text" name="username" placeholder="Please input username..."> <br> <br>
                </div>
                <div class="col-md-4">
                    <p><b>Password</b></p>
                </div>
                <div class="col-md-8">
                    <input type="password" name="password" placeholder="Please input password....."> <br> <br>
                </div>
                <button type="submit" value="Login"> Login </button>  
            </form>
        </div>
    </div>
        <?php if((!empty($_POST['username'])) &&(!empty($_POST['password']))):?>
            <?php foreach ($accou as $Item):?>
                 <?php if($Item['username'] == $_POST['username'] && $Item['password'] == $_POST['password'])
                    {
                     $_SESSION['ab']= $_POST['username'];
                     $_SESSION['x'] = 1;
                     header('Location: phone.php');
                    }
                    ?>
                <?php endforeach; ?>
                     <?php
                    if($Item['username'] == $_POST['username'] && $Item['password'] == $_POST['password'])
                    { }
                    else
                         echo " <h1 class = 'h1' > Tài khoản không chính xác!!!</h1>";?>
        <?php endif;?>
    </body>
</html>