<?php
    
    //admin.php Truyền dữ liệu sang 
    //deleteEmployee.php Nhận dữ liệu từ admin.php gửi sang 
    $maNV = $_GET['id'];

        //Bước 1: Kết nối Database Server
        $conn = mysqli_connect('localhost' , 'root', '', 'qlnv');
        if(!$conn){
            die("Kết nối thất bại. Vui Lòng kiểm tra lại các thông tin máy chủ");
                }
        //Bước 02: Thực hiện truy vấn
        $sql = "Delete from nhanvien where maNV = '$maNV' ";
        $number = mysqli_query($conn,$sql);

        if($number > 0){
            header("location: admin.php"); //Chuyển hướng về trang quản trị
        }
        else{
            header("location: error.php"); //Chuyển hướng, hiển thị thông báo lỗi
        }
        //Buoc 03: Đóng kết nối
        mysqli_close($conn);
?>