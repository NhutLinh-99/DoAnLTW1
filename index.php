<?php 
    include './users.php';
    $obj_users = new users();
    //sesion & cookie
    session_start();
    if(empty($_SESSION['ab'])){
    $_SESSION['ab']='a';
    }
    
    //xoa
    $id = '';
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $obj_users->deleteUser($id);
    }
    ///tiem kiem
    $keyword = '';
    if(isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
    }
    $users = $obj_users->getUsers($keyword);
    $user = 1;
    
?>
<?php include './head.php'; ?>
<body>
    <div class="container">
        <ul class="menu">
            <li>
                <a href="index.php">Trang chủ</a>
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
                <?php if(!empty($_SESSION['x']) == 1): ?>
                <a href="logout.php">LogOut</a>
                <?php else :?>
                <a href="login.php">LogIn</a>
                <?php  endif ;?>
            </li>
        </ul>
    </div>
    <section id="what-we-do">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Điện Thoại</h2>
                    <img src="../DoAn/public/images/iphoneX.jpeg " class="img-responsive">
                    <a href="phone.php">Xem Thêm</a>
                </div>
                <div class="col-md-4">
                    <h2>LapTop</h2>
                    <img src="../DoAn/public/images/laptop5.png" class="img-responsive">
                    <a href="computer.php">Xem Thêm</a>
                </div>
                <div class="col-md-4">
                    <h2>Phụ Kiện</h2>
                    <img src="../DoAn/public/images/car.jpg" class="img-responsive">
                    <a href="access.php">Xem Thêm</a>
                </div>
            </div>
        </div>
    </section>
</body>
<?php include './footer.php'; ?>
