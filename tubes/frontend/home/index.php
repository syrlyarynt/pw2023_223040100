<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesin printer 3d</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Crimson+Text&family=DM+Serif+Display:ital@1&family=Patua+One&display=swap" rel="stylesheet">
    
    <!-- boxicons link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- remixicon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- costum css -->
    <link rel="stylesheet" href="style.css" />
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Patua One', sans-serif;
        list-style: none;
        text-decoration: none;
        scroll-behavior: smooth;
        outline: none;
        border: 0;
    }
    body {
        background: white;
    }
    section {
        min-height: 20vh;
        padding: 15rem 20% 10rem;
    }
    header {
        position: fixed;
        right: 0;
        top: 0;
        z-index: 1000;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 33px 9%;
        background-color: black;
    }
    header.sticky {
        border-bottom: .1rem solid black;
    }
    .logo {
        font-size: 2.2rem;
        font-weight: 600;
        color: white;
        cursor: default;
    }
    .navbar a {
        font-size: 1rem;
        color: white;
        margin-left: 4rem;
        transition: .3s;
    }
    .navbar a:hover {
        border-bottom: 2px solid white;
    }
    #menu-icon {
        font-size: 2.2rem;
        color: white;
        display: none;
    }
    .home {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .home-contect h1 {
        font-size: 3rem;
        font-weight: 1000;
        display: block;
        margin-left: 4rem;
        margin-block-start: 0.67em;
        margin-block-end: 0.67em;
        margin-inline-start: 0px;
        margin-inline-start: 0px;
    }
    .home-contect p {
        font-size: 1.1rem;
        font-family: 'Crimson Text', serif;
    }

    /* css product */
    .product {
        padding-bottom: 10rem;
    }

    .product h2 {
        margin-bottom: 5rem;
    }
    .product .product-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        align-items: center;
        gap: 2rem;
    }
    .product-container .product-box {
        flex: 1 1 30rem;
        padding: 3rem 2rem 4rem;
        background: white;
        border-radius: 2rem;
        text-align: center;
    }
    .product-container .product-layer a {
        font-family: 'DM Serif Display', serif;
        display: inline-block;
        color: white;
        background: black;
        border: 0.1rem solid transparent;
        padding: 1rem 1rem;
        line-height: 0.1rem;
        font-size: 0.8rem;
        font-weight: 500;
        border-radius: 1rem;
        text-transform: uppercase;
        transition: all .55s ease;
    }
    .product h2 {
        font-family: 'Alkatra', serif;
        font-size: 1.5rem;
    }
    .product p {
        font-family: 'Crimson Text', serif;
        padding: 1rem 1rem;
    }
    
    /* css services */
    .services {
        margin-bottom: 5rem;
        background-image: url('img/bg5.jpg');
        color: white;
    }
    .services-container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 2rem;
    }
    .services-container .services-box {
        /* flex: 1 1 30rem; */
        padding: 3rem 2rem 4rem;
        border-radius: 2rem;
        text-align: center;
        border: .10rem solid white;
    }
    .services-box i {
        font-size: 7rem;
        color: white;
    }

    /* css contact */
    .contact h2 {
        margin-bottom: 50px;
        font-size: 2rem;
    }
    .contact-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 2rem;
    }
    .contact-container i {
        font-size: 3rem;
        color: black;
    }

    /* css footer */
    .footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        padding: 2rem 9%;
        background: black;
    }
    .footer-text p {
        font-size: 1rem;
        color: white;
    }
    .footer-iconTop a {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        padding: .8rem;
        background: black;
        border-radius: .8rem;
        transition: .5s ease;
    }
    .footer-iconTop a:hover {
        box-shadow: 0 0 1rem silver;
    }
    .footer-iconTop a i {
        font-size: 2rem;
        color: silver;
    }

    /* BREAKPOINTS */
    @media (max-width: 1200px) {
        html {
            font-size: 85%;
        }
    }
    @media (max-width: 991px) {
        .header {
            padding: 2rem 3%;
        }

        section {
            padding: 10rem 3% 2rem;
        }

        .footer {
            padding: 2rem 3%;
        }
    }
    @media (max-width: 768px) {
        #menu-icon {
            display: block;
        }        

        .navbar {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            padding: 1rem 3%;
            display: none;
            background: black;
            border-top: .1rem solid black;
            box-shadow: 0.5rem 1rem black:
        }

        .navbar.active {
            display: block;
        }
        .navbar a {
            display: block;
            font-size: 2rem;
            margin: 3rem 0;
        }

    }
</style>
</head>
<body>
    <!-- header design -->
    <header class="header">
        <a href="#" class="logo">MP.3d</a>

        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home" class="a">Home</a>
            <a href="#product" class="a">Product</a>
            <a href="#services" class="a">Services</a>
            <a href="#contact" class="a">Contact</a>
            <a href="#login" class="a">Login</a>
            <a href="#registasi" class="a">Registasi</a>
        </nav>
    </header>

    <!-- home section design -->
    <section class="Home" id="home">
        <div class="home-contect">
            <h1>Mesin printer 3d</h1>
            <p>3D printing adalah teknologi yang pertama kali tercipta di tahun 1980-an. 
                Diciptakan pertama kali oleh Chuck Hull dari 3D Systems Corp. Sejak saat itu 3D Printer terus berkembang dan digunakan secara luas.
                3D printing adalah teknologi mencetak menggunakan mesin printing khusus sehingga hasil yang didapatkan berbentuk 3D. 
                Mesin printing tersebut memiliki kecanggihan khusus, yakni mampu mencetak benda, yang sama persis dengan gambar soft file-nya, 
                dalam bentuk 3D (tidak lagi sebatas mencetak gambar di atas kertas saja).</p>
        </div>
    </section>

    <!-- product section design -->
    <section class="product" id="product">
        <h2 class="heading">Product <span>Mesin Printer 3d</span></h2>

        <div class="product-container">
            <div class="product-box">
                <img src="img/direct.jpg" alt="" width="55%">

                <div class="product-layer">
                   <h1>Printer Direct</h1>
                   <a href="Read more" class="btn">Read More</a>
                </div>
            </div>
            <div class="product-box">
                <img src="img/binder.png" alt="" width="60%">
                
                <div class="product-layer">
                   <h1>Printer Binder</h1>
                   <a href="Read More" class="btn">Read More</a>
                </div>
            </div>

            <div class="product-box">
                <img src="img/photopoly.jpg" alt="" width="50%">

                <div class="product-layer">
                   <h1>Printer Photopolymerization</h1>
                   <a href="Read More" class="btn">Read More</a>
                </div>
            </div>

            <div class="product-box">
                <img src="img/sintering.png" alt="" width="60%">

                <div class="product-layer">
                   <h1>Printer Sintering</h1>
                   <a href="Read More" class="btn">Read More</a>
                </div>
            </div>

            <div class="product">
                <h1>Komponen Komponen Mesin Printer 3d</h1>
                <img src="img/komponen.jpg" alt="" width="200%">
                <h2>* Papan Controller</h2>
                <p>Motherboard atau papan utama adalah otak mesin cetak tiga dimensi. Sebagai inti pengoperasian 3D printer, 
                    papan controller menggerakkan langsung komponen lain sesuai perintah komputer.
                    Sensor-sensor pada papan ini menerima perintah komputer dan menerjemahkannya ke dalam suatu kerja pencetakan objek yang diinginkan. 
                    Maka, kualitas papan controller akan menentukan performa mesin cetak tiga dimensi secara menyeluruh, termasuk mutu hasil cetak printer tersebut.</p>
                <br>
                <h2>* Filamen</h2>
                <p>Filamen merupakan material mencetak objek pada 3D printer, serupa dengan tinta pada mesin cetak dua dimensi. Filamen mempunyai beberapa komponen, 
                    yaitu kumparan yang berada pada sebuah spook holder dan ujung filamen yang diposisikan masuk ke dalam extruder. </p>
                <br>
                <h2>* Frame</h2>
                <p>Frame adalah salah satu komponen 3D printer dan fungsinya menahan komponen lain secara berbarengan. Sebagai sasis mesin cetak tiga dimensi, 
                    frame berbahan metal lebih direkomendasikan daripada akrilik karena mempunyai daya tahan baik dan mampu menstabilkan kinerja mesin.</p>
                <br>
                <h2>* Komponen Penggerak</h2>
                <p>Ada empat komponen penggerak 3D printer, yaitu Stepper Motors, Belts, End Stops, dan Threaded Rods. 
                    Keempat komponen tersebut bertugas dalam pergerakan mesin cetak di ketiga sumbu XYZ dan bergerak mengikuti perintah papan controller.</p>
                <br>
                <h2>* Stepper Motors</h2>
                <p>Kunci pergerakan mesin secara mekanik yang mengkoneksikan ketiga sumbu XYZ dan menjadi penggerak print head, print bed, dan threaded rods.</p>
                <br>
                <h2>* Belts</h2>
                <p>Komponen penggerak ini terhubung dengan motor yang membuat printer bergerak ke arah sumbu X dan Y.</p>
                <br>
                <h2>* Threaded Rods</h2>
                <P>Inilah komponen pembeda mesin cetak tiga dimensi dengan printer lain karena threaded rods mampu menggerakkan printer pada sumbu Z.</P>
                <br>
                <h2>* End Stops</h2>
                <p>Risiko kerusakan pada perangkat keras mesin 3D printer dapat dikurangi berkat adanya end stops. 
                    Komponen ini juga menjadi pelindung mesin cetak agar tidak membuat pergerakan di luar jangkauannya.</p>
                <br>
                <h2>* Power Supply Unit</h2>
                <p>Power supply unit jadi salah satu komponen 3D printer dan fungsinya sebagai pemasok daya untuk mengoperasikan mesin cetak tersebut. 
                    Inilah sumber tenaga listrik yang memastikan pergerakan mesin berjalan lancar.</p>
                <br>
                <h2>* Print Bed</h2>
                <p>Print Bed pada mesin cetak tiga dimensi menjadi komponen tempat proses pencetakan dilakukan dan tersusun atas beberapa bagian. 
                    Bagian-bagian dari print bed ini antara lain kaca, elemen pemanas dan beberapa jenis lapisan. 
                    Lapisan-lapisan ini nantinya akan membantu saat proses pencetakan. Print bed ini menjadi bagian penting dalam proses pencetakan.</p>
                <br>
                <h2>* Print Bed Surface</h2>    
                <p>Permukaan print bed akan membantu objek yang hendak dicetak tidak bergeser selama proses pencetakan. Komponen ini pula yang mempermudah 
                    proses pemindahan objek begitu selesai dicetak. Terdapat beberapa jenis print bed surface dengan plus minus masing-masing yang digunakan 
                    sesuai tipe mesin cetak tiga dimensi.</p>
                <br>
                <h2>* Print Head</h2>
                <p>Print head merupakan komponen 3D printer dan fungsinya menjadi bagian yang mencetak filamen ke dalam model tiga dimensi.
                     Komponen ini mempunyai dua bagian, yaitu cold end dan hot end.</p>
            </div>

        </div>

    </section>

    <!-- service section design  -->
    <section class="services" id="services">
        <h2>We provide excellent services</h2>

        <div class="services-container">
            <div class="services-box">
               <i class='bx bx-cog'></i>
               <h3>Process unit test runs</h3>
               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos corporis incidunt provident nemo corrupti ipsam.</p>
            </div>
        </div>

        <div class="services-container">
            <div class="services-box">
               <i class='bx bx-checkbox-checked'></i>
               <h3>Commissioning & training</h3>
               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos corporis incidunt provident nemo corrupti ipsam.</p>
            </div>
        </div>

        <div class="services-container">
            <div class="services-box">
               <i class='bx bx-analyse'></i>
               <h3>Process unit maintenance</h3>
               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos corporis incidunt provident nemo corrupti ipsam.</p>
            </div>
        </div>
    </section>

    <!-- contact section design -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>

        <div class="contact-container">
            <i class='bx bxl-instagram'></i>
        </div>

        <div class="contact-container">
            <i class='bx bxl-twitter' ></i>
        </div>

        <div class="contact-container">
            <i class='bx bxl-whatsapp' ></i>
        </div>

        <div class="contact-container">
            <i class='bx bxl-facebook-circle' ></i>
        </div>
    </section>

    <!-- footer design -->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2023 by Syerli Aryanti | All Rights Reserved.</p>
        </div>

        <div class="footer-iconTop">
            <a href="#home"><i class='bx bxs-up-arrow'></i></a>
        </div>
    </footer>


    <!-- costum js -->
    <script src="js/script.js"></script>
</body>
</html>