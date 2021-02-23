<?php

error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

session_start();


// message
$name = isset($_POST["Editbox1"]) ? $_POST["Editbox1"] : "";
// $name = iconv ('utf-8', 'windows-1251', $name);
$kod = isset($_POST["Editbox2"]) ? $_POST["Editbox2"] : "";
$email = isset($_POST["Editbox3"]) ? $_POST["Editbox3"] : "";
$source = isset($_POST["Editbox4"]) ? $_POST["Editbox4"] : "";
$medium = isset($_POST["Editbox5"]) ? $_POST["Editbox5"] : "";
$campaign = isset($_POST["Editbox6"]) ? $_POST["Editbox6"] : "";
$produkt = isset($_POST["Editbox7"]) ? $_POST["Editbox7"] : "";

        

// Sending
mail('info@bdauto.lv', 'Заявка с Landing Page полировка фар LV', $name . "\n" . $kod . "\n" . $email . "\n" . $source . "\n" . $medium . "\n" . $campaign . "\n" . $produkt);
?>
<head>
	<title>Lukturu pulēšana | SIA Baltic Detailing</title>
    <meta charset=utf-8>
	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media-query.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:700&display=swap" rel="stylesheet"> 
</head>
<body>
<div class="header">
    <div class="header__container container">
        <div class="header__logo">
            <img alt="" src="images/logo.png">
        </div>
        <div class="header__contact">
            <div class="header__phone-number">
                <img alt="" src="images/icons/contact.png">
                    <a href="tel:+37125925977">+371 259-259-77</a>
            </div>
            <div class="header__address">
                <img alt="" src="images/icons/location.png">
                    <span>Rīga, Lizuma iela 1 k-12 (blakus T/C Alfa)</span>
            </div>
            <div class="header__languages">
                <a class="active" href="order.php"><span>LV</span></a>
                <a href="order_ru.php"><span>RU</span></a>
            </div>
        </div>
    </div>
</div>
<div class="thank-you">
	<div class="thank-you__container container">
		<div class="thank-you__text-area">
			<div class="thank-you__final-words">
				<h1>Paldies par pieteikumu!</h1>
			</div>
			<div class="thank-you__small-text">
				<p>Mēs ar Jums sazināsimies tuvākajā laikā.</p>
			</div>
		</div>
	</div>
</div>
<div class="footer">
    <div class="footer__container container">
        <div class="footer__left-side">
            <p>SIA Baltic Detailing &copy; 2014 - 2020</p>
        </div>
        <div class="footer__right-side">
            <p>Rīga, Līzuma iela 1 k-12 | www.bdauto.lv</p>
        </div>
    </div>
</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(69368101, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/69368101" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-86900779-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-86900779-1');
</script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '672355013245017');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=672355013245017&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</body>
</html>