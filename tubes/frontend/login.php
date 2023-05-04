<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">

<style>
    .wrapper {
        position: relative;
        width: 400px;
        height: 440px;
        background: white;
        border: 2px solid rgba(225, 225, 225, 5);
        border-radius: 20px;
        box-shadow: 0 0 30px rgba(0, 0, 0, .5);
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        top: 80%;
        left: 35%;
    }

    .wrapper .form-box {
        width: 100%;
        padding: 40px;
    }

    .wrapper .icon-close {
        position: absolute;
        top: 0;
        right: 0;
        width: 45px;
        height: 45px;
        background: #162938;
        font-size: 2rem;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        border-bottom-left-radius: 20px;
        cursor: pointer;
        z-index: 1;
    }

    .form-box h2 {
        font-size: 2rem;
        color: #162938;
        text-align: center;
    }

    .input-box {
        position: relative;
        width: 100%;
        height: 50px;
        border-bottom: 2px solid #162938;
        margin: 30px 0;
    }

    .input-box label {
        position: absolute;
        top: 50%;
        left: 5px;
        transform: translateY(-50%);
        font-size: 1rem;
        color: #162938;
        font-weight: 500;
        pointer-events: none;
        transition: .5s;
    }

    .input-box input:focus~label,
    .input-box input:valid~label {
        top: -8px;
    }

    .input-box input {
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        font-size: 1rem;
        color: #162938;
        font-weight: 600;
        padding: 0 35px 0 5px;
    }

    .input-box .icon {
        position: absolute;
        right: 8px;
        font-size: 1.2rem;
        color: #162938;
        line-height: 57px;
    }

    .remember-forgot {
        font-size: .9rem;
        color: #162938;
        font-weight: 500;
        margin: -15px 0 15px;
        display: flex;
        justify-content: space-between;
    }
    
    .remember-forgot label input {
        accent-color: #162938;
        margin-right: 3px;
    }

    .remember-forgot a {
        color: #162938;
        text-decoration: none;
    }

    .remember-forgot a:hover {
        text-decoration: underline;
    }

    .btn {
        width: 100%;
        height: 45px;
        background: #162938;
        border: none;
        outline: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 1rem;
        color: #fff;
        font-weight: 500;
    }

    .login-register {
        font-size: .9rem;
        color: #162938;
        text-align: center;
        font-weight: 500;
        margin: 25px 0 10px;
    }

    .login-register p a {
        color: #162938;
        text-decoration: none;
        font-weight: 600;
    }

    .login-register p a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>
    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <div class="form-box login">
            <h2>Login</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account <a href="regis.php" class="register-link">Register</a></p>
                </div>
            </form>
        </div>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>