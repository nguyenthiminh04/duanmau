<?php
if (is_array($suasanpham)) {
    extract($suasanpham);
}
?>
<div class="row2">
    <div class="row2 font_title">
        <h1>SUA SAN PHAM</h1>
    </div>
    <div class="row2 font_content">
        <form action="index.php?act=updateSanpham" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="row2 mb10">
            <label style="color:#000; text-transform: uppercase; margin-bottom: 20px;">Danh muc sản phẩm</label> <br>
            </div>
        </form>
    </div>
</div>