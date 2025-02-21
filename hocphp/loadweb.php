<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Menu động với thẻ `<a>`</title>
    <style>
        .content { display: none; }  /* Ẩn nội dung mặc định */
        .active { display: block; }  /* Chỉ hiển thị phần được chọn */
        .menu a {
            text-decoration: none;
            padding: 10px;
            display: inline-block;
            background: #007bff;
            color: white;
            margin: 5px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <nav class="menu">
        <a href="#" onclick="showContent('home'); return false;">🏠 Trang chủ</a>
        <a href="#" onclick="showContent('products'); return false;">🛍 Sản phẩm</a>
        <a href="#" onclick="showContent('contact'); return false;">📞 Liên hệ</a>
    </nav>

    <div id="home" class="content active">📌 Đây là trang chủ</div>
    <div id="products" class="content">🛍 Đây là trang sản phẩm</div>
    <div id="contact" class="content">📞 Đây là trang liên hệ</div>

    <script>
        function showContent(section) {
            document.querySelectorAll('.content').forEach(div => div.classList.remove('active'));
            document.getElementById(section).classList.add('active');
        }
    </script>

</body>
</html>
