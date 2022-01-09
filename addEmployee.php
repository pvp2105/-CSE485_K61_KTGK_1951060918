<?php
    include("template/header.php");
?>
    <main>
        <div class="container">
            <h5 class = "text-center text-primary mt-5"></h3>
            <form action="process-add-employee.php" method = "Post">
                <div class="form-group ">
                    <label for="txtMa">Mã nhân viên</label>
                    <input type="text" class="form-control" id="txtMa" name="txtMa" placeholder="Nhập mã nhân viên">
                </div>
                <div class="form-group ">
                    <label for="txtHoten">Họ và tên</label>
                    <input type="text" class="form-control" id="txtHoten" name="txtHoten" placeholder="Nhập họ tên">
                </div>

                <div class="form-group ">
                    <label for="txtChucvu">Chức vụ</label>
                    <input type="text" class="form-control" id="txtChucvu" name="txtChucvu" placeholder="Nhập chức vụ">
                </div>

                <div class="form-group ">
                    <label for="txtphongban">Phòng ban</label>
                    <input type="text" class="form-control" id="txtphongban" name="txtphongban" placeholder="Nhập phòng ban">
                </div>

                <div class="form-group ">
                    <label for="txtluong">Lương</label>
                    <input type="number" class="form-control" id="txtluong" name="txtluong" placeholder="Nhập lương">
                </div>

                <div class="form-group">
                    <label for="txtngaylam">Ngày vào làm</label>
                    <input type="date" class="form-control" id="txtngaylam" name="txtngaylam" placeholder="Nhập ngày vào làm">
                </div>
                    <?php
                        //Bước 1: Kết nối Database Server
                        $conn = mysqli_connect('localhost' , 'root', '', 'qlnv');
                        if(!$conn){
                            die("Kết nối thất bại. Vui Lòng kiểm tra lại các thông tin máy chủ");
                        }
                        //Bước 02: Thực hiện truy vấn
                        $sql = "Select * from nhanvien";

                        $result = mysqli_query($conn,$sql);
                        //Bước 03: Xử lý kết quả truy vấn
                        if (mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
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