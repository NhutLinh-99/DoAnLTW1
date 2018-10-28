<?php include './users.php'; ?>

<?php 
    $obj_users = new users();
    
    $id = '';
    $user = '';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $user = $obj_users->findUser($id);
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
            <a href="http://localhost:82/DoAnLTW1/phone.php">
                <h2>Trang Chủ</h2>
            </a>
            <h1>Cập nhập sản phẩm</h1>
            <form>
                <table>
                  <tr>
                      <td>ID:</td>
                      <td><input type="text" class="id" name='id' value=" <?php echo $user['id'] ?>"></td>
                  </tr>
                  <tr>
                      <td>Tên điện thoại</td>
                      <td><input class="ten" type="text" name='ten' value=" <?php echo $user['ten'] ?>"></td>
                  </tr>
                  <tr>
                      <td>Hình:</td>
                      <td><input type="text" class="hinh" name='hinh' value=" <?php echo $user['hinh'] ?>"></td>
                  </tr>
                  <tr>
                      <td>Gia:</td>
                      <td><input type="text" class="gia" name='gia' value=" <?php echo $user['gia'] ?>"></td>
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



