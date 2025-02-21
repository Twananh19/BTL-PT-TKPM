<!DOCTYPE html>  
<html lang="vi">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Trang Đăng Nhập</title>  
    <link rel="stylesheet" href="style.css">  
</head>  
<body>  
    <h1>Đăng Nhập</h1>  
    <form action="validate_login.php" method="POST">  
        <input type="text" name="username" placeholder="Tên người dùng" required>  
        <input type="password" name="password" placeholder="Mật khẩu" required>  
        <button type="submit">Đăng Nhập</button>  
    </form>  
</body>  
</html>