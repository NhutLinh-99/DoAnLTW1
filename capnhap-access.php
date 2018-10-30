<?php include './products.php'; ?>

<?php 
    $obj_products = new products();
    
    $id = '';
    $pro = '';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $pro = $obj_products->findAccess($id);
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
             <a href="./access.php">
                <h2>Trỏ về</h2>
            </a>
            <h1>Cập nhập sản phẩm</h1>
            <form>
                <table>
                  <tr>
                      <td>ID:</td>
                      <td><input type="text" class="id" name='id' value=" <?php echo $pro['id'] ?>"></td>
                  </tr>
                  <tr>
                      <td>Tên Phụ Kiện:</td>
                      <td><input class="ten" type="text" name='ten' value=" <?php echo $pro['ten'] ?>"></td>
                  </tr>
                  <tr>
                      <td>Hình:</td>
                      <td><input type="text" class="hinh" name='hinh' value=" <?php echo $pro['hinh'] ?>"></td>
                  </tr>
                  <tr>
                      <td>Giá:</td>
                      <td><input type="text" class="gia" name='gia' value=" <?php echo $pro['gia'] ?>"></td>
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
        ];
        $obj_products->updateAccess($data);
    }
?>