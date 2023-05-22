﻿<?php get_header(); ?>

<style>
	
	@media(min-width: 800px) {
		.block4 {
		background: url("/wp-content/themes/theme/assets/img/block5.webp");
		background-repeat: no-repeat;
		background-size: 50%;
		background-position: right;
	}
		iframe {
			max-height: 40vw;
		}
		.div1 > img, .div2 > img, .div3 > img, .div4 > img {
			display: none;
		}
		.div1 > div, .div3 > div{
			margin-left: 50%;
			padding-top: 2em;
			padding-bottom: 2em;
		}
		.div2 > div, .div4 > div {
			padding-top: 2em;
			padding-bottom: 2em;
		}
		.div1 {
			background: url("/wp-content/themes/theme/assets/img/block5-1.webp");
			background-repeat: no-repeat;
			background-size: 50%;
		}
		.div2 {
			background: url("/wp-content/themes/theme/assets/img/block5-2.webp");
			background-repeat: no-repeat;
			background-size: 50%;
			background-position: right;
		}
		.div3 {
			background: url("/wp-content/themes/theme/assets/img/block5-3.webp");
			background-repeat: no-repeat;
			background-size: 50%;
		}
		.div4 {
			background: url("/wp-content/themes/theme/assets/img/block5-4.webp");
			background-repeat: no-repeat;
			background-size: 50%;
			background-position: right;
		}
		.block8 > img {
			display: none;
		}
		
		.block8 {
			background: url("/wp-content/themes/theme/assets/img/block8.webp");
			background-repeat: no-repeat;
			background-size: 50%;
			background-position: right;
		}
		
		.block3 > .slider > div > img {
			max-height: 40vw;
		}
		
		.block6 > div {
			padding-bottom: 1em;
		}
	}
	
	@media (min-width: 800px) and (max-width: 1600px) {
		.block3 > .text {
			bottom: 40vw;
		}
	}
	
	@media (min-width: 1600px) and (max-width: 1900px) {
		.block3 > .text {
			bottom: 38vw;
		}
	}
	
	
	@media (min-width: 1900px) {
		.block3 > .text {
			bottom: 36vw;
		}
	}
	
	@media(min-width: 800px) and (max-width: 1300px) {
		.block6 > iframe {
			min-height: 60vw !important;
		}
		.block6 > div {
			bottom: 55vw;
			left: 63vw;
		}
		.block6 {
			margin-bottom: -50vw;
		}
	}
	
	@media(min-width: 1300px) and (max-width: 1400px) {
		.block6 > iframe {
			min-height: 50vw !important;
		}
		.block6 > div {
			bottom: 650px;
			left: 70vw;
		}
		.block6 {
			margin-bottom: -620px;
		}
	}
	
	@media(min-width: 1400px) and (max-width: 1600px) {
		.block6 > iframe {
			min-height: 50vw !important;
		}
		.block6 > div {
			bottom: 680px;
			left: 65vw;
		}
		.block6 {
			margin-bottom: -650px;
		}
	}
	
	@media(min-width: 1600px) and (max-width: 1800px) {
		.block6 > div {
			bottom: 650px;
			left: 70vw;
		}
		.block6 {
			margin-bottom: -635px;
		}
	}
	
	@media(min-width: 1800px) and (max-width: 2000px) {
		.block6 > div {
			bottom: 670px;
			left: 70vw;
		}
		.block6 {
			margin-bottom: -640px;
		}
	}
	
	@media(min-width: 2000px)  {
		.block6 > div {
			bottom: 700px;
			left: 70vw;
		}
		.block6 {
			margin-bottom: -670px;
		}
	}
	
</style>

<div class="block1">
        <link href="https://live.ipms247.com/themes/reservation/css/bookingbtn/resui_bookingbox.css" rel="stylesheet" type="text/css" />
        <link href="https://live.ipms247.com/themes/reservation/css/bookingbtn/resui_datepicker.css" rel="stylesheet" type="text/css" />
        <script src="https://live.ipms247.com/themes/reservation/js/bookingbtn/jquery-a.l.d.js" type="text/javascript"></script>
        <script src="https://live.ipms247.com/themes/reservation/js/bookingbtn/jquery-ui.js" type="text/javascript"></script>
        <script src="https://live.ipms247.com/themes/reservation/js/bookingbtn/common.js" type="text/javascript"></script>
        <script src="https://live.ipms247.com/themes/reservation/js/bookingbtn/resui_resbookingbox.js" type="text/javascript"></script>
        <form name="_resBBBox" action="https://live.ipms247.com/booking/book-rooms-emiratessportshotelapartments" target="_blank" method="post">
            <div class="bb_resbox" id="bb_resBookingBox">
            </div>
        </form>

        <script>
            jQuery("#bb_resBookingBox").bb_resBookingBox({  
            btnContainer: "bb_resBookingBox", 
            headerColor: "#ffffff",  
            bodyColor: "#ffffff",  
            showborder: true,
            BorderColor: "#868691",
            BorderWidth: 2,
            BorderType: "thick",
            FontFamily: "Arial, Helvetica, sans-serif",
            BodyLanguage:"en", 
            FontSize: "12",
            TextColor: "#000000",
            InputBorderColor: "#000000",
            InputbackColor: "#FFFFFF",
            InputTextColor: "#000000",
            ButnBackColor: "#c89600",
            ButnBorderColor: "#c89600",
            ButnTextColor: "#ffffff",
            HeaderTextColor: "#868691",
            HeaderFontSize: "15",
            ShowHeader: "1",
            boxwidth: "100",
            boxwidthtype: "TYPE_PER",
            ShowInlineCSS: "1",
            type: "htype",
            acr:false, 
            ShowChild:true, 
            rooms:false, 
            promotion:false, 
            defaultadult:10, 
            defaultchild:10, 
            defaultroom:16, 
            ShowNights:false, 
            Nonights:15, 
            HTextCaption: "Book Your Stay",
            BtnTextCaption: "Book Now",
            LblPromoCaption: "",
            LblChkOutCaption: "Check Out",
            Calinit: true,
            CalShowOn: "both",
            CalDefaultDt: "+0w",
            CalChangeMonth: true,
            CalMinDate: "0",
            CalMaxDate: "",
            CalDtFormat: "dd-mm-yy",
            CalCutoffDays: "1",
            CalImage: "1px -346px",
            CalBackColor: "#ffffff",
            CalHeaderColor: "#c89600",
            CalCellActiveColor: "#101414",
            CalCellInActiveColor: "#d6a345",
            LblArrivalCaption: "Check In",
            LblNightsCaption: "Nights",
            LblAdultsCaption: "Adult",
            LblChildsCaption: "Kids",
            LblRoomsCaption: "Rooms",
            LblPerRoomCaption: "Per Room",
            HotelId: "emiratessportshotelapartments"
            });  
        </script>
        <h1>EMIRATES SPORTS HOTEL Apartments,  <br />Dubai Sports City</h1>
        <h1 class="description">A community driven <br />one-stop lifestyle destination  <br />where people and sports connect as one.</h1>
        <a href="#block2"><img src="/wp-content/themes/theme/assets/img/arrow.webp"/></a>
    </div>

    <div class="block2" id="block2">
        <video autoplay muted style="width: 100vw"><source src="https://fr-esh.ru/wp-content/uploads/2023/03/ESH_HD_Instagram.mp4"></video>
    </div>

<style>
	.slider1 .slick-prev, .slider1 .slick-next {
		display: none !important;
	}
	
</style>

    <div class="block3">
		<div class="slider1">
			<div><img style="max-height: 40vw" src="/wp-content/themes/theme/assets/img/img1.webp" /></div>
			<div><img style="max-height: 40vw" src="/wp-content/themes/theme/assets/img/img2.webp" /></div>
			<div><img style="max-height: 40vw" src="/wp-content/themes/theme/assets/img/img3.webp" /></div>
			<div><img style="max-height: 40vw" src="/wp-content/themes/theme/assets/img/img4.webp" /></div>
			<div><img style="max-height: 40vw" src="/wp-content/themes/theme/assets/img/img5.webp" /></div>
			<div><img style="max-height: 40vw" src="/wp-content/themes/theme/assets/img/img6.webp" /></div>
       </div>
        <div class="text">
            <h1>ABOUT</h1>
            <p>
                <b>Emirates Sports Hotel Apartments</b>

                is designed according to the modern minimalistic art movement to ensure an enjoyable and relaxing stay for all guests. Get ready to feel at home, with the added benefits of hotel services and a variety of sporting facilities at your doorstep.
            </p>
            <h3>Our company goals are:</h3>
            <ul>
                <li>to provide spacious accommodation at a convenient location;</li>
                <li>to provide access to various sport facilities;</li>
                <li>to support and create a healthy lifestyle community;</li>
                <li>to enhance and improve performance training;</li>
                <li>to produce good quality food at an affordable price in our multiple food and beverage outlets.</li>
            </ul>
        </div>
    </div>

    <div class="block5">
        <div class="block4 reverse">
            <img class="img-mobile" src="/wp-content/themes/theme/assets/img/block4-mobile.jpg" />
            <div>
                <h1>SPORT AS AN ARTFORM</h1>
                <p>
                    <b>Emirates Sports Hotel Apartments</b> is the first ever sport-oriented hotel in the Middle East. We believe that sport is a form of art. Art that unifies people and manifests life. Here at Emirates Sports, we explore the human aspect of that connection between art and sport.
                </p>
                <p>
                    Each floor is represented by a different sport, to demonstrate the multi-cultural variety that is present in the United Arab Emirates.
                </p>
                <div class="cards">
                    <div>
                        <img src="/wp-content/themes/theme/assets/img/basketball.webp" />
                        <p>BASKETBALL</p>
                    </div>
                    <div>
                        <img src="/wp-content/themes/theme/assets/img/cricket.webp" />
                        <p>CRICKET</p>
                    </div>
                    <div>
                        <img src="/wp-content/themes/theme/assets/img/football.webp" />
                        <p>FOOTBALL</p>
                    </div>
                    <div>
                        <img src="/wp-content/themes/theme/assets/img/wintersports.webp" />
                        <p>WINTER SPORTS</p>
                    </div>
                    <div>
                        <img src="/wp-content/themes/theme/assets/img/hockey.webp" />
                        <p>HOCKEY</p>
                    </div>
                    <div>
                        <img src="/wp-content/themes/theme/assets/img/swimming.webp" />
                        <p>SWIMMING</p>
                    </div>
                    <div>
                        <img src="/wp-content/themes/theme/assets/img/watersports.webp" />
                        <p>
                            BEACH & WATER
                            SPORTS
                        </p>
                    </div>
                    <div>
                        <img src="/wp-content/themes/theme/assets/img/heritagesports.webp" />
                        <p>
                            HERITAGE SPORTS
                        </p>
                    </div>
                    <div>
                        <img src="/wp-content/themes/theme/assets/img/athletics.webp" />
                        <p>ATHLETICS</p>
                    </div>
                    <div>
                        <img src="/wp-content/themes/theme/assets/img/gymnastics.webp" />
                        <p>GYMNASTICS</p>
                    </div>
                    <div>
                        <img src="/wp-content/themes/theme/assets/img/golf.webp" />
                        <p>GOLF</p>
                    </div>
                    <div>
                        <img src="/wp-content/themes/theme/assets/img/tennis.webp" />
                        <p>TENNIS</p>
                    </div>
                    <div>
                        <img src="/wp-content/themes/theme/assets/img/cycling.webp" />
                        <p>CYCLING</p>
                    </div>
                    <div>
                        <img src="/wp-content/themes/theme/assets/img/motor.webp" />
                        <p>
                            MOTOR SPORTS
                        </p>
                    </div>
                    <div>
                        <img src="/wp-content/themes/theme/assets/img/fitness.webp" />
                        <p>FITNESS</p>
                    </div>
                    <div>
                        <img src="/wp-content/themes/theme/assets/img/combat.webp" />
                        <p>
                            COMBAT SPORTS
                        </p>
                    </div>
                    <div>
                        <img src="/wp-content/themes/theme/assets/img/esports.webp" />
                        <p>
                            E-SPORTS
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="block5">
            <div class="div1">
				<img src="/wp-content/themes/theme/assets/img/block5-1.webp">
                <div>
                    <h1>HOTEL FEATURES:</h1>
                    <ul>
                        <li>
                            200 ultra-modern units: 144 spacious Hotel Studious and 56 high-end Hotel Apartments
                        </li>
                        <li>Property size: 55-105 SQM</li>
                        <li>Large living room, fully-equipped kitchen and en-suite bathrooms</li>
                        <li>Full-length panoramic windows</li>
                        <li>Co-living accommodation with co-working spaces</li>
                        <li>Pet friendly zone (Pets allowed)</li>
                    </ul>
                </div>
            </div>
            <div class="reverse div2">
				<img src="/wp-content/themes/theme/assets/img/block5-2.webp">
                <div>
                    <h1>ALL INCLUSIVE SERVICES:</h1>
                    <ul>
                        <li>All bills included: electricity, water, Internet and TV services</li>
                        <li>Free Parking area</li>
                        <li>24/7 Top Security system</li>
                        <li>Weekly housekeeping</li>
                        <li>In-door laundry and dry-cleaning services</li>
                        <li>Regular maintenance service</li>
                    </ul>
                </div>
            </div>
            <div class="div3">
				<img src="/wp-content/themes/theme/assets/img/block5-3.webp">
                <div>
                    <h1>ACTIVITIES:</h1>
                    <h3>Unlimited access to the best Sports Facilities in Dubai Sports City:</h3>
                    <ul><li>Emirates Sports Outdoor Gym 24/7</li></ul>
                    <h3>Guests Activities</h3>
                    <ul>
                        <li>Weekly Football games at ISD Football pitches</li>
                        <li>Sunday Barbecue gatherings on the TERRACE</li>
                        <li>FREE morning warm-ups for all guests on the DECK</li>
                        <li>Entertainment and sport-related programs for children for all ages</li>
                    </ul>
                </div>
            </div>
            <div class="reverse div4">
                <img class="image4" src="/wp-content/themes/theme/assets/img/block5-4.webp" />
                <div>
                    <h1>DINING EXPERIENCES:</h1>
                    <ul>
                        <li>All-day CAFE with outdoor TERRACE</li>
                        <li>Sports themed MEETING ROOM and BAR</li>
                        <li>RESTAURANT with an open-air event space and Shisha lounge on the DECK</li>
                        <li>Over 500 people FAN ZONE with food and drinks</li>
                    </ul>
                </div>
            </div>
        </div>

        <style>
            .slider {
              position: relative;
              width: 100%;
              margin: 0 auto;
            }

            .slick-slide {
                height: auto;
            }

            .slider img {
              width: 100%;
              height: fit-content;
            }

            .prev::before,
            .next::before {
              content: "";
              display: inline-block;
              width: 10px;
              height: 10px;
              border-top: 2px solid black;
              border-right: 2px solid black;
              transform: rotate(-45deg);
            }

            .prev.disabled::before,
            .next.disabled::before {
              opacity: .5;
            }

            .slick-prev,
            .slick-next {
              position: absolute;
              top: calc(50% - 5px);
              z-index: 1;
              display: block;
              width: 50px;
              height: 50px;
              font-size: 0;
              background-color: transparent;
              border: none;
              cursor: pointer;
              color: #fff;
            }

            .slick-prev {
              left: 20px;
              background-image: url("https://www.flaticon.com/free-icon-font/angle-left_3916894");
              background-repeat: no-repeat;
              background-position: center;
            }

            .slick-next {
              right: 20px;
              background-image: url("https://www.flaticon.com/free-icon-font/angle-right_3916889");
              background-repeat: no-repeat;
              background-position: center;
}

            .slick-dots {
              position: absolute;
              bottom: 0;
              left: 0;
              right: 0;
              margin: 0;
              padding: 0;
              text-align: center;
              list-style: none;
            }

            .slick-dots li {
              display: inline-block;
              margin: 0 5px;
              padding: 0;
            }

            .slick-dots li button {
              display: block;
              width: 10px;
              height: 10px;
              padding: 0;
              border: none;
              outline: none;
              border-radius: 50%;
              background-color: #fff;
              text-indent: -99999px;
              cursor: pointer;
            }

            .slick-dots li button:hover,
            .slick-dots li button:focus {
              outline: none;
            }

            .slick-dots li.slick-active button {
              background-color: #0077be;
            }
        </style>

<style>
            .slider1 {
              position: relative;
              width: 100%;
              margin: 0 auto;
            }

            .slick-slide {
                height: auto;
            }

            .slider1 img {
              width: 100%;
              height: fit-content;
            }

            .prev::before,
            .next::before {
              content: "";
              display: inline-block;
              width: 10px;
              height: 10px;
              border-top: 2px solid black;
              border-right: 2px solid black;
              transform: rotate(-45deg);
            }

            .prev.disabled::before,
            .next.disabled::before {
              opacity: .5;
            }

            .slick-prev,
            .slick-next {
              position: absolute;
              top: calc(50% - 5px);
              z-index: 1;
              display: block;
              width: 50px;
              height: 50px;
              font-size: 0;
              background-color: transparent;
              border: none;
              cursor: pointer;
              color: #fff;
            }

            .slick-prev {
              left: 20px;
              background-image: url("https://www.flaticon.com/free-icon-font/angle-left_3916894");
              background-repeat: no-repeat;
              background-position: center;
            }

            .slick-next {
              right: 20px;
              background-image: url("https://www.flaticon.com/free-icon-font/angle-right_3916889");
              background-repeat: no-repeat;
              background-position: center;
}

            .slick-dots {
              position: absolute;
              bottom: 0;
              left: 0;
              right: 0;
              margin: 0;
              padding: 0;
              text-align: center;
              list-style: none;
            }

            .slick-dots li {
              display: inline-block;
              margin: 0 5px;
              padding: 0;
            }

            .slick-dots li button {
              display: block;
              width: 10px;
              height: 10px;
              padding: 0;
              border: none;
              outline: none;
              border-radius: 50%;
              background-color: #fff;
              text-indent: -99999px;
              cursor: pointer;
            }

            .slick-dots li button:hover,
            .slick-dots li button:focus {
              outline: none;
            }

            .slick-dots li.slick-active button {
              background-color: #0077be;
            }
        </style>


        <div class="block6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3614.8890459744293!2d55.2239633!3d25.0378392!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6f92f59b04fd%3A0x7f7db2713f118f78!2sEmirates%20Sports%20Hotel%20Apartments!5e0!3m2!1sen!2sde!4v1679364471841!5m2!1sen!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div>
                <h1>PERFECT LOCATION:</h1>
                <ul>
                    <li>15 min to the Beach</li>
                    <li>20 min to Atlantis, The Palm</li>
                    <li>25 min to Burj Khalifa, Downtown</li>
                    <li>30 min to the DXB airport</li>
                </ul>
                <h3>Local infrastructure:</h3>
                <ul>
                    <li>3 min to the Renaissance School (Primary and Secondary School in the area)</li>
                    <li>5 min walk to the Pharmacy</li>
                    <li>5 min to Waitrose</li>
                    <li>0 min walk to childrens’ playgrounds in the area</li>
                    <li>10 min drive to Carrefour in Me’aisem City Centre in Studio City;</li>
                </ul>
                <button><a href="/localattractions/">EXPLORE LOCAL LOCATIONS</a></button>
            </div>
        </div>

       <div class="slider">
            <div><img src="/wp-content/themes/theme/assets/img/slider1.webp"></div>
            <div><img src="/wp-content/themes/theme/assets/img/slider2.webp"></div>
            <div><img src="/wp-content/themes/theme/assets/img/slider3.webp"></div>
            <div><img src="/wp-content/themes/theme/assets/img/slider4.webp"></div>
            <div><img src="/wp-content/themes/theme/assets/img/slider5.webp"></div>
       </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.slider').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>'
      });
    });
	  
	  $(document).ready(function(){
      $('.slider1').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>'
      });
    });
	  
	$('.slider1').slick({
	  autoplay: true,
	  autoplaySpeed: 1500,
	  lazyLoad: false
	});
  </script>

    <div class="block8">
        <div>
            <h1>We are surrounded by a number of modern and high-tech SPORTS FACILITIES:</h1>
            <ul>
                <li>FitRepublik – the largest Fitness Center in Dubai</li>
                <li>Sports park with a Rugby field</li>
                <li>Cricket Academy</li>
                <li>Full-size outdoor and indoor Football fields, approved by FIFA</li>
                <li>Running track: 400 meters</li>
                <li>Olympic-size Swimming Pool</li>
                <li>Gymnastics Hall</li>
                <li>Tennis courts (indoor and outdoor)</li>
                <li>Soccer schools and training fields</li>
                <li>ISD Padel</li>
                <li>Els Golf Club</li>
                <li>Dubai International Cricket Stadium, capacity: 25 000</li>
            </ul>
        </div>
        <img src="/wp-content/themes/theme/assets/img/block8.webp" />
    </div>

	<style>
		@media(min-width: 1600px) {
		.reviews, .block9 {
			padding-left: 22%;
			padding-right: 22%;
		}

			.reviews > .container > div {
				width: 20%;
		}
		.reviews > .container > div {
				width: 20%;
		}
		.reviews > div > button {
			margin-top: 4em;
		}
	}
	
	@media(min-width: 800px) and (max-width: 1600px) {
		.reviews, .block9 {
                padding-left: 18em;
				padding-right: 18em;
            }
		.reviews > .container > div {
				width: 20%;
		}
		.reviews > .container > div {
				width: 20%;
		}
		.reviews > div > button {
			margin-top: 4em;
		}
	}
		

        @media(max-width: 800px) {
			
			.reviews, .block9 {
				padding-left: 5%;
				padding-right: 5%;
			}
			
			.reviews > .container > div {
				width: 100%;
			}
			
			.reviews > .container {
				flex-wrap: wrap;
			}
			.reviews > div > button {
				margin-top: 1em;
			}

        }

		.reviews > h1 {
			font-size: 26px;
		}
		
		.reviews {
			padding-top: 1.5em;
		}
		
		.reviews > .container {
			display: flex;
			width: 100%;
			grid-gap: 0.8em;
			margin-top: 1em;
		}
		
		.reviews > .container > div {
				border: 2px solid #cecece;
				border-radius: 10px;
				padding-left: 1.2em;
				padding-right: 1.2em;
				text-align: center;
				display: grid;
				place-items: center;
		}
		
		.reviews > .container > div > div {
			vertical-align: center;
		}

	</style>

	<div class="reviews">
		<h1 style="margin-bottom: 0">LAST REVIEWS:</h1>
		<div style="display: flex; align-items: center !important; margin-top: 0; align-items: center;"><h1 style="margin-top: 0.1em">4.8 </h1> <h1 style="color: #c89600; margin-left: 0.2em; margin-top: 0.1em"> ★★★★★</h1></div>
		<div class="container">
			<div>
				<img style="height: 9em; margin-top: 1em" src="/wp-content/uploads/2023/03/1.webp">
				<h3 style="color: #c89600; font-weight: bold; font-size: 20px; margin-top: 10px; margin-bottom: 10px">Landry</h3>
				<p>thx for the welcoming, we spent a very good time in the Emirate Sport Hotel. Special mention to Asif the hotel agent and Daria ! 5</p>
				<div style="display: flex; justify-content: center; align-items: center;"><p style="color: #c89600; margin-top: 0; font-size: 20px"> ★★★★★</p><p style="margin-top: 0.1em; font-weight: bold; padding-left: 0.2em; font-size: 20px">5.0</p> </div>
			</div>
			
			<div>
				<img style="height: 9em; margin-top: 1em" src="/wp-content/uploads/2023/03/3.webp">
				<h3 style="color: #c89600; font-weight: bold; font-size: 20px; margin-top: 10px; margin-bottom: 10px">Mujeeb</h3>
				<p>awesome place to stay. nice and clean well maintained place. the team is very helpful to accommodate our request. Thank you.</p>
				<div style="display: flex; justify-content: center; align-items: center;"><p style="color: #c89600; margin-top: 0; font-size: 20px"> ★★★★★</p><p style="margin-top: 0.1em; font-weight: bold; padding-left: 0.2em; font-size: 20px">5.0</p> </div>
			</div>
			
			<div>
				<img style="height: 9em; margin-top: 1em" src="/wp-content/uploads/2023/03/2.webp">
				<h3 style="color: #c89600; font-weight: bold; font-size: 20px; margin-top: 10px; margin-bottom: 10px">Saurabh</h3>
				<p>lovely apartment in the Dubai Sports City. Supermarkets and Restaurants in the vicinity. Very spacious and comfortable. Made our trip to Dubai so much more enjoyable.</p>
				<div style="display: flex; justify-content: center; align-items: center;"><p style="color: #c89600; margin-top: 0; font-size: 20px"> ★★★★★</p><p style="margin-top: 0.1em; font-weight: bold; padding-left: 0.2em; font-size: 20px">5.0</p> </div>
			</div>
			
			<div>
				<img style="height: 9em; margin-top: 1em" src="/wp-content/uploads/2023/03/4.webp">
				<h3 style="color: #c89600; font-weight: bold; font-size: 20px; margin-top: 10px; margin-bottom: 10px">Jusmine</h3>
				<p>​It was nice I spent 5 days, it feels like home and the people were very nice. Thank you, I recommend it 100 🥰</p>
				<div style="display: flex; justify-content: center; align-items: center;"><p style="color: #c89600; margin-top: 0; font-size: 20px"> ★★★★★</p><p style="margin-top: 0.1em; font-weight: bold; padding-left: 0.2em; font-size: 20px">5.0</p> </div>
			</div>
		</div>
		<div style="width: 100%; display: flex; justify-content: center">
			<button><a href="">MORE REVIEWS</a></button>
		</div>
	</div>

    <div class="block9">
        <h1>WITH THE SUPPORT OF: </h1>
        <div>
            <img src="/wp-content/themes/theme/assets/img/support1.webp" />
            <img src="/wp-content/themes/theme/assets/img/support2.webp" />
            <img src="/wp-content/themes/theme/assets/img/support3.webp" />
            <img src="/wp-content/themes/theme/assets/img/support4.webp" />
            <img src="/wp-content/themes/theme/assets/img/support6.webp" />
            <img src="/wp-content/themes/theme/assets/img/support5.webp" />
        </div>
    </div>

<?php get_footer(); ?>