<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="css/css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../../minhnt_duanmau/js/main.js"></script>
</head>

<body>
    <div class="wrapper">
        <!-- BIGIN HEADER -->
        <header>
            <div class="boxcenter">
                <div class="mb header header__menu_nav roayy search__menu" style="position: relative;">
                    <div style="display:flex; align-items: center;">
                        <img src="../../minhnt_duanmau/img/lg.png" alt="">
                    </div>
                    <div class="box_search">
                        <form action="index.php?act=viewsearch" method="POST">
                            <input type="text" class="input__search_header" name="tukhoa" id="" placeholder="Sale 50% cho khách hàng đầu tiên">
                            <input type="submit" class="submit__search" name="submit" value="Tìm kiếm">
                        </form>
                    </div>
                   
                </div>
                <div class="header__menu_nav hd_navmenu" style="margin-top: 50px;">
                    <ul>
                        <li class="dropdown">
                            <a class="dropdownbtn" href="../../minhnt_duanmau/">Trang chủ</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdownbtn" href="index.php?act=gioithieu">Giới Thiệu</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdownbtn" href="index.php">Danh mục</a>
                            <div class="dropdown_content">
                                <?php
                                    foreach($load_danhmuc as $danhmucmenu) {
                                        extract($danhmucmenu)
                                        ?>
                                            <a href="index.php?act=danhmuc&iddm=<?= $id ?>"><?= $name ?></a>
                                        <?php
                                    }
                                ?>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdownbtn" href="index.php?act=sanpham">Sản Phẩm</a>
                            <div class="dropdown_content menu__product">
                                <?php
                                    foreach($load_sanpham as $sanphammenu) {
                                        extract($sanphammenu)
                                        ?>
                                            <a href="index.php?act=sanphamct&idsp=<?= $id ?>"><?= $name ?></a>
                                        <?php
                                    }
                                ?>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdownbtn" href="">Hỏi Đáp</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdownbtn" href="index.php?act=lienhe">Liên Hệ</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdownbtn" href="index.php?act=addtocart">Giỏ Hàng</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        
        <script>
            const changeColorButton = document.querySelector("input[name='changeColor']");
            const boxContent = document.querySelector("#spbanchay");
            const body = document.body;
            changeColorButton.addEventListener("click", function() {
                if(body.classList.contains('activeOK')) {
                    body.classList.remove('activeOK')
                    boxContent.classList.remove('colorBox')
                } else {
                    body.classList.add('activeOK')
                    boxContent.classList.add('colorBox')
                }
            });
        </script>
        <!-- END HEADER -->