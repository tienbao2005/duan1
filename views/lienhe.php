<?php require_once 'layout/header.php'  ?>
<?php require_once 'layout/menu.php'  ?>

<style>
    body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    color: #333;
}

.contact-page {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
.container-page {
    max-width: 600px;
    width: 90%;
    background: #ffffff;
    padding: 20px 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    animation: fadeIn 0.5s ease-in-out;
}
h1 {
    text-align: center;
    color: #007BFF;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #555;
}

input, textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    color: #555;
    background-color: #f9f9f9;
    transition: border-color 0.3s, box-shadow 0.3s;
}

input:focus, textarea:focus {
    border-color: #007BFF;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
    outline: none;
}

textarea {
    resize: vertical;
    min-height: 120px;
}

.button-sm {
    display: block;
    width: 100%;
    padding: 12px;
    background-color: #007BFF;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
}

.button-sm:hover {
    background-color: #0056b3;
    transform: translateY(-2px);
}

.button-sm:active {
    transform: translateY(0);
}

/* Hiệu ứng */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: scale(0.95);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

@media (max-width: 768px) {
    .container {
        padding: 15px 20px;
    }

    h1 {
        font-size: 24px;
    }
}
</style>
<body>
<section class="slider-area">
        <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
            <!-- single slider item start -->
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="img2/banner/1.png">
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item start -->
            <!-- single slider item start -->
            <div class="hero-single-slide hero-overlay">
            <div class="hero-slider-item bg-img" data-bg="img2/banner/2.png">
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item start -->

            <!-- single slider item start -->
            <div class="hero-single-slide hero-overlay">
            <div class="hero-slider-item bg-img" data-bg="img2/banner/3.png">
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item start -->
        </div>
    </section>
    <main class="contact-page">
        <div class="container-page">
            <h1 class="h1-page">Liên Hệ</h1>
            <form onsubmit="handleFormSubmit(event)" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Tên</label>
                    <input type="text" id="name" name="name" placeholder="Nhập Tên Của Bạn" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Nhập Email Của Bạn" required>
                </div>
                <div class="form-group">
                    <label for="message">Phản Hồi</label>
                    <textarea id="message" name="message" placeholder="Viết Phản Hồi Của Bạn..." required></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Ảnh Sản Phẩm</label>
                    <input type="file" id="image" name="image" accept="image/*">
                </div>
                <button class="button-sm" type="submit">Gửi</button>
            </form>
        </div>
    </main>
    <div class="service-policy section-padding">
        <div class="container">
            <div class="row mtn-30">
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-plane"></i>
                        </div>
                        <div class="policy-content">
                            <h6>Giao hàng</h6>
                            <p>Giao hàng nhanh chóng</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-help2"></i>
                        </div>
                        <div class="policy-content">
                            <h6>Hỗ trợ</h6>
                            <p>Hỗ trợ 24/7</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-back"></i>
                        </div>
                        <div class="policy-content">
                            <h6>Hoàn tiền</h6>
                            <p>Hoàn tiền trong 30 ngày</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-credit"></i>
                        </div>
                        <div class="policy-content">
                            <h6>Thanh toán</h6>
                            <p>Bảo mật thanh toán</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
<script>
        
        function handleFormSubmit(event) {
            event.preventDefault(); // Ngăn chặn hành vi mặc định của form
            alert('Cảm ơn bạn đã gửi phản hồi!'); // Hiển thị thông báo
            window.location.href = 'index.php'; // Điều hướng về trang chủ
        }
    </script>


<?php require_once 'layout/footer.php' ?>
