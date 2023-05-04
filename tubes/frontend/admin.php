<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link href="https://unpkg.com//boxicon@2.1.4/css/boxicons.min.css" rel="style.css">
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

         :root {
            --color-default: #8294C4;
            --color-second: #ACB1D6;
            --color-white: #fff;
            --color-body: #E4E9F7;
            --color-light: #E0E0E0;
         }

         * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
         }
         body {
            min-height: 100vh;
         }
         .sidebar {
            min-height: 100vh;
            width: 250px;
            padding: 6px 14px;
            z-index: 99;
            background-color: var(--color-default);
            transition: all .5s ease;
            position: fixed;
            top: 0;
            left: 0;
         }
         .sidebar .logo_details {
            height: 60px;
            display: flex;
            align-items: center;
            position: relative;
         }
         .sidebar .logo_details .logo_name {
            color: var(--color-white);
            font-size: 22px;
            font-weight: 600;
            transition: all .5 ease;
         }
         .side .logo_details #btn {
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            font-size: 23px;
            text-align: right;
            cursor: pointer;
            transition: all .5s ease;
         }
         .sidebar i {
            color: var(--color=white);
            height: 60px;
            line-height: 60px;
            min-width: 50px;
            font-size: 25px;
            text-align: center;
         }
         .sidebar .nav-list {
            margin-top: 20px;
            height: 100%;
         }
         .sidebar li {
            position: relative;
            margin: 8px 0;
            list-style: none;
         }
         .sidebar li a {
            display: flex;
            height: 100%;
            width: 100%;
            align-items: center;
            text-decoration: none;
            background-color: var(--color-default);
            position: relative;
            transition: all .5s ease;
            z-index: 12;
         }
         .sidebar li a::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            transform: scaleX(0);
            background-color: var(--color-white);
            border-radius: 5px;
            transition: transform 0.3s ease-in-out;
            transform-origin: left;
            z-index: -2;
         }
         .sidebar li a:hover::after {
            transform: scaleX(1);
            color: var(--color-default);
         }
         .sidebar li a .link_name {
            color: var(--color-white);
            font-size: 15px;
            font-weight: 400;
            white-space: nowrap;
            pointer-events: auto;
            transition: all 0.4s ease;
         }
         .sidebar li a:hover .link_name,
         .side li a:hover i{
            transition: all 0.5s ease;
            color: var(--color-default);
         }
         .sidebar li i {
            height: 35px;
            line-height: 35px;
            font-size: 18px;
            border-radius: 5px;
         }

        .sidebar li .profile {
            position: fixed;
            height: 60px;
            width: 250px;
            left: 0;
            bottom: -8px;
            padding: 10px 14px;
            overflow: hidden:
            transition: all 0.5s ease;
        }
        .sidebar .profile .profile_details {
            display: flex;
            align-items: center;
            flex-wrap: nowrap;
        }
        .sidebar li img {
            height: 45px;
            width: 45px;
            object-fit: cover;
            border-radius: 50%;
            margin-right: 10px;
        }
        .sidebar li.profile .name,
        .sidebar li.profile .designation {
            font-size: 25px;
            font-weight: 400;
            color: var(--color-white);
            white-space: nowrap;
        }
        .sidebar li.profile .designation {
            font-size: 12px;
        }
        .sidebar .profile #log_out {
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            background-color: var(--color-second);
            width: 50px;
            height: 60px;
            line-height: 60px;;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.5s ease;
        }
        .home-section {
            position: relative;
            background-color: var(--color-body);
            min-height: 100vh;
            top: 0;
            left: 250px;
            width: calc(100% - 250px);
            transition: all .5s ease;
            z-index: 1;
        }
        .home-section .text {
            display: inline-block;
            color: var(--color-default);
            font-size: 25px;
            font-weight: 500;
            margin: 18px;
        }


    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="bx bxl-audible icon"></i>
            <div class="logo_name">Code Effects</div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="#">
                    <i class="bx bx-grid-alt"></i>
                    <span class="link_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-user"></i>
                    <span class="link_name">Users</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-chat"></i>
                    <span class="link_name">Message</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-pie-chart-alt-2"></i>
                    <span class="link_name">Analytic</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-folder"></i>
                    <span class="link_name">File Manager</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-cart-alt"></i>
                    <span class="link_name">Order</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-cog"></i>
                    <span class="link_name">Settings</span>
                </a>
            </li>
            <li class="profile">
                <div class="profile_details">
                    <!-- <img src="#" alt="profile image"> -->
                    <div class="profile_contents">
                        <div class="name">Syerli</div>
                        <div class="designation">Admin</div>
                    </div>
                </div>
                <i class="bx bx-log-out" id="log_out"></i>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="text">Dashboard</div>
    </section>
<script src="script.js"></script>
</body>
</html>