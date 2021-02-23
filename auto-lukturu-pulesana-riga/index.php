<?php 
include('../1ncludes/functions.php');
?>
<!DOCTYPE html>
<html lang="lv">
<head>
    <title>Lukturu pulēšana | SIA Baltic Detailing</title>
	<meta name="title" content="Lukturu pulēšana | SIA Baltic Detailing">
    <meta charset=utf-8>
    <meta name="description" content="Lukturu pulēšana Baltic Detailing ✅ Pulēšana uzlabos apgaismojuma efektivitāti par 30% ✅ Noņemsim nespodrību, švīkas, skrāpējumus, dzeltenīgumu ▷">
    <!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.bdauto.lv/auto-lukturu-pulesana-riga/">
	<meta property="og:title" content="Lukturu pulēšana | SIA Baltic Detailing">
	<meta property="og:description" content="Lukturu pulēšana Baltic Detailing ✅ Pulēšana uzlabos apgaismojuma efektivitāti par 30% ✅ Noņemsim nespodrību, švīkas, skrāpējumus, dzeltenīgumu ▷">
	<meta property="og:image" content="images/f15-half-done.jpg">
	
	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://www.bdauto.lv/auto-lukturu-pulesana-riga/">
	<meta property="twitter:title" content="Lukturu pulēšana | SIA Baltic Detailing">
	<meta property="twitter:description" content="Lukturu pulēšana Baltic Detailing ✅ Pulēšana uzlabos apgaismojuma efektivitāti par 30% ✅ Noņemsim nespodrību, švīkas, skrāpējumus, dzeltenīgumu ▷">
	<meta property="twitter:image" content="images/f15-half-done.jpg">
		
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="../ru/polirovka-fat-avto-v-rige" hreflang="ru-ru">
    <link rel="alternate" href="/auto-lukturu-pulesana-riga" hreflang="lv-lv">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/simple-lightbox.css">
    <link rel="stylesheet" href="css/media-query.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:700&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/b60c7bcec8.js" crossorigin="anonymous"></script>
</head>
<body>  
<div class="header">
    <div class="header__container container">
        <div class="header__logo">
            <img alt="logo" src="images/logo.png">
        </div>
        <div class="header__contact">
            <div class="header__phone-number-mobile">
                <a href="tel:+37125925977"><img alt="" src="images/icons/contact.png"></a>
            </div>
            <div class="header__email-mobile">
                <a href="mailto:info@bdauto.lv"><i class="fas fa-envelope"></i></a>
            </div>
            <div class="header__phone-number">
                <img alt="" src="images/icons/contact.png">
                    <a href="tel:+37125925977">+371 259-259-77</a>
            </div>
            <div class="header__address">
                <img alt="" src="images/icons/location.png">
                    <span>Rīga, Lizuma iela 1 k-12 (blakus T/C Alfa)</span>
            </div>
            <div class="header__languages">
                <a class="active" href="/auto-lukturu-pulesana-riga"><span>LV</span></a>
                <a href="/ru/polirovka-far-avto-v-rige"><span>RU</span></a>
            </div>
        </div>
    </div>
</div>
<div class="main-block">
    <div class="main-block__container container">
        <div class="main-block__utp">
            <div class="main-block__offer">
                <h1>Auto lukturu pulēšana</h1><span class="main-offer">tikai par 35 &euro;</span>
            </div>
            <div class="main-block__gift">
                <p>+ Dāvanā uzklāsim aizsargpārklājumu!</p>
            </div>
        </div>
        <div class="main-block__main-content">
            <div class="main-block__result">
                <div class="main-block__before">
                    <div class="main-block__image">
                        <p>Pirms</p>
						<picture>
							<source srcset="images/audi-before.webp" type="image/webp"><source srcset="images/audi-before.jpg" type="image/jpeg"><img src="images/audi-before.jpg" class="light-foto bordered" alt="lukturu pulesana pirms">
						</picture>
                        <!--img alt="lukturu pulesana pirms" class="light-foto bordered" src="images/audi-before.jpg">-->
                    </div>
                    <div class="main-block__arrow">
                        <span class="main-block__time">1 stundu vēlāk</span>
                        <img alt="" src="images/arrow-1.png">
                    </div>
                </div>
                <div class="main-block__after">
                    <div class="main-block__image">
                        <p>Pēc</p>
						<picture>
							<source srcset="images/audi-after.webp" type="image/webp"><source srcset="images/audi-after.jpg" type="image/jpeg"><img src="images/audi-after.jpg" class="light-foto bordered" alt="lukturu pulesana pec">
						</picture>
                        <!--<img alt="lukturu pulesana pec" class="light-foto bordered" src="images/audi-after.jpg">-->
                    </div>
                </div>
            </div>
            <div class="main-block__form-area bordered">
                <span class="form-title">Vēlaties tādu pašu rezultātu?</span>
                <span>Atstājiet pieteikumu un mēs ar jums sazināsimies!</span>
                <form action="order.php" method="POST">
					<input type="text" id="Editbox1" name="Editbox1" placeholder="Vārds:" value="" required>
					<input type="text" id="Editbox2" name="Editbox2" pattern="^[0-9]+$" placeholder="Tālruņa numurs:" value=""  required>
					<input type="text" id="Editbox3" name="Editbox3" placeholder="Automašīnas marka un modelis:" value=""  required>

					<input type="hidden" id="Editbox4" name="Editbox4" value="<?php echo $utm_source; ?>">
					<input type="hidden" id="Editbox5" name="Editbox5" value="<?php echo $utm_medium; ?>">
					<input type="hidden" id="Editbox6" name="Editbox6" value="<?php echo $utm_campaign; ?>">
					
					<input type="hidden" id="Editbox7" name="Editbox7" value="Lukturi">
					
                    <button type="submit" class="main-block__button">Pieteikties</button>
                    <div class="main-block__checkbox">
                        <input type="checkbox" name="agree" required><p>Piekrītu ar <a href="documents/likums.pdf" target="_blank" rel="nofollow">datu apstrādes noteikumiem</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="why">
    <div class="why__container container">
        <div class="why__title">
            <h2>Trīs svarīgi iemesli, kāpēc nopulēt lukturus</h2>
        </div>
        <div class="why__benefits-area">
            <div class="why__first-benefit">
                <div class="why__first-image">
                </div>
                <div class="why__benefit-text">
                    <div class="why__benefit-title">
                        <h3>Likvidēt dzeltenumu, skrāpējumus, skrambas, noberzumus un miglainību</h3>
                    </div>
                    <div class="why__line"></div>
                    <div class="why__description">
                        <p>Gludi, tīri un caurspīdīgi priekšējie lukturi piešķirs Jūsu automašīnai svaigāku un pievilcīgāku izskatu. Lukturi būs kā jauni, tieši no rūpnīcas!</p>
                    </div>
                </div>
            </div>
            <div class="why__second-benefit">
                <div class="why__second-image">
                </div>
                <div class="why__benefit-text">
                    <div class="why__benefit-title">
                        <h3>Uzlabot ceļa apgaismojumu tumsā</h3>
                    </div>
                    <div class="why__line"></div>
                    <div class="why__description">
                        <p>Slikts apgaismojums tumsā ir drauds Jūsu drošībai. Lukturu pulēšana palielinās apgaismojuma efektivitāti par aptuveni 30%.</p>
                    </div>
                </div>
            </div>
            <div class="why__third-benefit">
                <div class="why__third-image">
                </div>
                <div class="why__benefit-text">
                    <div class="why__benefit-title">
                        <h3>Ar 100% pārliecību iziet valsts tehnisko apskati</h3>
                    </div>
                    <div class="why__line"></div>
                    <div class="why__description">
                        <p>Sakarā ar tuvās gaismas vāju staru, kurš mainās lukturu miglainības dēļ, Jūs, iespējams, nevarēsiet iziet tehnisko pārbaudi. Pulēšana atrisinās šo problēmu.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="process">
    <div class="process__container container">
        <div class="process__main-area">
            <div class="process__title">
                <h2>Lukturu pulēšana notiek četros posmos</h2>
            </div>
            <div class="process__cards-area">
                <div class="process__card">
                    <div class="process__numbers">
                        <p>01</p>
                    </div>
                    <div class="process__text-area">
                        <div class="process__small-title">
                            <h3>Sagatavošana</h3>
                        </div>
                        <div class="process__small-text">
                            <p>Virsmas tīrīšana no netīrumiem pielietojot speciālu tīrīšanas līdzekļi. Aplīmēšana ar aizsarglenti ap lukturiem</p>
                        </div>
                    </div>
                </div>
                <div class="process__card">
                    <div class="process__numbers">
                        <p>02</p>
                    </div>
                    <div class="process__text-area">
                        <div class="process__small-title">
                            <h3>Slīpēšana</h3>
                        </div>
                        <div class="process__small-text">
                            <p>Trīs soļu slīpēšana ar slīpēšanas diskiem un dažādu gradāciju smilšpapīru, kas noņem dzeltenumu un miglainību</p>
                        </div>
                    </div>
                </div>
                <div class="process__card">
                    <div class="process__numbers">
                        <p>03</p>
                    </div>
                    <div class="process__text-area">
                        <div class="process__small-title">
                            <h3>Pulēšana</h3>
                        </div>
                        <div class="process__small-text">
                            <p>Pulēšanas process, lukturi tiek pulēti ar pulēšanas ripu un pulēšanas pastam</p>
                        </div>
                    </div>
                </div>
                <div class="process__card">
                    <div class="process__numbers">
                        <p>04</p>
                    </div>
                    <div class="process__text-area">
                        <div class="process__small-title">
                            <h3>Aizsargpārklājuma uzklāšanas</h3>
                        </div>
                        <div class="process__small-text">
                            <p>Aizsargpārklājuma uzklāšanas process. Pastāv 3 veidu aizsargpārklājumi:</p>
                            <span class="process__smaller">1) Standarta aizsardzība, ieskaitot pulēšanu 35 EUR<br>2) Aizsargājošs keramiskais pārklājums, cena ar pulēšanu 70 EUR<br>3) Aizsargplēve pasargās no skrambām un skrāpējumiem, izmaksas kopā ar pulēšanu 100 EUR</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="process__advice">
            <p>Pēc mūsu meistaru pieredzes, drošāka aizsardzība ir aizsargplēve. Lukturi trīs gadus paliek bez skrāpējumiem un skrambām.</p>
        </div>
    </div>
</div>
<div class="how">
    <div class="how__container container">
        <div class="how__title">
            <h2>Noskatieties video, kā notiek lukturu pulēšana</h2>
        </div>
        <div class="how__about">
            <video controls poster="images/video-poster.jpg">
                <source src="images/polishing.mp4" type="video/mp4">
            </video> 
        </div>
        <div class="how__cta-area">
            <p><span>Pieteicieties lukturu pulēšanai</span> un vienas stundas laikā Jūsu automašīnas priekšējie lukturi kļūs kā jauni!</p>
            <button class="how__button" id="button2">Pieteikties pulēšanai</button>
        </div>
    </div>
</div>
<div class="about-us">
    <div class="about-us__container container">
        <div class="about-us__title">
            <h2>Kāpēc simtiem klientu izvēlas Baltic Detailing</h2>
        </div>
        <div class="about-us__card-area">
            <div class="about-us__two-cards">
                <div class="about-us__card">
                    <div class="about-us__image-first">
                    </div>
                    <div class="about-us__info">
                        <h3>Profesionālie materiāli</h3>
                    </div>
                    <div class="about-us__small-text">
                        <p>Mēs izmantojam tikai kvalitatīvus pulēšanas materialus. Mēs strādājam ar slavenākajiem zīmoliem: Koch Chemie, Mirka, Nanolex, Sonax, Buff un Shine u.c.</p>
                    </div>
                </div>
                <div class="about-us__card">
                    <div class="about-us__image-second">
                    </div>
                    <div class="about-us__info">
                        <h3>Meistari ar 7 gadu pieredzi</h3>
                    </div>
                    <div class="about-us__small-text">
                        <p>Pie mums strādā pieredzējuši meistari, kuri ir izgājuši sertificēšanu vācu uzņēmumā Koch Chemie&reg;. Viņi ir veiksmīgi paveikuši vairāk nekā 1000 projektus.</p>
                    </div>
                </div>
            </div>
            <div class="about-us__two-cards">
                <div class="about-us__card">
                    <div class="about-us__image-third">
                    </div>
                    <div class="about-us__info">
                        <h3>Plaša spektra automašīnas kopšana</h3>
                    </div>
                    <div class="about-us__small-text">
                        <p>Mēs piedāvājam: auto detailingu, virsbūves pulēšanu, lukturu pulēšanu, aplīmēšanu ar aizsarg plēvi, aplīmēšanu ar krāsas plēvi, salona ķīmisko tīrīšanu, buktes likvidēšanu bez krāsošanas, ādas remontu un krāsošanu, virsbūves mazgāšanu, salona uzkopšanu un citus pakalpojumus Jūsu automobilim</p>
                    </div>
                </div>
                <div class="about-us__card">
                    <div class="about-us__image-fourth">
                    </div>
                    <div class="about-us__info">
                        <h3>Servisa <br>garantija</h3>
                    </div>
                    <div class="about-us__small-text">
                        <p>Katram pakalpojumam mēs sniedzam oficiālu garantiju. 7 gadu garumā nebija neviena garantijas gadījuma.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="reviews">
    <div class="reviews__container container">
        <div class="reviews__title">
            <h2>Auto lukturu pulēšana atsauksmes</h2>
        </div>
        <div class="reviews__cards">
            <div class="reviews__signle-review">
                <div class="reviews__profile">
                    <div class="reviews__review-image">
					<picture>
						<source srcset="images/reviews/dmitry-sha.webp" type="image/webp"><source srcset="images/reviews/dmitry-sha.jpg" type="image/jpeg"><img src="images/reviews/dmitry-sha.jpg" alt="Dmitrijs">
					</picture>
                        <!--<img alt="Dmitrijs" src="images/reviews/dmitry-sha.jpg">-->
                    </div>
                    <div class="reviews__review-info">
                        <div class="reviews__review-name">
                            <p><span>Dmitry Sha</span> <img alt="" src="images/icons/red-star.png"> rekomendē</p>
                        </div>
                        <div class="reviews__date">
                            <p>21. februārī 2020 g.</p>
                        </div>
                    </div>
                </div>
                <div class="reviews__review-text">
                    <p>Большое спасибо за отличную, качественную и быстро выполненную работу ! Отполировали фары и сделали хим. чистку салона и машина выглядит как новая.</p>
                </div>
            </div>
            <div class="reviews__signle-review">
                <div class="reviews__profile">
                    <div class="reviews__review-image">
					<picture>
						<source srcset="images/reviews/tanja-rename.webp" type="image/webp"><source srcset="images/reviews/tanja-rename.jpg" type="image/jpeg"><img src="images/reviews/tanja-rename.jpg" alt="Tanja">
					</picture>
                        <!--<img alt="Tanja Rename" src="images/reviews/tanja-rename.jpg">-->
                    </div>
                    <div class="reviews__review-info">
                        <div class="reviews__review-name">
                            <p><span>Tanja Rename</span> <img alt="" src="images/icons/red-star.png"> rekomendē</p>
                        </div>
                        <div class="reviews__date">
                            <p>15. februārī 2020 g.</p>
                        </div>
                    </div>
                </div>
                <div class="reviews__review-text">
                    <p>Ļoti ātri un kvalitatīvi atjaunoja priekšējos lukturus, prieks skatīties. Īpašs paldies par operatīvu komunikāciju. Iesaku</p>
                </div>
            </div>
            <div class="reviews__signle-review">
                <div class="reviews__profile">
                    <div class="reviews__review-image">
					<picture>
						<source srcset="images/reviews/andrej-shabashov.webp" type="image/webp"><source srcset="images/reviews/andrej-shabashov.jpg" type="image/jpeg"><img src="images/reviews/andrej-shabashov.jpg" alt="Andrej">
					</picture>
                        <!--<img alt="Andrej Shabashov" src="images/reviews/andrej-shabashov.jpg">-->
                    </div>
                    <div class="reviews__review-info">
                        <div class="reviews__review-name">
                            <p><span>Андрей Шабашов</span> <img alt="" src="images/icons/red-star.png"> rekomendē</p>
                        </div>
                        <div class="reviews__date">
                            <p>13. jūlijā 2018 g.</p>
                        </div>
                    </div>
                </div>
                <div class="reviews__review-text">
                    <p>Сервис на уровне. Цены хорошие. Предложили попить кофе в уютном зале ожидания, пока машину делали. Сделали быстро. Я очень доволен. Сделали несколько бонусов в подарок.</p>
                </div>
            </div>
            <div class="reviews__signle-review">
                <div class="reviews__profile">
                    <div class="reviews__review-image">
					<picture>
						<source srcset="images/reviews/andris-jekabsons.webp" type="image/webp"><source srcset="images/reviews/andris-jekabsons.jpg" type="image/jpeg"><img src="images/reviews/andris-jekabsons.jpg" alt="Andris">
					</picture>
                        <!--<img alt="Andris Jekabsons" src="images/reviews/andris-jekabsons.jpg">-->
                    </div>
                    <div class="reviews__review-info">
                        <div class="reviews__review-name">
                            <p><span>Andris Jekabsons</span> <img alt="" src="images/icons/red-star.png"> rekomendē</p>
                        </div>
                        <div class="reviews__date">
                            <p>21. novembrī 2019 g.</p>
                        </div>
                    </div>
                </div>
                <div class="reviews__review-text">
                    <p>Lukturi kā glāzes no traukumazgājamās mašīnas, ideāli, kā jaunas! Tik jānovēl labāka lokācija, vai Playstation istaba, kamēr pulējas lai ir ko sadarīt!</p>
                </div>
            </div>
            <div class="reviews__signle-review">
                <div class="reviews__profile">
                    <div class="reviews__review-image">
					<picture>
						<source srcset="images/reviews/maris-pekke.webp" type="image/webp"><source srcset="images/reviews/maris-pekke.jpg" type="image/jpeg"><img src="images/reviews/maris-pekke.jpg" alt="Maris">
					</picture>
                        <!--<img alt="Maris Pekke" src="images/reviews/maris-pekke.jpg">-->
                    </div>
                    <div class="reviews__review-info">
                        <div class="reviews__review-name">
                            <p><span>Maris Pekke</span> <img alt="" src="images/icons/red-star.png"> rekomendē</p>
                        </div>
                        <div class="reviews__date">
                            <p>17. janvārī 2020 g.</p>
                        </div>
                    </div>
                </div>
                <div class="reviews__review-text">
                    <p>Paldies Baltic Detailing par ātru kvalitatīvu derbu, mašīna izskatās kā jauna! Iesaku visiem!</p>
                </div>
            </div>
            <div class="reviews__signle-review">
                <div class="reviews__profile">
                    <div class="reviews__review-image">
					<picture>
						<source srcset="images/reviews/oleg-obernihin.webp" type="image/webp"><source srcset="images/reviews/oleg-obernihin.jpg" type="image/jpeg"><img src="images/reviews/oleg-obernihin.jpg" alt="Oleg">
					</picture>
                        <!--<img alt="Oleg Obernihin" src="images/reviews/oleg-obernihin.jpg">-->
                    </div>
                    <div class="reviews__review-info">
                        <div class="reviews__review-name">
                            <p><span>Олег Обернихин</span> <img alt="" src="images/icons/red-star.png"> rekomendē</p>
                        </div>
                        <div class="reviews__date">
                            <p>18. aprīlī 2018 g.</p>
                        </div>
                    </div>
                </div>
                <div class="reviews__review-text">
                    <p>Спасибо большое Евгению и его команде за качественно выполненную работу. Было очень приятно пообщаться ! Надеюсь не в последний раз !!!</p>
                </div>
            </div>
        </div>
        <div class="reviews__button">
            <a href="https://www.facebook.com/pg/balticdetailing/reviews/?ref=page_internal" target="_blank" rel="nofollow">Vairāk atsauksmes šeit</a>
        </div>
    </div>
</div>
<div class="main-gallery">
    <div class="main-gallery__container container">
        <div class="main-gallery__title">
            <span>Mūsu darba piemēri</span>
        </div>
        <div class="main-gallery__area">
                <a href="images/gallery/image1.jpg">
					<picture>
						<source srcset="images/gallery/thumbs/thumb1.webp" type="image/webp"><source srcset="images/gallery/thumbs/thumb1.jpg" type="image/jpeg"><img src="images/gallery/thumbs/thumb1.jpg" alt="volkswagen touareg">
					</picture>
				<!--<img src="images/gallery/thumbs/thumb1.jpg" alt="volkswagen touareg"/>-->
				</a>
                <a href="images/gallery/image2.jpg">
					<picture>
						<source srcset="images/gallery/thumbs/thumb2.webp" type="image/webp"><source srcset="images/gallery/thumbs/thumb2.jpg" type="image/jpeg"><img src="images/gallery/thumbs/thumb2.jpg" alt="volkswagen touareg 2">
					</picture>
				<!--<img src="images/gallery/thumbs/thumb2.jpg" alt="volkswagen touareg 2"/>-->
				</a>
                <a href="images/gallery/image3.jpg">
					<picture>
						<source srcset="images/gallery/thumbs/thumb3.webp" type="image/webp"><source srcset="images/gallery/thumbs/thumb3.jpg" type="image/jpeg"><img src="images/gallery/thumbs/thumb3.jpg" alt="volvo xc90">
					</picture>
				<!--<img src="images/gallery/thumbs/thumb3.jpg" alt="volvo xc90"/>-->
				</a>
                <a href="images/gallery/image4.jpg">
					<picture>
						<source srcset="images/gallery/thumbs/thumb4.webp" type="image/webp"><source srcset="images/gallery/thumbs/thumb4.jpg" type="image/jpeg"><img src="images/gallery/thumbs/thumb4.jpg" alt="audi q7">
					</picture>
				<!--<img src="images/gallery/thumbs/thumb4.jpg" alt="audi q7"/>-->
				</a>
                <a href="images/gallery/image5.jpg">
					<picture>
						<source srcset="images/gallery/thumbs/thumb5.webp" type="image/webp"><source srcset="images/gallery/thumbs/thumb5.jpg" type="image/jpeg"><img src="images/gallery/thumbs/thumb5.jpg" alt="bmw x5">
					</picture>
				<!--<img src="images/gallery/thumbs/thumb5.jpg" alt="bmw x5"/>-->
				</a>
                <a href="images/gallery/image6.jpg">
					<picture>
						<source srcset="images/gallery/thumbs/thumb6.webp" type="image/webp"><source srcset="images/gallery/thumbs/thumb6.jpg" type="image/jpeg"><img src="images/gallery/thumbs/thumb6.jpg" alt="porsche cayenne">
					</picture>
				<!--<img src="images/gallery/thumbs/thumb6.jpg" alt="porsche cayenne"/>-->
				</a>
        </div>
        <div class="main-gallery__cta-block">
            <div class="main-gallery__cta-text">
                <p><span>Vēlaties tādu pašu rezultātu?</span> Atstājiet pieteikumu, un mēs nopulēsim priekšējos lukturus, kā arī dāvanā uzklāsim aizsargpārklājumu!</p><!--нужен мощный CTA-->
            </div>
            <div class="main-gallery__cta-button">
                <button id="button1">Pieteikties</button>
            </div>
        </div>
    </div>
</div>
<div class="social-contact">
    <div class="social-contact__container container">
        <div class="social-contact__main-block">
            <div class="social-contact__title">
                <p><span>Vai Jums palika jautājumi?</span> Droši sazinieties ar mums, un mūsu pieklājīgs konsultants atbildēs uz Jūsu jautājumiem.</p>
            </div>
            <div class="social-contact__links">
                <div class="social-contact__phone">
                    <a href="tel:+371259-259-77">+371 259-259-77</a>
                </div>
                <div class="social-contact__flexible">
                    <div class="social-contact__messenger">
                        <a href="https://m.me/balticdetailing/"><img alt="" src="images/icons/messenger.png"></a>
                    </div>
                    <div class="social-contact__whatsap">
                        <a href="https://wa.me/37125925977"><img alt="" src="images/icons/whatsapp.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="footer__container container">
        <div class="footer__left-side">
            <p>SIA Baltic Detailing &copy; 2014 - 2021</p>
        </div>
        <div class="footer__right-side">
            <p>Rīga, Lizuma iela 1 k-12 | www.bdauto.lv</p>
        </div>
    </div>
</div>
<!-- POP UPS -->
<div class="bg" style="display: none;">
</div>
<div class="pop-up bordered" style="display: none;">
    <img alt="" src="images/icons/close.png" class="close" />
    <h3>Aizpildiet veidlapu</h3>
    <p class="pop-up__small-title">Mūsu pieklājīgs konsultants drīz sazināsies ar Jums</p>
    <form action="order.php" method="POST">
        <input type="text" id="Editbox1" name="Editbox1" placeholder="Vārds:" value="" required>
        <input type="text" id="Editbox2" name="Editbox2" pattern="^[0-9]+$" placeholder="Tālruņa numurs:" value=""  required>
        <input type="text" id="Editbox3" name="Editbox3" placeholder="Automašīnas marka un modelis:" value=""  required>

        <input type="hidden" id="Editbox4" name="Editbox4" value="<?php echo $utm_source; ?>">
        <input type="hidden" id="Editbox5" name="Editbox5" value="<?php echo $utm_medium; ?>">
        <input type="hidden" id="Editbox6" name="Editbox6" value="<?php echo $utm_campaign; ?>">
        <input type="hidden" id="Editbox7" name="Editbox7" value="Lukturi">

        <input class="button2" id="button" type="submit" name="submit" value="Pieteikties">
    </form>
    <p class="pop-up__confidential">Garantejam konfidencialitāte</p>
</div>
<!-- LOADING JAVASCRIPT -->
<script src="js/simple-lightbox.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

<script>

	//----------------------- Pop ups -----------------------//
    $("#button1, #button2").click( function() {
       $(".bg").fadeIn(500);
       $(".pop-up").fadeIn(500);
    });
    $(".bg, .close, .open").click( function() {
       $(".bg").fadeOut(400);
       $(".pop-up").fadeOut(400);
    });
	
	//----------------------- Galleries -----------------------//
	
	var bigGallery = new SimpleLightbox('.main-gallery__area a', {
        showCounter: false,
		captions: false
    });
</script>

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