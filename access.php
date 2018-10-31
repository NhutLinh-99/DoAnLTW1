<?php 
    include './products.php';
    
    $obj_products = new products();
    //sesion & cookie
    session_start();
    if(empty($_SESSION['ab'])){
    $_SESSION['ab']='Tài khoản';
    }
    $id = '';
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $obj_products->deleteUser($id);
    }
    $keyword = '';
    if(isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
    }
    $products = $obj_products->getAccessories($keyword);
    $pro = 1;
?>
<?php include './head.php'; ?>
<body>
<div class="container">
 <ul class="menu">
     <li>
         <i class="fa fa-home"></i>
         <a href="index.php">Trang chủ</a>
     </li>
     <li>
         <i class="fas fa-mobile-alt"></i>
         <a href="phone.php">Điên thoại</a>
     </li>
     <li>
         <i class="fas fa-laptop"></i>
         <a href="computer.php">LapTop</a>
     </li>
     <li>
         <i class="fas fa-headphones"></i>
         <a href="access.php">Phụ Kiện</a>
     </li>
    <li class="dropdown">
        <i class="fas fa-user"></i>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <?php                      
                    echo $_SESSION['ab'];                  
            ?>
        </a>
        <ul class="dropdown-menu">                       
                <?php if(!empty($_SESSION['x']) == 1): ?>
                    <li>
                        <i class="fas fa-user"></i>
                        <a href="logout.php">LogOut</a>
                    </li>

                <?php else :?>
                    <li>
                        <i class="fas fa-user" ></i>
                        <a href="login.php">LogIn</a>
                    </li>
                    <li>
                        <i class="fas fa-user"></i>
                        <a href="signin.php">SignIn</a>
                    </li>
                <?php  endif ;?>
        </ul>
    </li>
     <li>
         <div class="logo">
             (<span class="quantity">0</span>)
             <span class="glyphicon glyphicon-shopping-cart"></span>
         </div>
     </li>
</div>
<section id="what-we-do">
    <div class="container">
        <div class="serch">
            <form>
                <input type="text" name="keyword" placeholder="Nhập tên phu kien...">
                <input type="submit" value="Tim kiem">
            </form>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="them">
                    <?php if (($_SESSION['ab']) == 'admin') :?>
                    <a href='themmoi-access.php?id=<?php echo $pro['id'] ?>' style="text-decoration: none; ">Thêm mới</a>
                    <?php endif; ?>
                 </div>
            </div>
        </div>
        <div class="tieude">
            <h2>Phụ kiện</h2>
        </div>
        <div class="row show-sp">
            <?php foreach ($products as $pro):  ?>
            <div class="col-md-4">
                <?php if (($_SESSION['ab']) == 'admin') :?>
                <a href='access.php?id=<?php echo $pro['id'] ?>' style="text-decoration: none; ">Xóa</a>
                <a href='capnhap-access.php?id=<?php echo $pro['id'] ?>' style="text-decoration: none; ">Cập nhập</a>
                <?php endif; ?>
                <div class="card">
                    <img src="public/images/<?php echo $pro['hinh']?>.jpg" alt="" class="img-responsive"/>
                    <div>                          
                        <h2><?php echo $pro['ten'] ?></h2>
                        <h3>Giá : <?php echo $pro['gia'] ?></h3>
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


