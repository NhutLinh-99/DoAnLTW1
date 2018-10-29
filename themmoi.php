<?php include './head.php'; ?>
<head>
    <title>Them Product</title>
    <link href="public/css/styles-them.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="container bg-contain">
    <a href="phone.php">
        <h2>Trang Chủ</h2>
    </a>
    <h1>Thêm sản phẩm</h1>
    <form>
        <table>
            <tr>
                <td>Tên Điện Thoại:</td>
                <td><input class="ten" type="text" name="ten"><br></td>
            </tr>
            <tr>
                <td>Hình: </td>
                <td><input class="hinh" type="text" name="hinh"><br></td>
            </tr>
            <tr>
                <td>Giá:</td>
                <td><input class="gia" type="text" name="gia"><br></td>
            </tr>
        </table>
        <input type="submit" value="Thêm Mới" class="btn-sub">
    </form>
</div>   
<?php include './users.php'; ?>

<?php
    if(isset($_GET['ten'])){
        $data = [
            'ten' => $_GET['ten'],
            'hinh' => $_GET['hinh'],
            'gia' => $_GET['gia'],
        ];
        $obj_users = new users();
        $obj_users->insertUser($data);
    }
?>
