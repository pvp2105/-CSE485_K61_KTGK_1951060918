<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý nhân viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header>
    <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white" >
                <div class="container-fluid ms-5">
                    <a class="navbar-brand col-md-5" href="home.html">
                        <button type="button" class="btn btn-white ms-5" style="color: #0a66c2;font-weight: 700; font-size: 25px;">
                                Phạm Văn Phú<i class="bi bi-linkedin">
                                </i>
                        </button>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-5 mb-2 mb-lg-0">
                        <li class="nav-item ms-5 me-2">
                            <a class="nav-link" href="admin.php">
                                <i class="bi bi-compass-fill" style="font-size: 18px;">
                                    <div class="text-nav" style="font-style: normal;">Quản lý</div>
                                </i>
                            </a>
                        </li>
                       
                        <li class="nav-item ms-2 me-2">
                            <a href="signup.php">
                                <button class="btn-signup mt-1" style="color: rgba(0,0,0,.55);">Join Now</button>
                            </a>
                        </li>
                        <li class="nav-item ms-2 me-2">
                            <a href="login.php">
                                <button class="btn-signin text-primary mt-1">Sign In</button>
                            </a>
                        </li>
                    </ul>
                    
                    </div>
            </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <h5 class = "text-center text-primary">Thông tin chi tiết Nhân viên</h3>
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
                        $sql = "Select * from nhanvien";
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
                                   
                                </tr>
                <?php
                        }
                    }
                    // Bước 04: Đóng kết nối Database Server
                    mysqli_close($conn);
                ?>
                       
                </tbody>
            </table>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>