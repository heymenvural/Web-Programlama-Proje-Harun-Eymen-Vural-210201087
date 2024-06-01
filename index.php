<html>

<head>
    <title> Vural Hastanesi Anasayfa </title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="icon" href="icon.png" type="x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="topBar">
        <a href="index.php">
            
            <img src="SHRS/newlogo.png" />
        </a>
        <div class="login">
            <form action="SHRS/login.php" method="get">
                <button class="btn" type="submit">Giriş Yap</button>
            </form>
            <form action="SHRS/register.php" method="get">
                <button class="btn" type="submit">Kayıt Ol</button>
            </form>
        </div>

    </div>

    <div class="mainPage">
        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="saglik.jpg" style="width:100%">
                <div class="text">Sağlığınız Önceliğimizdir</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="saglik2.jpg" style="width:100%">
                <div class="text">Uzman Hekimlerimizle Kocaeli'de Hizmetteyiz</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="saglik3.jpg" style="width:100%">
                <div class="text">Kocaelinin Tüm Hastaneleri</div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>

    <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
    </script>

    <div class="social">
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-youtube"></a>
    </div>

    <div class="duyurular">
        <h3> Duyurular !</h3>
        <ul>
            <li><a href="#">Vural Çalışma Usul ve Esasları Hakkında Yönerge Yayınlandı</a>
                <p>T.C. Sağlık Bakanlığı, Sağlık Bilgi Sistemleri Genel Müdürlüğü tarafından Merkezi Hekim Randevu
                    Sistemi (MHRS) yönergesinde sistemin teknik alt yapısı ve işleyişine dair bazı düzenlemeler yapılan
                    yönergeyi onayladı.

                    Vatandaşların, Sağlık Bakanlığına bağlı sağlık kuruluşlarından hizmet almasını kolaylaştırmak
                    maksadıyla yapılan güncelleme, 2016 yılı itibari ile hayata geçti.</p>
            </li>
            <li><a href="#">SEMT POLİKLİNİKLERİNE RANDEVU VERİLMEYE BAŞLANDI</a>
                <p>Sağlık Bakanlığına bağlı hastanelerin semt polikliniklerine MHRS üzerinden randevu oluşturabilme
                    uygulaması Türkiye genelinde hizmete girdi. Vatandaşlar, bundan böyle MHRS üzerinden semt
                    polikliniklerini ayrı bir kurum gibi görüntüleyip randevu alabilecek.</p>
            </li>
        </ul>
    </div>

    <footer>
        <p>Vural Hastane Randevu Sistemi®<br>
            <a href="https://saglik.gov.tr">T.C. Sağlık Bakanlığı</a>
        </p>
    </footer>


</body>

</html>