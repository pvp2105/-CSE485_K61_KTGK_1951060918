<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý nhân viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                            <a class="nav-link" href="addEmployee.php">
                                <i class="bi bi-compass-fill" style="font-size: 18px;">
                                    <div class="text-nav" style="font-style: normal;">Thêm</div>
                                </i>
                            </a>
                        </li>
                        <li class="nav-item ms-5 me-2">
                            <a class="nav-link" href="update.php">
                                <i class="bi bi-compass-fill" style="font-size: 18px;">
                                    <div class="text-nav" style="font-style: normal;">Sửa</div>
                                </i>
                            </a>
                        </li>
                        <li class="nav-item ms-5 me-2">
                            <a class="nav-link" href="delete.php">
                                <i class="bi bi-compass-fill" style="font-size: 18px;">
                                    <div class="text-nav" style="font-style: normal;">Xóa</div>
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
        <style>
            .navbar .form-control {
    font-size: 14px;
    width: 280px;
    background-color: #eef3f8;
    border-color: white;
  }
  .navbar .input-group-text {
    background-color: #eef3f8;
    border-color: white;
  }
  
  .navbar-nav {
    margin-left: auto;
    min-height: 52px;
  }
  .navbar-nav .nav-item {
    align-items: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    line-height: 18px;
    text-align: center;
  }
  .navbar-nav .text-nav {
    align-items: center;
    font-size: 12px;
    line-height: 18px;
  }

  
.btn-signin{
    border-radius: 24px;
    background-color: white;
    padding: 5px 18px;
    border: blue 1px solid;
    line-height: 24px;
  }
.btn-signin:hover{
    box-shadow: inset 0 0 0 1px #0a66c2;
}
.btn-signup{
    background-color: white;
    padding: 5px 18px;
    border: white;
    line-height: 24px;
  }
.btn-signup:hover{
    background-color: #eef3f8;
}
        </style>
    </div>
    </header>