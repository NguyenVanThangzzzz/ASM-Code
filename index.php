<?
	session_start();
	define("productfolder","img/product/");
	define("productlargefolder","img/product_large/");
	define("tax",5);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="keywords" lang="en-us" content="Assumption University,Computer Store Project,Assumption University Project,PHP Project,ABAC Project">
<META NAME="Description" CONTENT="Assumption University PHP Final Project">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-site-verification" content="WWfmdAzbuVnt8F45gamZG9yEZVSbWsU-rs93ZDsnh0M" />

<title>Sneaker Store VIP</title>

<link rel="shortcut icon" href="img/abac_icon.ico" />
<link href="css/ban4.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />

<script src="js/myjs.js" type="text/javascript"></script>
<script src="js/prototype.js" type="text/javascript"></script>
<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
<script src="js/lightbox.js" type="text/javascript"></script>

<script>
    var slideIndex = 1;
 showSlides(slideIndex);
function plusSlides(n) {
   showSlides(slideIndex += n);
 }
function currentSlide(n) {
   showSlides(slideIndex = n);
 }
function showSlides(n) {
   var i;
   var slides = document.getElementsByClassName("mySlides");
   var dots = document.getElementsByClassName("dot");
   if (n > slides.length) {slideIndex = 1}
   if (n < 1) {slideIndex = slides.length}
   for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
   }
   for (i = 0; i < dots.length; i++) {
       dots[i].className = dots[i].className.replace("active", "");
   }
   slides[slideIndex-1].style.display = "block";
   dots[slideIndex-1].className += " active";
 }
</script>
<style>
    /* thiết lập style cho slideshow container */
.slideshow-container {
  /* max-width: 1000px; */
  position: relative;
  margin: auto;
  width: 100%;
  margin-top: 10px;
}
/* ẩn hình ảnh cho phần tử slideshow */
.mySlides {
  display: none;
}
/* thiết kế nút mũi tên*/
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
/* thiết kế nút mũi tên next nằm phía bên phải */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
/* hiệu ứng thay đổi background khi hover vào nút mũi tên*/
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}
/* Thiết lập style cho số hiển thị của phần tử */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
/* thiết lập style  nút tròn điều khiển*/
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.5s ease;
}
.active, .dot:hover {
  background-color: #717171;
}
/* tạo hiệu ứng chuyển động fade */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
</style>
</head>
<?

	$GLOBALS['cart'] ='';
	$GLOBALS['totalitems'] = 0;
	
	$page = $_GET['page'];
	$cart = $_GET['cart'];
        
	if($page == ''){
		$page = 'productlist';
	}

	if($cart == ''){
		$cart = 'all';
	}
	else{
		$GLOBALS['cart'] = $cart;
	}

?>


<body>


<div class="frame">
    
    
	<? require("topbanner.php") ?>
	<? require("mainmenu.php") ?>

    <div class="space"></div>

    <div class="main_body">
	<div id="slider">
                    <!-- Thẻ Chứa Slideshow -->
          <div class="slideshow-container">
            <!-- Kết hợp hình ảnh và nội dung cho mội phần tử trong slideshow-->
            <div class="mySlides fade">
              <div class="numbertext">1 / 8</div>
              <img src="img/sls1.webp" style="width:100%">
            </div>
            <div class="mySlides fade">
              <div class="numbertext">2 / 8</div>
			  <img src="img/sls1.webp" style="width:100%">
            </div>
            <div class="mySlides fade">
              <div class="numbertext">3 / 8</div>
			  <img src="img/sls2.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
              <div class="numbertext">4 / 8</div>
			  <img src="img/sns3.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
              <div class="numbertext">5 / 8</div>
              <img src="img/sns4.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
              <div class="numbertext">6 / 8</div>
              <img src="img/sns9.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
              <div class="numbertext">7/ 8</div>
              <img src="img/sns8.webp" style="width:100%">
            </div>
            <div class="mySlides fade">
              <div class="numbertext">8 / 8</div>
              <img src="img/sns7.jpg" style="width:100%">
            </div>
            <!-- Nút điều khiển mũi tên-->
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
          </div>
          <br>
          <!-- Nút tròn điều khiển slideshow-->
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(😎"></span>         
          </div>
        <div class="main_body_top"><img src="img/main_body_top.jpg" width="850" height="13" /></div>
        
            <? require("menupanel.php") ?>
            
            <div class="bodypanel">
                <? require("bodybanner.php") ?>

                <div class="space3"></div>

                <? 
					if(file_exists($page . '.php') == 1){
						require( $page . '.php');
					}
					else{
						require('productlist.php');
					}
				?>

            </div>
            
        <div><img src="img/main_body_bottom.jpg" width="850" height="13" /></div>
    </div>

	<div class="snowflakes" aria-hidden="true">
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
</div>


<? require("footer.php") ?>
</div>
</body>
</html>

