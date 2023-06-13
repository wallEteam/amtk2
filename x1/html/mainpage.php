<?php 
session_start();
if(!isset($_SESSION["user"])){
    header("Location: mainpage.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mainpage</title>
    <!-- font awesome cdn link -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/vazir-font/30.1.0/font-face.css"> -->
    <!-- css link -->
    <link rel="stylesheet" href="css/mpstyle.css">
    <!-- icon cnd link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <!-- swiper cdn link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
</head>
<body>
    <!-- header section starts-->
    <header class="header">
        <a href="#"class="Logo" ><i class="fas fa-shopping-basket"></i> AMTK </a>
        <nav class="navbar">
            <a href="#home">خانه</a>
            <a href="#products">محصولات</a>
            <a href="#categories">دسته بندی ها</a>
            <a href="#blog">مقالات</a>
            <a href="#footer">درباره ما</a>
        </nav>
        <div class="icon">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <!-- <div class="fas fa-user" id="login-btn"></div>-->
        </div>
        <form action="" class="search-form">
            <input onkeyup="myFunction()" type="search" id="search-box" placeholder="جستجو.." >
            <label for="search-box" class="fas fa-search"></label>
            
        </form>
            <div class="shopping-cart" id="shopping-cart">
                <h2 class="cart-title">سبدخرید شما</h2>
                <div class="cart-content">
                    
                </div>
                <div class="total">
                    <div class="total-title">
                        مجموع
                    </div>
                    <div class="total-price">
                    0
                    </div>
                    <button type="button" class="btn btn-buy">خرید</button>
                    <i class="fas fa-close" id="cart-close"></i>
                </div>
            </div>
        <form action="" class="login-form">
            <h3>Login Now</h3>
            <input type="email" placeholder="ایمیل خود را وارد کنید." class="box">
            <input type="password" placeholder="رمز خود را وارد کنید" class="box">
            <!--<p>رمز خود را فراموش کرده اید؟<a href="#">اینجا کلیک کنید</a></p>-->
            <p>حساب کاربری ندارید؟<a href="signin.php">اینجا کلیک کنید</a></p>
            <input type="submit" value="Login now" class="btn">
        </form>

    </header>
    <!-- header section ends-->

    <!-- home section starts-->
    <section class="home" id="home">
        <div class="content">
            <h3>محصولاتی تازه و <span>ارگانیک</span> برای شما</h3>
            <p> سفری واقعی به دنیای محصولات تازه و ارگانیک برای حفظ سلامتی و تندرستی  </p>
            <a href="#products" class="btn">همین الان خرید کنید</a>
        </div>
    </section>
    <!-- home section ends-->

    <!--features section starts-->
<section class="features" id="features">
<h1 class="heading">  از <span>خدمات</span> ارائه شده  </h1>
<div class="box-container">
    <div class="box">
        <img src="img/featuers2.jpg" alt="">
        <h3>ارگانیک و تازه</h3>
        <p>تهیه شده از مزارع و باغات و بدون استفاده از کود و سم های شیمیایی</p>
    </div>
    <div class="box">
        <img src="img/dlivery.jpg" alt="">
        <h3>پیک رایگان </h3>
        <p>امنیت و سرعت بالا را با ما تجربه کنید</p>
    </div>
    <div class="box">
        <img src="img/payment.jpg" alt="">
        <h3>پرداخت آسان</h3>
        <p>پرداخت به صورت آنلاین و درب منزل</p>
    </div>
</div>
</section>
    <!-- features section ends-->

    <!-- products section starts-->
    <section class="products" id="products">
        <h1 class="heading"> ما <span>محصولات</span></h1>
        <div class="swiper product-slider">
            <ul class="swiper-wrapper" id="myUL">
                <li class=" swiper-slide box" >
                <img class="image" src="img/هویج.jpg" alt="">
                <h3 class="product-title">هویج </h3>
                    <p class="price">150000 <span></span> </p>
                    <button class="add-to-cart btn" data-name="هویج" data-price="150000">افزودن</button>
                </li>
                <li class="swiper-slide box">
                <img class="image" src="img/ذرت.jpg" alt="">
                <h3 class="product-title">ذرت</h3>
                    <p class="price">250000 <span></span> </p>
                    <button class="add-to-cart btn"data-name="ذرت" data-price="250000" >افزودن</button>
                </li>
                <li class="swiper-slide box">
                    <img class="image" src="img/سیب زمینی.jpg" alt="">
                    <h3 class="product-title">سیب زمینی</h3>
                    <p class="price">100000 <span></span> </p>
                    <button class="add-to-cart btn" data-name="سیب زمینی" data-price="100000">افزودن</button>
                </li>
                <li class="swiper-slide box">
                    <img class="image" src="img/فلفل دلمه.jpg" alt="">
                    <h3 class="product-title">فلفل دلمه </h3>
                    <p class="price">150000 <span></span> </p>
                    <button class="add-to-cart btn" data-name="فلفل دلمه" data-price="150000">افزودن</button>
                </li>
                <li class="swiper-slide box">
                    <img class="image" src="img/پیاز.jpg" alt="">
                    <h3 class="product-title">پیاز </h3>
                    <p class="price">100000 <span>&#65020</span> </p>
                    <button class="add-to-cart btn" data-name="پیاز" data-price="100000">افزودن</button>
                </li>
                <li class="swiper-slide box">
                    <img class="image" src="img/کرفس.jpg" alt="">
                    <h3 class="product-title">کرفس </h3>
                    <p class="price">150000 <span>&#65020</span> </p>
                    <button class="add-to-cart btn" data-name="کرفس" data-price="150000">افزودن</button>
                </li>
                <li class="swiper-slide box">
                    <img class="image" src="img/کلم.jpg" alt="">
                    <h3 class="product-title">کلم </h3>
                    <p class="price">180000 <span>&#65020</span> </p>
                    <button class="add-to-cart btn" data-name="کلم" data-price="180000">افزودن</button>
                </li>
                <li class="swiper-slide box">
                    <img class="image" src="img/گوجه.jpg" alt="">
                    <h3 class="product-title">گوجه </h3>
                    <p class="price">150000 <span>&#65020</span> </p>
                    <button class="add-to-cart btn" data-name="گوجه" data-price="150000">افزودن</button>
                </li>
                <li class="swiper-slide box">
                    <img class="image" src="img/پرتقال.jpg" alt="">
                    <h3 class="product-title">پرتقال </h3>
                    <p class="price">400000</p>
                    <button class="add-to-cart btn" data-name="پرتقال" data-price="400000" >افزودن</button>
                </li>
                <li class="swiper-slide box">
                    <img class="image" src="img/خربزه.jpg" alt="">
                    <h3 class="product-title">خربزه</h3>
                    <p class="price">180000 <span>&#65020</span> </p>
                    <button class="add-to-cart btn" data-name="خربزه" data-price="180000">افزودن</button>
                </li>
                <li class="swiper-slide box">
                    <img class="image" src="img/توت فرنگی.jpg" alt="">
                    <h3 class="product-title">توت فرنگی</h3>
                    <p class="price">250000 <span>&#65020</span> </p>
                    <button class="add-to-cart btn" data-name="توت فرنگی" data-price="250000">افزودن</button>
                </li>
                <li class="swiper-slide box">
                    <img class="image" src="img/هلو.jpg" alt="">
                    <h3 class="product-title">هلو</h3>
                    <p class="price">350000</p>
                    <button class="add-to-cart btn" data-name="هلو" data-price="350000">افزودن</button>
                </li>
                <li class="swiper-slide box">
                    <img class="image" src="img/تخم مرغ.jpg" alt="">
                    <h3 class="product-title">تخم مرغ</h3>
                    <p class="price">200000 <span>&#65020</span> </p>
                    <button class="add-to-cart btn" data-name="تخم مرغ" data-price="200000">افزودن</button>
                </li>
                <li class="swiper-slide box">
                    <img class="image" src="img/گوشت.jpg" alt="">
                    <h3 class="product-title">گوشت</h3>
                    <p class="price">2700000 <span>&#65020</span> </p>
                    <button class="add-to-cart btn" data-name="گوشت" data-price="2700000">افزودن</button>
                </li>
                <li class="swiper-slide box">
                    <img class="image" src="img/شیر.jpg" alt="">
                    <h3 class="product-title">شیر</h3>
                    <p class="price">150000 <span>&#65020</span> </p>
                    <button class="add-to-cart btn" data-name="شیر" data-price="150000">افزودن</button>
                </li>
                <li class="swiper-slide box">
                    <img class="image" src="img/مرغ.jpg" alt="">
                    <h3 class="product-title">مرغ</h3>
                    <p class="price">700000 <span>&#65020</span> </p>
                    <button class="add-to-cart btn" data-name="مرغ" data-price="700000">افزودن</button>
                </li>
            </ul>
        </div>
    </section>
    <!--productes section ends-->
    <!-- categories section starts-->
    <section class="categories" id="categories">
        <h1 class="heading"><span>دسته بندی ها</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="img/vegetables.jpg">
                <h3>سبزیجات</h3>
                <p> تا 20% تخفیف</p>
                <a href="vegetables.html" class="btn">shop now</a>
            </div>
            <div class="box">
                <img src="img/proteinproducts.jpg">
                <h3>محصولات پروتئینی</h3>
                <p> تا 12% تخفیف</p>
                <a href="proteinproducts.html" class="btn" onclick="showproductes()">shop now</a>
            </div>
            <div class="box">
                <img src="img/fruit.jpg" onclick="showproductes()">
                <h3>میوه ها</h3>
                <p> تا 14% تخفیف</p>
                <a href="fruit.html" class="btn">shop now</a>
            </div>
        </div>
    </section>
    <!--categories section ends-->

    <!--articels section starts-->
    <section class="blogs" id="blog">
        <h1 class="heading"><span>مقالات</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="img/peach.jpg">
                <div class="content">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by admin</a>
                        <a href="#"><i class="fas fa-calendar"> </i>1st may, 2022</a>
                    </div>
                    <h3>
                        هلو 
                    </h3>
                    <p> هُلو یا شفتالو میوه آبدار درخت هلو (نام علمی: Prunus Persica) و دارای هستهٔ سخت، گوشتِ زرد، یا نسبتاً سفید و پوستی مخملی است. بر اساس چسبیدن گوشت به هسته، این میوه به دو دسته هستهٔ جدا و هستهٔ چسب تقسیم می‌شود. نوعی دیگر از خانواده هلو است، که در ایران شفتالو به میوه دیگری غیر از هلو گفته می‌شود که از هلو شیرین‌تر است، به بزرگی هلو نیست، هسته‌اش همیشه چسبیده‌است و پوست آن از هلو کرکِ کمتری دارد که رنگش کمی متفاوت‌تر از هلو است، و برگهٔ آن مرغوب‌تر از هلو است) یکی دیگر از میوه‌هایی که تا حدِ زیادی با هلو ارتباط دارد شلیل است. ارتباط شلیلها با هلو تا حدی است که در واقع گاهی محصولات هلو حاوی تعداد کمی شلیل است و برعکس. شلیل در واقع نوعی هلو با ژن مغلوب است که میوه‌های بدون کرک تولید می‌کند. گزارش آمار جهانی نشان دهنده این امر است که هلو پرطرفدارترین میوه در کل جهان از نظر طعم و مزه است. از دیگر ارقام هلو، هلو انجیری یا هلو کتابی است.</p>
                    <a href="https://fa.wikipedia.org/wiki/%D9%87%D9%84%D9%88" target="_blank" class="btn">بیشتر بدانید</a>
                </div>
            </div>
                <div class="box">
                    <div class="content">
                        <img src="img/milk.jpg">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by admin</a>
                        <a href="#"><i class="fas fa-calendar"> </i>2st agust, 2022</a>
                    </div>
                    <h3>
                        شیر
                    </h3>
                    <p> شیر مایعی خوراکی است که توسط غدد پستانِ پستانداران تولید می‌شود. لبنیات را از شیر درست می‌کنند لبن کلمه عربی به معنای شیر است. شیر غذای اصلی نوزادان را تشکیل می‌دهد که هنوز توانایی گوارش غذاهای گوناگون را ندارند. انسان‌ها مانند دیگر پستانداران در دوران نوزادی از شیر مادر تغذیه می‌کنند. مردم مناطق گوناگون از شیر چهارپایان اهلی به‌ویژه گاو و دیگر چهارپایان همچون گاومیش، گوسفند، بز و شتر استفاده می‌کنند. </p>
                    <a href="https://fa.wikipedia.org/wiki/%D8%B4%DB%8C%D8%B1_(%D8%AE%D9%88%D8%B1%D8%A7%DA%A9%DB%8C)" target="_blank" class="btn">بیشتر بدانید</a>
                    </div>
                </div>
        </div>
    </section>
    <!--articels section ends-->
    <!--footer section start-->
    <section class="footer" id="footer">
        <div class="box-conteiner">
            <div class="box">
                <h3>AMTK<i class="fas fa-shopping-basket"></i></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, maiores. Numquam exercitationem perspiciatis ex quaerat cum iste, necessitatibus sequi tempora nesciunt aliquam veritatis provident hic inventore aperiam porro velit cumque!</p>
                <div class="share">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="https://github.com/wallEteam/amtk"><i class="fab fa-github"></i></a>
                </div>
            </div>
            <div class="box">
                <h3>contact info</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, maiores. Numquam exercitationem perspiciatis ex quaerat cum iste, necessitatibus sequi tempora nesciunt aliquam veritatis provident hic inventore aperiam porro velit cumque!</p>
                <a href="#" class="links"> <i class="fas fa-phone"></i> 07138334532</i></a>
                <a href="#" class="links"> <i class="fas fa-phone"></i> 09044492283</i></a>
                <a href="#" class="links"><i class="fas fa-envelope"></i>teamwalle2023@gmail.com</a>
                <a href="#" class="links"> <i class="fas fa-map-marked-alt"></i>iran-fars-shiraz</a>
            </div>
            
        </div>
        
    </div>
    </section>
    <!--footer section ends-->
















































<!-- js link -->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="Javascript/mainP.js"></script>

</body>
</html>