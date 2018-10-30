<?php include './head.php'; ?>
<head>
    <title>Add Product</title>
    <link href="public/css/styles-them.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="container bg-contain">
    <a href="./computer.php">
        <h2>Trở về</h2>
    </a>
    <h1>Thêm sản phẩm</h1>
    <form>
        <table>
            <tr>
                <td>Tên Computer:</td>
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
<tr>
                <td>Cấu hình:</td>
                <td><input class="cauhinh" type="text" name="cauhinh"><br></td>
            </tr>
        </table>
        <input type="submit" value="Thêm Mới" class="btn-sub">
    </form>
</div>   
<?php include './products.php'; ?>

<?php
    if(isset($_GET['ten'])){
        $data = [
            'ten' => $_GET['ten'],
            'hinh' => $_GET['hinh'],
            'gia' => $_GET['gia'],
            'cauhinh' => $_GET['cauhinh'],
        ];
        $obj_products = new products();
        $obj_products->insertComputer($data);
    }
?>
