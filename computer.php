<?php 
    include './computers.php';
    
    $obj_users = new computers();

    $id = '';
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $obj_users->deleteUser($id);
    }
    $keyword = '';
    if(isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
    }
    $computers = $obj_users->getUsers($keyword); 
?>
<?php include './head.php'; ?>
<body>
       <div class="container">
        <ul class="menu">
            <li>
                <a href="http://localhost:82/DoAnLTW1/phone.php">Trang chủ</a>
            </li>
            <li>
                <a href="http://localhost:82/DoAnLTW1/phone.php">Điên thoại</a>
            </li>
            <li>
                <a href="http://localhost:82/DoAnLTW1/computer.php">LapTop</a>
            </li>
            <li>
                <a href="#">Phụ Kiện</a>
            </li>
            <li>
                <a href="#">LogIn</a>
                <a href="#">LogOut</a>
            </li>
       </div>
    <section id="what-we-do">
        <div class="container">
            <div class="serch">
                <form>
                    <input type="text" name="keyword" placeholder="Nhập tên laptop...">
                    <input type="submit" value="Tim kiem">
                </form>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="them">
                        <?php if ($compu=1):  ?>
                        <a href='themmoi-computer.php?id=<?php echo $compu['id'] ?>' style="text-decoration: none; ">Them Moi</a>
                        <?php endif; ?>
                     </div>
                </div>
            </div>
            <div class="tieude">
                <h2>Lap Top</h2>
            </div>
            <div class="row show-sp">
                <?php foreach ($computers as $compu):  ?>
                <div class="col-md-4">
                    <a href='computer.php?id=<?php echo $compu['id'] ?>' style="text-decoration: none; ">Xoa</a>
                    <a href='capnhap-computer.php?id=<?php echo $compu['id'] ?>' style="text-decoration: none; ">Cap Nhap</a>
                    <div class="card">
                        <img src="public/images/<?php echo $compu['hinh']?>.jpg" alt="" class="img-responsive"/>
                        <div>                          
                            <h2>Láp top: : <?php echo $compu['ten'] ?></h2>
                            <h3>Giá : <?php echo $compu['gia'] ?></h3>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</body>
<?php include './footer.php'; ?>
