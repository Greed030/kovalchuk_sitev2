<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/adaptive.css">
    <link rel="icon" href="icons_svg/pizzafav.ico" type="image/x-icon">
    <title>Pizzeria</title>
</head>
<body>
    <!--Navbar-->
    <header class="headeri">
        <nav class="nav-stranka0">
            <ul>
                <li><a href="#" onclick="location.reload();">El Marino</a></li>
                <li><a href="/stranka3.php">ABOUT</a></li>
                <li><a href="/stranka1.php">MENU</a></li>
                <li><a href="/stranka2.php">AKCIA</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <!--Главна страница(картинка)-->
        <div id="#home" class="block-slide1">
            <img class="image_slide1" src="img/glavnastr1.jpg" alt="#">
            <div class="text1_slide1">vitajte</div>
            <div class="text2_slide1">pizzeria el marino</div>
            <div class="text3_slide1">Najlepšia pizza v Nitre!</div>
            <form action="/stranka1.html" method="get" target="_blank">
                <button class="button_slide1">OBJEDNAŤ →</button>
            </form>
        </div>
        <!--Галерея-->
        <div id="slider">
            <input type="radio" id="s1" name="slider" checked>
            <input type="radio" id="s2" name="slider">
            <input type="radio" id="s3" name="slider">
            <input type="radio" id="s4" name="slider">
            <input type="radio" id="s5" name="slider">
            <label for="s1" id="slider1"><img src="img/glavnastr1.jpg" alt="#"></label>
            <label for="s2" id="slider2"><img src="img/glavnpizza.jpg" alt="#"></label>
            <label for="s3" id="slider3"><img src="img/slide1pizza.jpg" alt="#"></label>
            <label for="s4" id="slider4"><img src="img/pizarrio.jpg" alt="#"></label>
            <label for="s5" id="slider5"><img src="img/pdasdsd.jpg" alt="#"></label>

        </div>
        <!--Контакт-->
        <div id="#kontakt" class="block-slide2">
            <div class="otvarHod_block1_slide2">
                <div class="text1_otvarHod_block1_slide2">OTVÁRACIE HODINY</div>
                <div class="text2_otvarHod_block1_slide2">PO-UT: 8.00-22.00 │ STR: 11.00-03.00</div>
                <div class="text3_otvarHod_block1_slide2">ŠTV: 11.00-03.00 │ PIA-SO: 11.00-5.00</div>
                <div class="text4_otvarHod_block1_slide2" >NE: 11.00-22.00</div>
            </div>
            <div class="telef_block2_slide2">
                <div class="text1_telef_block2_slide2">TELEFÓN</div>
                <div class="text2_telef_block2_slide2">0951 916 136</div>
                <div class="text3_telef_block2_slide2">posledná objednávka 45min pred záverečnou</div>
            </div>
            <div class="kontakt_block2_slide2">
                <button class="button_slide2" type="button" name="kontakt">KONTAKT</button>
            </div>
        </div>
    </main>
    <footer>
        <!--Конец футер-->
        <div id="#footer" class="block-slide3">
            <div class="button1_block1_slide3">
                <a href="#home" class="link1_img1_button1_block1_slide3"><img class="img1_button1_block1_slide3" src="icons_svg/up-arrow.png" alt="#"></a>
            </div>
            <div class="text1_block2_slide3">
                <div class="vytv_text1_block2_slide3">Vytvoril:</div>
                <div class="meno_text1_block2_slide3">Dmytro Kovalchuk</div>
                <div class="otkial_text1_block2_slide3">Copyright -- všetky práva vyhradené</div>
            </div>
            <div class="text2_block3_slide3">
                <div class="mail_text2_block3_slide3">Email:</div>
                <div class="email_text2_block3_slide3"><a href="mailto:kova0lchuk@gmail.com">kova0lchuk@gmail.com</a></div>
                <div class="chislo_text2_block3_slide3">Chislo: <a href="tel:+421951916136">+421951916136</a></div>
            </div>
            <div class="button2_block4_slide3">
                <a href="https://www.instagram.com/kvlchk_d/" class="link2_img2_button2_block4_slide3"><img class="img2_button2_block4_slide3" src="icons_svg/instagram_color.png" alt="#"></a>
            </div>
        </div>
    </footer>
    <div class="cookie">
        <div class="content">
            <h1>Povoliť súbory cookie z El Marino v tomto prehliadači?</h1>
            <p>Súbory cookie používame, aby sme vám mohli ponúknuť užitočné funkcie a merať výkon s cieľom zlepšiť vaše skúsenosti. Výberom možnosti "Prijať všetko" súhlasíte s používaním všetkých súborov cookie. Súbory cookie a podobné technológie používame na: Poskytovanie a zlepšovanie obsahu v produktoch El Marino. Zabezpečenie bezpečnosti pomocou informácií získaných zo súborov cookie v sieti El Marino aj mimo nej. Poskytovanie a zlepšovanie produktov El Marino pre registrovaných používateľov</p>
            <div class="btns">
                <button class="btn cancel">Odmietnuť</button>
                <button class="btn accept">Prijať</button>
            </div>
        </div>
    </div>
<script src="js/script.js"></script>
</body>
</html>
