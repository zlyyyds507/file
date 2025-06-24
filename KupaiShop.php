<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>酷牌商城首页 - KupaiShop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="KupaiShop.php">酷牌商城 KupaiShop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="切换导航">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link active" href="KupaiShop.php">首页</a></li>
                <li class="nav-item"><a class="nav-link" href="product-list.html">全部商品</a></li>
                <li class="nav-item"><a class="nav-link" href="cart.html">购物车</a></li>
                <li class="nav-item"><a class="nav-link" href="user.html">个人中心</a></li>
            </ul>
            <a class="btn btn-outline-light me-2" href="login.html">登录</a>
            <a class="btn btn-light" href="register.html">注册</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <!-- 轮播图 -->
    <div id="carouselExampleIndicators" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="幻灯片 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="幻灯片 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="幻灯片 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/banner1.jpg" class="d-block w-100" alt="酷牌商城-轮播1" style="height:320px;object-fit:cover;">
            </div>
            <div class="carousel-item">
                <img src="assets/images/banner2.jpg" class="d-block w-100" alt="酷牌商城-轮播2" style="height:320px;object-fit:cover;">
            </div>
            <div class="carousel-item">
                <img src="assets/images/banner3.jpg" class="d-block w-100" alt="酷牌商城-轮播3" style="height:320px;object-fit:cover;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">上一个</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">下一个</span>
        </button>
    </div>

    <!-- 欢迎语 -->
    <div class="jumbotron p-4 mb-4 bg-light rounded-3">
        <h1 class="display-5">欢迎来到 <span style="color:#0d6efd;">酷牌商城</span>！</h1>
        <p class="lead">精选好物，品质保证，优惠多多，尽在酷牌！</p>
    </div>

    <!-- 推荐商品 -->
    <h2 class="mb-3">推荐商品</h2>
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="assets/images/product1.jpg" class="card-img-top" alt="商品1">
                <div class="card-body">
                    <h5 class="card-title">商品1</h5>
                    <p class="card-text">￥99.00</p>
                    <a href="product-detail.html" class="btn btn-primary">查看详情</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="assets/images/product2.jpg" class="card-img-top" alt="商品2">
                <div class="card-body">
                    <h5 class="card-title">商品2</h5>
                    <p class="card-text">￥199.00</p>
                    <a href="product-detail.html" class="btn btn-primary">查看详情</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="assets/images/product3.jpg" class="card-img-top" alt="商品3">
                <div class="card-body">
                    <h5 class="card-title">商品3</h5>
                    <p class="card-text">￥49.00</p>
                    <a href="product-detail.html" class="btn btn-primary">查看详情</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="assets/images/product4.jpg" class="card-img-top" alt="商品4">
                <div class="card-body">
                    <h5 class="card-title">商品4</h5>
                    <p class="card-text">￥299.00</p>
                    <a href="product-detail.html" class="btn btn-primary">查看详情</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 更多商品链接 -->
    <div class="text-center mb-5">
        <a href="product-list.html" class="btn btn-outline-primary btn-lg">查看更多商品</a>
    </div>
</div>

<footer class="bg-primary text-white text-center py-3">
    &copy; 2025 酷牌商城 KupaiShop. 保留所有权利。
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>