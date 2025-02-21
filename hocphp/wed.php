<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="style-index.css"> 
    <title>Quản lý bệnh nhân</title>
</head>
<body>
    <div class="content-admin">
        <div class="container">
            <div class="logo-admin">
                <a href="index.php"><img src="img/Green Simple Woman Lawyer Avatar (2).png" alt=""></a>
                <a href="index.php"><div class="title-admin"><h1>Trang Quản Lý - Admin</h1></div></a>
            </div>
            <div class="clearfix"></div>
            
            <!-- Sidebar -->
            <div class="admin-sidebar">
                <ul>
                    <li><a href="#" onclick="showContent('bacsi'); return false;"><div class="item">Quản lý bác sĩ</div></a></li>
                    <li><a href="#" onclick="showContent('benhnhan'); return false;"><div class="item">Quản lý bệnh nhân</div></a></li>
                    <li><a href="#" onclick="showContent('dichvu'); return false;"><div class="item">Quản lý dich vu</div></a></li>
                    <li><a href="#" onclick="showContent('lichen'); return false;"><div class="item">Quản lý lịch hẹn</div></a></li>

                    <li><a href=""><div class="logout"><button>Đăng xuất</button></div></a></li>
                </ul>
            </div>
            
            <!-- Content Area -->
            <div class="content-main">
                <div class="box-edit">
                    <div id="bacsi" class="qlbacsi">
                        <!-- Content for "Quản lý bác sĩ" -->
                         <h1>Danh Sách Bác Sĩ</h1>
                        <?php include 'doctors.php'; ?>
                    </div>

                    <div id="benhnhan" class="qlbenhnhan">
                        <!-- Content for "Quản lý bệnh nhân" -->
                        <h1>Danh Sách Bệnh Nhân</h1>
                        <?php include 'patients.php'; ?>
                    </div> 

                    <div id="dichvu" class="qldichvu">   
                        <!-- Content for "Quản lý lịch hẹn" -->
                        <h1>Dịch Vụ Bệnh Viện</h1>
                        <?php include 'services.php'; ?>
                    </div>

                    <div id="lichen" class="qllichhen">
                        <!-- Content for "Quản lý lịch hẹn" -->
                        <h1>Danh Sách Lịch Hẹn</h1>
                        <?php include 'appointments.php'; ?>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <script>
        // Hàm hiển thị nội dung theo ID
        function showContent(section) {
            // Ẩn tất cả các phần tử
            document.querySelectorAll('.qlbacsi, .qlbenhnhan, .qldichvu, .qllichhen').forEach(div => div.classList.remove('active'));
            // Hiển thị phần tử được chọn
            document.getElementById(section).classList.add('active');
        }
    </script> 
</body>
</html>
