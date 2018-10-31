<?php 
    include './products.php';
    $obj_products = new products();
    //sesion & cookie
    session_start();
    if(empty($_SESSION['ab'])){
    $_SESSION['ab']='Tài khoản';
    }
        //tim kiem
    $keyword = '';
    if(isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
    }
    $phones= $obj_products->getPhones($keyword);
    $computers = $obj_products->getComputers($keyword);
    $accessories = $obj_products->getAccessories($keyword);
?>
<?php include './head.php'; ?>
<header>
    <meta charset="utf8">
</header>
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
        </ul>
    </div>
    <section id="what-we-do">
        <div class="container">
            <div class="serch">
                <form>
                    <input type="text" name="keyword" placeholder="Nhập tên sản phẩm...">
                    <input type="submit" value="Tìm kiếm">
                </form>
            </div>
            <div class="tieude">
                <h2>Điện thoại</h2>
                <a href="./phone.php">Xem thêm</a>
            </div>
            <div class="row show-sp">
                <?php foreach ($phones as $pro):  ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="public/images/<?php echo $pro['hinh']?>.jpg" alt="" class="img-responsive"/>
                        <div>                          
                            <h2><?php echo $pro['ten'] ?></h2>
                            <h3>Giá : <?php echo $pro['gia'] ?> VND</h3>
                            <span class="cauhinh">
                                Cấu hình: <?php echo $pro['cauhinh'] ?>
                            </span>
                            </br>
                            <button>
                                <a href="#" class="mua">Mua</a>
                            </button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="tieude">
                <h2>LapTop</h2>
                <a href="computer.php">Xem thêm</a>
            </div>
            <div class="row show-sp">
            <?php foreach ($computers as $pro):  ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="public/images/<?php echo $pro['hinh']?>.jpg" alt="" class="img-responsive"/>
                        <div>                          
                            <h2><?php echo $pro['ten'] ?></h2>
                            <h3>Giá : <?php echo $pro['gia'] ?> VND</h3>
                            <span class="cauhinh">
                                Cấu hình: <?php echo $pro['cauhinh'] ?>
                            </span>
                            </br>
                            <button>
                                <a href="#" class="mua">Mua</a>
                            </button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="tieude">
                <h2>Phụ Kiện</h2>
                <a href="./access.php">Xem thêm</a>
            </div>
            <div class="row show-sp">
            <?php foreach ($accessories as $pro):  ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="public/images/<?php echo $pro['hinh']?>.jpg" alt="" class="img-responsive"/>
                        <div>                          
                            <h2><?php echo $pro['ten'] ?></h2>
                            <h3>Giá : <?php echo $pro['gia'] ?> VND</h3>
                            <button>
                                <a href="#" class="mua">Mua</a>
                            </button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</body>
<?php include './footer.php'; ?>
