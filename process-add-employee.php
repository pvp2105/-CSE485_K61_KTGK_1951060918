<?php

    //Xử lý giá trị gửi tới
    if(isset ($_POST['txtMa'])){
        $maNV = $_POST['txtMa'] ;
    }
    $hoten = $_POST['txtHoten'] ;
    $chucVu = $_POST['txtChucvu'] ;
    $phongban = $_POST['txtphongban'] ;
    $luong = $_POST['txtluong'] ;
    $ngaylam = $_POST['txtngaylam'] ;

     //Bước 1: Kết nối Database Server
    $conn = mysqli_connect('localhost' , 'root', '', 'qlnv');
        if(!$conn){
            die("Kết nối thất bại. Vui Lòng kiểm tra lại các thông tin máy chủ");
        }
    //Bước 02: Thực hiện truy vấn
    $sql = "Insert Into nhanvien (maNV,hovaten, chucvu, phongban, luong, ngayvaolam)
        Values ('$maNV','$hoten', '$chucVu', '$phongban', '$luong', '$ngaylam') ";
    $ketqua = mysqli_query($conn,$sql);

    if(!$ketqua){
         header("location: error.php");  //Chuyển hướng, hiển thị thông báo lỗi
    }
    else{
        header("location: admin.php"); //Chuyển hướng về trang quản trị
    }
    //Buoc 03: Đóng kết nối
    mysqli_close($conn);
?>