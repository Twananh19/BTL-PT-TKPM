<?php
// session_start(); // Khởi động session

// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php"); // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
//     exit;
// }

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hopitals";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$sql = "SELECT * FROM doctors";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý bác sĩ</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container-doctors a .add-doctors{
            text-decoration: none;
            color: white;
            position: absolute;
            right: 100px;
            width: 200px;
            height: 40px;
            background-color: #007bff;
            text-align: center;
            padding-top: 10px;
        }
        .table-doctors {
            width: 80%;
            border-collapse: collapse;
            margin-top: 50px;
            margin-left: 100px;
            
        }

        .table1 {
            width: 100%;
            margin: 20px 0;
            border: 1px solid #ddd;
            
        }

        .table1 th, .table1 td {
            padding: 10px;
            text-align: left;
        }

        .table1 tr:nth-child(even) {
            background-color: #f2f2f2;
        }

    </style>
    
</head>
<body>

    <!-- <?php
        include 'header.php'
    ?> -->
    <div class="container-doctors" >
        <!-- <h1>Quản lý bác sĩ</h1>
        <a href="add_doctor.php"><div class="add-doctors"> Thêm bác sĩ mới</div></a> -->
        <div class="table-doctors">
            <table class="table1"  border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên bác sĩ</th>
                        <th>Chuyên môn</th>
                        <th>SĐT</th>
                        <th>Email</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['specialty'] . "</td>";
                            echo "<td>" . $row['phone'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>
                                    <a href='edit_doctor.php?id=" . $row['id'] . "'>Sửa</a> |
                                    <a href='delete_doctor.php?id=" . $row['id'] . "'>Xóa</a>
                                </td>";
                            echo "</tr>";
                        }
                        } else {
                            echo "<tr><td colspan='6'>Không có bác sĩ nào trong hệ thống.</td></tr>";
                        }

                        ?>
                    

                </tbody>
            </table>
        </div>
        
    </div>
</body>
</html>

<?php
$conn->close(); // Đóng kết nối
?>
