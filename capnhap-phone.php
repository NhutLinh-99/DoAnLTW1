<?php include './products.php'; ?>

<?php 
    $obj_products = new products();
    
    $id = '';
    $pro = '';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $pro = $obj_products->findPhone($id);
    }else{
        die('error');
    }
?>

<?php include './head.php'; ?>
    <head>
        <title>Cập nhập sản phẩm</title>
        <link href="public/css/styles-them.css" rel="stylesheet" type="text/css">  
    </head>
    <body>
         <div class="container bg-contain">
            <a href="./phone.php">
                <h2>Trở về</h2>
            </a>
            <h1>Cập nhập sản phẩm</h1>
            <form>
                <table>
                  <tr>
                      <td>ID:</td>
                      <td><input type="text" class="id" name='id' value=" <?php echo $pro['id'] ?>"></td>
                  </tr>
                  <tr>
                      <td>Tên điện thoại:</td>
                      <td><input class="ten" type="text" name='ten' value=" <?php echo $pro['ten'] ?>"></td>
                  </tr>
                  <tr>
                      <td>Hình:</td>
                      <td><input type="text" class="hinh" name='hinh' value=" <?php echo $pro['hinh'] ?>"></td>
                  </tr>
                  <tr>
                      <td>Gia:</td>
                      <td><input type="text" class="gia" name='gia' value=" <?php echo $pro['gia'] ?>"></td>
                  </tr>
                  <tr>
                      <td>Cấu hình:</td>
                      <td><input type="text" class="cauhinh" name='cauhinh' value=" <?php echo $pro['cauhinh'] ?>"></td>
                  </tr>
                  <tr>
                      <td>Hãng:</td>
                      <td><input type="text" class="hang" name='hang' value=" <?php echo $pro['hang'] ?>"></td>
                  </tr>
                </table>
                <input type="submit" value="Cap Nhap" class="btn-sub">
            </form>
       </div>
    </body>
</html>
    
<?php
    if(isset($_GET['ten'])){
        $data = [
            'ten' => $_GET['ten'],
            'hinh' => $_GET['hinh'],
            'gia' => $_GET['gia'], 
            'id' => $_GET['id'],
            'cauhinh' => $_GET['cauhinh'],
            'hang' => $_GET['hang'],
        ];  
        $obj_products->updatePhone($data);
    }
?>



