<?php
    //Trước khi cho người dùng xâm nhập vào bên trong phải ktra Thẻ Làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
    //admin.php Truyền dữ liệu sang 
    //deleteEmployee.php Nhận dữ liệu từ admin.php gửi sang 
    $ma_nhanvien = $_GET['id'];

        //Bước 1: Kết nối Database Server
        $conn = mysqli_connect('localhost' , 'root', '', 'dhtl_danhba');
        if(!$conn){
            die("Kết nối thất bại. Vui Lòng kiểm tra lại các thông tin máy chủ");
                }
        //Bước 02: Thực hiện truy vấn
        $sql = "Select * from db_nhanvien where ma_nhanvien = '$ma_nhanvien' ";
        $result = mysqli_query($conn,$sql);

        //Buoc 03: Xử lý kết quả 
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $ma_donvi = $row['ma_donvi'];
        }
        //Buoc 04: Đóng kết nối
        mysqli_close($conn);
?>
    
    <?php
    include("template/header.php");
    ?>
    <main>
        <div class="container">
            <h5 class = "text-center text-primary mt-5">Cập nhật thông tin danh bạ nhân viên</h3>
            <form action="process-update-employee.php" method = "Post">
                <div class="form-group ">
                    <label for="txtHoten">Mã nhân viên</label>
                    <input type="text" class="form-control"  id="txtMaNV" name="txtMaNV" placeholder="Nhập mã nhân viên" value ="<?php echo $row['ma_nhanvien']; ?> ">                             
                </div>

                <div class="form-group ">
                    <label for="txtHoten">Họ và tên</label>
                    <input type="text" class="form-control" id="txtHoten" name="txtHoten" placeholder="Nhập họ tên" value ="<?php echo $row['hovaten']; ?> ">                             
                </div>

                <div class="form-group ">
                    <label for="txtChucvu">Chức vụ</label>
                    <input type="text" class="form-control" id="txtChucvu" name="txtChucvu" placeholder="Nhập chức vụ" value ="<?php echo $row['chucvu']; ?>">
                </div>

                <div class="form-group ">
                    <label for="txtSomayban">Số máy bàn</label>
                    <input type="tel" class="form-control" id="txtSomayban" name="txtSomayban" placeholder="Nhập số máy bàn" value ="<?php echo $row['sodt_coquan']; ?>">
                </div>

                <div class="form-group ">
                    <label for="txtSodidong">Số di động</label>
                    <input type="tel" class="form-control" id="txtSodidong" name="txtSodidong" placeholder="Nhập số di động" value ="<?php echo $row['sodt_didong']; ?>">
                </div>

                <div class="form-group ">
                    <label for="txtEmail">Email</label>
                    <input type="tel" class="form-control" id="txtEmail" name="txtEmail" placeholder="Nhập email" value ="<?php echo $row['email']; ?>">
                </div>

                <div class="form-group ">
                    <label for="txtDonvi">Đơn vị</label>
                    <select class = "form-control" name="cboDonvi" id="cboDonvi">
                    <?php
                        //Bước 1: Kết nối Database Server
                        $conn = mysqli_connect('localhost' , 'root', '', 'dhtl_danhba');
                        if(!$conn){
                            die("Kết nối thất bại. Vui Lòng kiểm tra lại các thông tin máy chủ");
                        }
                        //Bước 02: Thực hiện truy vấn
                        $sql = "Select * from db_donvi";

                        $result = mysqli_query($conn,$sql);
                        //Bước 03: Xử lý kết quả truy vấn
                        if (mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                if($row['ma_donvi'] == $ma_donvi){
                                    echo '<option selected value=" '.$row['ma_donvi'].' "> '.$row['ten_donvi'].' </option>';
                                }
                                else{
                                    echo '<option value=" '.$row['ma_donvi'].' "> '.$row['ten_donvi'].' </option>';
                                }
                    ?>
                    <?php
                            }
                        }
                        // Bước 04: Đóng kết nối Database Server
                        mysqli_close($conn);
                        ?>
                     </select>
                </div>
                <button type = "submit" class = "btn btn-primary mt-3">Lưu Lại</button>
            </form>
        </div>
    </main>
<?php
    include("template/footer.php")
?>