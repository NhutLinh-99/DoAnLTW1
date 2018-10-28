<?php 
    include './users.php';
    
    $obj_users = new users();

    $id = '';
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $obj_users->deleteUser($id);
    }
    $keyword = '';
    if(isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
    }
    $users = $obj_users->getUsers($keyword); 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DoAnLTW1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/styles.css" rel="stylesheet" type="text/css"/>
        <script src="public/js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="public/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="public/js/scripts.js" type="text/javascript"></script>
    </head>
<body>
    <div class="container">
        <ul class="menu">
            <li>
                <a href="phone.php">Trang chủ</a>
            </li>
            <li>
                <a href="phone.php">Điên thoại</a>
            </li>
            <li>
                <a href="computer.php">LapTop</a>
            </li>
            <li>
                <a href="access.php">Phụ Kiện</a>
            </li>
            <li>
                <a href="login.php">LogIn</a>
                <a href="#">LogOut</a>
            </li>
        </ul>
    </div>
    <section id="what-we-do">
        <div class="container">
            <div class="serch">
                <form>
                    <input type="text" name="keyword" placeholder="Nhập tên điện thoại...">
                    <input type="submit" value="Tim kiem">
                </form>
            </div>
            <a href="registration.php">registration</a>
            <div class="row">
                <div class="col-md-3">
                    <div class="them">
                        <?php if ($user=1):  ?>
                        <a href='themmoi.php?id=<?php echo $user['id'] ?>' style="text-decoration: none; ">Them Moi</a>
                        <?php endif; ?>
                     </div>
                </div>
            </div>
            <div class="tieude">
                <h2>Điện thoại</h2>
            </div>
            <div class="row show-sp">
                <?php foreach ($users as $user):  ?>
                <div class="col-md-4">
                    <a href='phone.php?id=<?php echo $user['id'] ?>' style="text-decoration: none; ">Xoa</a>
                    <a href='capnhap.php?id=<?php echo $user['id'] ?>' style="text-decoration: none; ">Cap Nhap</a>
                    <div class="card">
                        <img src="public/images/<?php echo $user['hinh']?>.jpg" alt="" class="img-responsive"/>
                        <div>                          
                            <h2>Dien Thoai : <?php echo $user['ten'] ?></h2>
                            <h3>Gia : <?php echo $user['gia'] ?></h3>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</body>
<?php include './footer.php'; ?>
