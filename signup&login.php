<div class="wrapper">
    <span class="icon-close">
        <ion-icon name="close-circle"></ion-icon>
    </span>

    <div class="form-box login">
        <h2>登入</h2>
        <form action="verify.php" method="post">
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
                <input type="text" name="email" required />
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="password" name="pwd" required />
                <label>密碼</label>
            </div>
            <div class="remeber-forgot">
                <label><input type="checkbox" />記住我</label>
                <a href="#">忘記密碼</a>
            </div>
            <button type="submit" class="btn">登入</button>
            <div class="login-register"></div>
            <p>還沒有帳號?<a href="#" class="signup-link">註冊帳號</a></p>
        </form>
    </div>
    <div class="form-box signup">
        <h2>註冊</h2>
        <form action="signup-api.php" method="post">
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="person"></ion-icon>
                </span>
                <input type="text" name="name" required />
                <label>使用者名稱</label>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
                <input type="text" name="email" required />
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="password" name="pwd" required />
                <label>密碼</label>
            </div>
            <div class="remeber-forgot">
                <label><input type="checkbox" required />同意客戶隱私權政策&客戶服務條款</label>
            </div>
            <button type="submit" class="btn">註冊</button>
            <div class="login-register"></div>
            <p>已經有帳號?<a href="#" class="login-link">登入帳號</a></p>
        </form>
    </div>
</div>