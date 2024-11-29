<?php require_once 'layout/header.php'  ?>
<?php require_once 'layout/menu.php'  ?>


    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
}

.container {
    width: 100%;
    padding: 20px;
}

.product {
    display: flex;
    align-items: center;
    margin-bottom: 20px; /* Space between products */
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.left {
    flex: 0 0 35%; /* 35% width for the image */
}

.left img {
    width: 100%;
    height: auto;
    object-fit: cover; /* Ensure image fills the area while maintaining aspect ratio */
}

.right {
    flex: 1;
    padding: 20px;
    background-color: #f9f9f9;
}

.right h2 {
    font-size: 1.8rem;
    margin-bottom: 10px;
}

.right p {
    font-size: 1rem;
    color: #333;
}
.right-main {
    flex: 1;
    padding: 20px;
    
}

.right-main h2 {
    font-size: 1.8rem;
    margin-bottom: 10px;
    text-align: center;
}

.right-main p {
    font-size: 1rem;
    color: #333;
}
    </style>

    <div class="container">
    <div class="product">
            <div class="left">
            <a href="<?=BASE_URL?>">
                <img src="Image/logo.png" alt="product ">
             </a>
            </div>
            <div class="right-main">
                <h2>Hãng Thời Trang Đỉnh Cao TH Store</h2>
                <p>
                Chào mừng bạn đến với TH Store, cửa hàng thời trang được thành lập vào ngày 10/10/2022. Chúng tôi tự hào mang đến cho khách hàng những sản phẩm thời trang hiện đại, phong cách và chất lượng cao, phù hợp với mọi lứa tuổi và xu hướng. Với tầm nhìn tạo nên một không gian mua sắm đầy cảm hứng, chúng tôi luôn chú trọng đến sự hài lòng của khách hàng và không ngừng đổi mới để đáp ứng nhu cầu ngày càng đa dạng. Hãy đến và trải nghiệm phong cách thời trang độc đáo tại TH Store!
                </p>
            </div>
        </div>
        <!-- Product 1 -->
        <div class="product">
            <div class="left">
            <a href="<?=BASE_URL.'?act=san-pham-theo-danh-muc&danh_muc_id=1'  ?>">
                <img src="assets/img/banner/img3-middle.png" alt="product ">
             </a>
            </div>
            <div class="right">
                <h2>Áo Thun TH Đỉnh Cao Của Thời Trang</h2>
                <p>
                Săn đi chờ chi 😎 
                BST mới nhất của TH Store sẽ được mở màn cùng hàng ngàn voucher livestream
                </p>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="product">
            <div class="left">
            <a href="<?=BASE_URL.'?act=san-pham-theo-danh-muc&danh_muc_id=2'  ?>">
                <img src="assets/img/banner/img4-middle.png" alt="Product 2">
            </a>
            </div>
            <div class="right">
                <h2>Áo Dài Tay TH - Thu Đông Khỏi Phải Bàn</h2>
                <p>
                Săn đi chờ chi 😎 
                BST mới nhất của TH Store sẽ được mở màn cùng hàng ngàn voucher livestream
                            </p>
            </div>
        </div>

        <!-- Add more products here -->
    </div>


<?php require_once 'layout/footer.php' ?>
