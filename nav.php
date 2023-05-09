<?php
session_start()
    ?>
<nav class="navbar navbar-expand-lg nav"
    style="background-color:rgb(24, 163, 66);box-shadow: 1px 1px 4px 0 rgba(0, 0, 0, 0.909);">
    <div class="container-fluid">
        <a class="navbar-brand" href="" style=" font-size: 30px;
  color: #fff;
  user-select: none;">!WASTE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        所有商品
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">生鮮</a></li>
                        <li><a class="dropdown-item" href="#">熟食</a></li>
                        <li><a class="dropdown-item" href="#">飲料</a></li>
                        <li><a class="dropdown-item" href="#">零食</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">推薦商品</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">附近商家</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">關於我們</a>
                </li>

                <?php if (isset($_SESSION['email'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">!幣錢包</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        設定
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">個人資料</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="logout.php">登出</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link btnLogin">登入</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>