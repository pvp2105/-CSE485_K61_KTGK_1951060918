<?php
    //Trước khi cho người dùng xâm nhập vào bên trong phải ktra Thẻ Làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
    //Xử lý giá trị gửi tới
    if(isset ($_POST['txtHoten'])){
        $hoten = $_POST['txtHoten'] ;
    }
    $chucVu = $_POST['txtChucvu'] ;
    $soMayban = $_POST['txtSomayban'] ;
    $soDidong = $_POST['txtSodidong'] ;
    $email = $_POST['txtEmail'] ;
    $maDonvi = $_POST['cboDonvi'] ;
    $maNhanVien = $_POST['txtMaNV'];

     //Bước 1: Kết nối Database Server
    $conn = mysqli_connect('localhost' , 'root', '', 'dhtl_danhba');
        if(!$conn){
            die("Kết nối thất bại. Vui Lòng kiểm tra lại các thông tin máy chủ");
        }
    //Bước 02: Thực hiện truy vấn
    $sql = "Update db_nhanvien  SET hovaten = '$hoten', chucvu = '$chucVu', sodt_coquan = '$soMayban', sodt_didong = '$soDidong',
            email = '$email', ma_donvi = '$maDonvi' where ma_nhanvien = '$maNhanVien' ";
  
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