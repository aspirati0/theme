<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Emirates Sports Hotel - Dubai Sports City Apartments</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Montserrat");
        @import url("https://fonts.cdnfonts.com/css/gotham-pro");
        @import url("https://fonts.cdnfonts.com/css/gotham");
        @import url("https://db.onlinewebfonts.com/c/50cd2aad9c8f35800bb6beac3ad42f16?family=Azonix");
       <link rel="stylesheet" href="/wp-content/themes/theme/assets/css/style.css">
    </style>
    <?php wp_head(); ?>
</head>
<body>
	<div class="line-container">
		<div class="line"></div>
	</div>
    <div class="header">
        <div>
            <a href="/"><img class="logo" src="/wp-content/uploads/2023/03/logo-300x115.png" /></a>
        </div>
        <div class="icons">
            <a href="https://goo.gl/maps/v23LUpUmyCiGXh2b7"><img src="/wp-content/themes/theme/assets/img/header1.webp" /></a>
            <a href="https://wa.me/971586042244"><img src="/wp-content/themes/theme/assets/img/header2.webp" /></a>
            <a href="tel:+97145720000"><img src="/wp-content/themes/theme/assets/img/header3.webp" /></a>
            <a href="mailto:info@emiratessportshotel.com"><img src="/wp-content/themes/theme/assets/img/header4.webp" /></a>
        </div>
        <div class="menu">
            <button class="hamburger" id="hamburger">☰</button>
            <button class="cancel" id="cancel">×</button>
            <div id="nav-ul" class="nav-ul">
                <ul class="menu-ul" id="nav">
                    <li><a href="/" class="menu-item">MAIN</a></li>
                    <li><a href="/accommodation/" class="menu-item">ACCOMMODATION</a></li>
                    <li><a href="/lifestyle-club/" class="menu-item">LIFESTYLE CLUB</a></li>
                    <li><a href="/academy/" class="menu-item">ACADEMY</a></li>
                    <li><a href="/news-posts/" class="menu-item">NEWS</a></li>
                    <li><a href="/contact/" class="menu-item">CONTACT</a></li>
                </ul>
                <div class="login">
                    <img src="/wp-content/themes/theme/assets/img/header6.webp" />
                    <p>Log In</p>
                </div>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    	$(function () {
        		var current = location.pathname;
		console.log(current);
        		$('.menu-ul li a').each(function () {
            		var $this = $(this);
            		// if the current path is like this link, make it active
            		if ($this.attr('href') === current) {
             	   		$this.addClass('active');
            		}
       		 })
    	})

        const hamburger = document.getElementById('hamburger');
        const navUL = document.getElementById('nav-ul');
        const cancel = document.getElementById('cancel');

        hamburger.addEventListener('click', () => {
            navUL.classList.toggle('show');
            hamburger.style.display = "none";
            cancel.style.display = "block";
        })

        cancel.addEventListener('click', () => {
            navUL.classList.toggle('show');
            hamburger.style.display = "block";
            cancel.style.display = "none";
        })

    </script>