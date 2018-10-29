<?php 
    include './users.php';
    $obj_users = new users();
    //sesion & cookie
    session_start();
    if(empty($_SESSION['ab'])){
    $_SESSION['ab']='a';
    }
?>
<?php include './head.php'; ?>
<body>
    <div class="container">
        <ul class="menu">
            <li>
                <i class="fa fa-home" aria-hidden="true"></i>
                <a href="index.php">Trang chủ</a>
            </li>
            <li>
                <i class="fa fa-star" aria-hidden="true"></i>
                <a href="phone.php">Điên thoại</a>
            </li>
            <li>
                <i class="fa fa-star" aria-hidden="true"></i>
                <a href="computer.php">LapTop</a>
            </li>
            <li>
                <i class="fa fa-star" aria-hidden="true"></i>
                <a href="access.php">Phụ Kiện</a>
            </li>
            <li>
                <i class="fa fa-star" aria-hidden="true"></i>
                <?php if(!empty($_SESSION['x']) == 1): ?>
                <a href="logout.php">LogOut</a>
                <?php else :?>
                <a href="login.php">LogIn</a>
                <?php  endif ;?>
            </li>
            <li>
                <div class="logo">
                    (<span class="quantity">0</span>)
                    <span class="glyphicon glyphicon-shopping-cart"></span>
                </div>
            </li>
        </ul>
    </div>
    <section id="what-we-do">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Điện Thoại</h2>
                    <img src="../trunk/public/images/iphoneX.jpeg " class="img-responsive">
                    <a href="phone.php">Xem Thêm</a>
                </div>
                <div class="col-md-4">
                    <h2>LapTop</h2>
                    <img src="../trunk/public/images/dell5.jpg" class="img-responsive">
                    <a href="computer.php">Xem Thêm</a>
                </div>
                <div class="col-md-4">
                    <h2>Phụ Kiện</h2>
                    <img src="../trunk/public/images/car.jpg" class="img-responsive">
                    <a href="access.php">Xem Thêm</a>
                </div>
            </div>
        </div>
    </section>
</body>
<?php include './footer.php'; ?>
