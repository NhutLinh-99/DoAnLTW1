<?php include './computers.php'; ?>

<?php 
    $obj_users = new computers();
    
    $id = '';
    $compu = '';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $compu = $obj_users->findUser($id);
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
            <a href="http://localhost:82/DoAnLTW1/computer.php">
                <h2>Trỏ về</h2>
            </a>
            <h1>Cập nhập sản phẩm</h1>
            <form>
                <table>
                  <tr>
                      <td>ID:</td>
                      <td><input type="text" class="id" name='id' value=" <?php echo $compu['id'] ?>"></td>
                  </tr>
                  <tr>
                      <td>Tên điện thoại</td>
                      <td><input class="ten" type="text" name='ten' value=" <?php echo $compu['ten'] ?>"></td>
                  </tr>
                  <tr>
                      <td>Hình:</td>
                      <td><input type="text" class="hinh" name='hinh' value=" <?php echo $compu['hinh'] ?>"></td>
                  </tr>
                  <tr>
                      <td>Gia:</td>
                      <td><input type="text" class="gia" name='gia' value=" <?php echo $compu['gia'] ?>"></td>
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
        $obj_users->updateUser($data);
    }
?>



