<?php
    //Trước khi cho người dùng xâm nhập vào bên trong phải ktra Thẻ Làm việc
  
    require("template/header.php");
?>
    <main>
        <div class="container">
            <h5 class = "text-center text-primary mt-3">Quản lý nhân viên</h3>
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã Nhân viên</th>
                        <th scope="col">Họ và Tên</th>
                        <th scope="col">Chức vụ</th>
                        <th scope="col">Phòng ban</th>
                        <th scope="col">Lương</th>
                        <th scope="col">Ngày vào làm</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Vùng này là dữ liệu cần lặp lại hiển thị từ CSDL -->
                    <?php
                        //Bước 1: Kết nối Database Server
                        $conn = mysqli_connect('localhost' , 'root', '', 'qlnv');
                        if(!$conn){
                            die("Kết nối thất bại. Vui Lòng kiểm tra lại các thông tin máy chủ");
                        }
                        //Bước 02: Thực hiện truy vấn
                        $sql = "Select maNV, hovaten, chucvu, phongban, luong, ngayvaolam from nhanvien";
                                
                        $result = mysqli_query($conn,$sql);
                        //Bước 03: Xử lý kết quả truy vấn
                        if (mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                                <tr>
                                    <th scope="row"><?php echo $row['maNV']; ?></th>
                                    <th><?php echo $row['hovaten']; ?></th>
                                    <th><?php echo $row['chucvu']; ?></th>
                                    <th><?php echo $row['phongban']; ?></th>
                                    <th><?php echo $row['luong']; ?></th>
                                    <th><?php echo $row['ngayvaolam']; ?></th>
                                    <th><a href="updateEmployee.php?id=<?php echo $row['maNV']; ?>"><i class="bi bi-pencil-square"></i></a></th>
                                   
                                </tr>
                    <?php
                            }
                        } 
                    ?> 
                       
                </tbody>
            </table>
        </div>
    </main>

<?php
    include("template/footer.php")
?>
    