<?php 
    include './users.php';
    session_start();
    if(empty($_SESSION['ab'])){
    $_SESSION['ab']='a';
}
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
    $user = 1;
?>
<?php include './head.php'; ?>
<script src="public/js/giohang.js" type="text/javascript"></script>
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
            <div class="serch">
                <form>
                    <input type="text" name="keyword" placeholder="Nhập tên điện thoại...">
                    <input type="submit" value="Tim kiem">
                </form>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="them">
                        <?php if (($_SESSION['ab']) == 'admin') :?>
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
                    <?php if (($_SESSION['ab']) == 'admin') :?>
                    <a href='phone.php?id=<?php echo $user['id'] ?>' style="text-decoration: none; ">Xoa</a>
                    <a href='capnhap.php?id=<?php echo $user['id'] ?>' style="text-decoration: none; ">Cap Nhap</a>
                    <?php endif; ?>
                    <div class="card">
                        <img src="public/images/<?php echo $user['hinh']?>.jpg" alt="" class="img-responsive"/>
                        <div>                          
                            <h2>Dien Thoai : <?php echo $user['ten'] ?></h2>
                            <h3>Gia : <?php echo $user['gia'] ?></h3>
							 <a href="#" class="mua">Mua</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</body>
<?php include './footer.php'; ?>
