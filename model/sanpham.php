<?php
    function loadall_sanpham() {
        $sql = "SELECT * FROM sanpham WHERE 1 order by id desc LIMIT 0,9";
        $result = pdo_query($sql);
        return $result;
    }

    // lấy ra sản phẩm bán chạy
    function loadall_spbanchay() {
        $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY luotxem DESC LIMIT 0,10";
        $result = pdo_query($sql);
        return $result;
    }

    // Lấy ra 1 sản phẩm chi tiết
    function load_sanphamct($idct) {
        $sql = "SELECT * FROM sanpham WHERE id = ".$idct;
        $load_sanphamct = pdo_query_one($sql);
        return $load_sanphamct;
    }
    
    // lấy ra sản phẩm cùng loại
    function load_spcungloai($id, $iddm) {
        $sql = "SELECT * FROM sanpham WHERE iddm = '$iddm' AND id <> '$id'";
        $load_spcl = pdo_query($sql);
        return $load_spcl;
    }

    function search_sanpham($keySearch) {
        $sql = "SELECT * FROM sanpham WHERE 1 and name LIKE '%".$keySearch."%' order by id desc";
        $result = pdo_query($sql);
        return $result;
    }

    function loadall_sanphamdanhmuc($iddm) {
        $sql = "SELECT * FROM sanpham WHERE 1 and iddm = '$iddm'";
        $result = pdo_query($sql);
        return $result;
    }

    function loadall_laptop_theoten() {
        $sql = "SELECT * FROM sanpham WHERE name LIKE 'L%'";
        $result = pdo_query($sql);
        return $result;
    }

    function loadall_iphone_theoten() {
        $sql = "SELECT * FROM sanpham WHERE name LIKE 'iPhone%'";
        $result = pdo_query($sql);
        return $result;
    }

    function loadall_pc_theoten() {
        $sql = "SELECT * FROM sanpham WHERE name LIKE 'PC%'";
        $result = pdo_query($sql);
        return $result;
    }
?>