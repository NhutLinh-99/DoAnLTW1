<?php 
    include './products.php';
    $obj_products = new products();
    //cookies & session
    session_start();
    if(empty($_SESSION['ab'])){
    $_SESSION['ab']='a';
}
    //delete
    $id = '';
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $obj_products->deletePhone($id);
    }
    //tim kiem
    $keyword = '';
    if(isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
    }
    $products = $obj_products->getPhones($keyword);
    if(isset($_GET['p'])) 
    $products = $obj_products->getPages($_GET['p']);
    //khai bao bien
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
            <li>
                <i class="fas fa-user"></i>
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
                        <a href='themmoi-phone.php?id=<?php echo $pro['id'] ?>' style="text-decoration: none; ">Thêm mới</a>
                        <?php endif; ?>
                     </div>
                </div>
            </div>
            <div class="tieude">
                <h2>Điện thoại</h2>
            </div>
            <div class="row show-sp">
                <?php foreach ($products as $pro):  ?>
                <div class="col-md-4">
                    <a href='phone.php?id=<?php echo $pro['id'] ?>' style="text-decoration: none; ">Xóa</a>
                    <a href='capnhap-phone.php?id=<?php echo $pro['id'] ?>' style="text-decoration: none; ">Cập nhập</a>
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
                 <table>
                    <tr>
                        <td><a href="phone.php?p=0">1</a></td>
                        <td><a href="phone.php?p=1">2</a></td>
                        <td><a href="phone.php?p=2">3</a></td>
                        <td><a href="phone.php?p=3">4</a></td>
                        <td><a href="phone.php?p=4">5</a></td>
                    </tr>
                </table>
        </div>
    </section>
</body>
<?php include './footer.php'; ?>
