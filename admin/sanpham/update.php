<?php
if (is_array($suasanpham)) {
    extract($suasanpham);
}
?>
<div class="row2">
    <div class="row2 font_title">
        <h1>SUA SAN PHAM</h1>
    </div>
    <div class="row2 form_content" style="border: 1px solid #ccc; border-radius: 8px; margin-top: 20px; padding: 20px;">
        <form action="index.php?act=updateSanpham" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="row2 mb10">
            <label style="color:#000; text-transform: uppercase; margin-bottom: 20px;">Danh muc sản phẩm</label> <br>
            <select class="form-select" name="iddm" aria-label="Default select example" id="">
                <?php
                foreach ($select_danhmuc as $optiondanhmuc ) {
                    extract($optiondanhmuc);
                    if ($iddm == $id) {
                        ?>
                        <option value="<?= $id ?>" selectd><?= $name?></option>
                        <?php
                    }else{
                        ?>
                        <option value="<?= $id ?>"><?= $name ?></option>
                        <?php
                    }
                }
                ?>
            </select>
        </div>

        <div class="row2 mb10 form_content_container">
        <label for="" style="color:#000; text-transform: uppercase; margin-bottom: 20px;">Tên sản phẩm</label> <br>
        <input type="text" style="height: 40px;" value="<?= $suasanpham['name'] ?>" name="tensanpham" required placeholder="Nhập vào tên sản phẩm">
        
    </div>
        
        </form>
    </div>
</div>