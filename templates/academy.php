<?php
/*
Template Name: Academy
*/
?>

<?php get_header(); ?>

    <style>
		.div > div {
            display: flex;
            align-items: center;
            margin-bottom: 0.8em;
            margin-bottom: 0.8em;
        }

        .div > div > p {
                margin-bottom: 0;
                margin-top: 0;
        }

        .div > div > img {
                height: 1.8em;
                margin-right: 0.8em;
        }
        .page4-block1 {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: url(/wp-content/themes/theme/assets/img/page4-bg.webp);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding-top: 1em;
        }

            .page4-block1 > div {
                padding: 1em 4em 2em 4em;
                margin-top: 1em;
                background: #003865;
                opacity: 74%;
                color: white;
                box-sizing: border-box;
                margin-bottom: 4em;
            }

                .page4-block1 > div > h1 {
                    font-size: 24px;
                    line-height: 29px;
                    font-weight: bold;
                    font-family: 'gotham', 'Montserrat', sans-serif;
                }

                .page4-block1 > div > p {
                    font-size: 16px;
                    line-height: 22.4px;
                    font-weight: bold;
                    font-family: 'gotham', 'Montserrat', sans-serif;
                }

            .page4-block1 > img {
                max-height: 10em;
                margin-top: 2em;
                margin-bottom: 1.7em;
            }

        ul > li::before {
            content: "\2022";
            color: white;
            font-weight: bold;
            display: inline-block;
            width: 1em;
        }

        .block5 > div > div {
            color: white;
            background: #0078be;
        }

        .page4-block2 > .div1 {
            background: #0078be;
            color: white;
        }

        .page4-block2 > .div2 {
            background: #00a0e6;
            color: white;
        }

        .page4-block2 > .div3 {
            background: #46bef0;
            color: white;
        }

        .page4-block2 > h1 {
            font-family: 'gotham', 'Montserrat', sans-serif;
            font-weight: bolder;
            font-size: 22px;
            line-height: 33px;
        }

        .page4-block2 > ul > li {
            font-family: 'gotham', 'Montserrat', sans-serif;
            font-size: 15px;
            line-height: 15px;
            font-weight: bold;
        }



        .page4-block3 > div > div > div {
            display: flex;
            flex-direction: row;
            grid-gap: 0.8em;
            flex-wrap: wrap;
            margin-top: 1em;
        }

        .page4-block3 > div > div {
            background: url(/wp-content/themes/theme/assets/img/page4-10.webp);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

            .page4-block3 > div > div > div > div {
                display: flex;
                flex-direction: column;
                width: 9em;
                background: white;
                color: black;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
                box-sizing: border-box;
                padding-left: 1em;
                padding-right: 1em;
            }

                .page4-block3 > div > div > div > div > p {
                    font-family: 'gotham', 'Montserrat', sans-serif;
                    font-weight: bolder;
                    font-size: 13px;
                }

                .page4-block3 > div > div > div > div > img {
                    width: 3em;
                    padding-top: 1em;
                }

        .buttons {
            padding-top: 3em;
            padding-bottom: 3em;
            background: #0078be;
            width: 100%;
            display: flex;
            flex-direction: column;
            grid-gap: 1.5em;
            align-items: center;
            justify-content: center;
        }

            .buttons > button {
                color: white;
                background: #0078be;
                border: 2px solid white;
                font-size:;
                font-family:;
                transition: 0.5s;
            }

        button > a {
            color: white;
        }

        .buttons > button:hover {
            background: black;
            border: 2px solid white;
        }

        .trainers-list {
            display: flex;
        }

        .trainers {
            background: #0078be;
            color: white;
        }

        .trainers-list {
            font-family: 'gotham', 'Montserrat', sans-serif;
            font-weight: bold;
        }
		
		
		.trainers-list > div > h3 {
			padding-top: 0.5em;
		}

            .trainers-list > div > h3 > a {
                font-size: 24px;
                text-decoration: underline;
                color: white;
 
            }

            .trainers-list > div > p {
                font-size: 16px;
				padding-top: 0.8em;
				padding-bottom: 0.6em;
            }

		@media(min-width: 1600px) {
			.trainers-list > div {
                    width: 21%;
					display: flex;
					flex-direction: column;
                }
		}
            


            @media(min-width: 800px) {
				.trainers-list > div > h3, .trainers-list > div > p {
			background: #46bef0;
			box-sizing: border-box;
			margin: 0;
		}
				
				.trainers > .heading {
					max-width: 45%;
				}
				.trainers-list {
					max-width: 100vw;
				}
				.trainers-list > div:lastchild > h3 {
					padding-right: 8em;
				}
				.block3 {
					margin-bottom: -480px;
				}
				
                .trainers > .heading {
                	padding: 2em 32em 0 6em;
                 }
				
				.block3 > div {
					margin-bottom: 0;
					padding-bottom: 1em;
				}

            .page4-block1 {
                margin-top: 60px;
            }
    

                .trainers > div > div > h3, .trainers > div > div > p {
                    padding-left: 50px;
                }

           .buttons > button {
                width: 30%;
            }

            .page4-block1 > div {
                width: 65%;
            }

            .block5 > div > div {
                padding-left: 6em;
                padding-right: 9em;
            }

            .page4-block2 {
                display: flex;
            }

                .page4-block2 > div {
                    padding: 1em 2em 1em 5.5em;
                    width: 33.3%;
                }

            .page4-block3 > div > div {
                display: flex;
                justify-content: center;
            }
				.h3-margin {
				padding-bottom: 1em;
			}
        }

        @media(max-width: 800px) {

	 .page4-block1 {
                margin-top: 100px;
            }

            .heading {
                padding: 1em;
            }

            .trainers-list {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
                .trainers-list > div {
                    width: 100%;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    padding-bottom: 1em;
                    text-align: center;
                }

                    .trainers-list > div > h3 {
                        margin-bottom: 0;
                    }

                    .trainers-list > div > p {
                        margin-top: 0;
                    }

                    .buttons > button {
                        width: 100%;
                    }

            .page4-block2 > div {
                padding: 1em 2em 1em 2em;
                max-width: 100vw;
            }

            .page4-block3 > div > div {
                padding-bottom: 3em;
            }

            .block5 > div {
                margin: 0;
                width: 100vw;
            }

                .block5 > div > div {
                    margin: 0;
                    width: 100vw;
                }

            .page4-block3 > div > div > div {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
                grid-gap: 2em;
                margin-top: 1em;
            }

            .buttons > button {
                width: 95%;
            }
			.block3 > div {
				padding-left: 1em;
				padding-right: 1em;
			}
        }
		
	@media(min-width: 800px) and (max-width: 1300px) {
		.block3 > div {
			bottom: 39vw;
			left: 60vw;
		}
	}
	
	@media(min-width: 1300px) and (max-width: 1400px) {
		.block3 > div {
			bottom: 500px;
			left: 60vw;
		}
	}
	
	@media(min-width: 1400px) and (max-width: 1600px) {
		.block3 > div {
			bottom: 540px;
			left: 65vw;
		}
	}
	
	@media(min-width: 1600px) and (max-width: 1800px) {
		.block3 > div {
			bottom: 590px;
			left: 70vw;
		}
	}
	
	@media(min-width: 1800px) and (max-width: 2000px) {
		.block3 > div {
			bottom: 670px;
			left: 70vw;
		}
	}
	
	@media(min-width: 2000px)  {
		.block3 > div {
			bottom: 700px;
			left: 70vw;
		}
	}
		
		.block3 > div {
			position: relative;
		}
    </style>

    <div class="page4-block1">
        <img src="/wp-content/themes/theme/assets/img/page4-1.webp" />
        <div>
            <h1>The Al Ain Academy is the first-ever professional Ice Hockey Academy in the Middle East.</h1>
            <p>United Arab Emirates is an extremely safe place to live, ranking third after Qatar and Taiwan. UAE is home to almost every existing nationality, spanning entire continents. Each culture contributes to the life and energy of this country and region.</p>
            <p>
                There is the largest mall in the world,
                the tallest skyscraper in the world,
                the biggest flower garden in the world,
                the largest artificial harbour in the world and much more in the Emirates.
            </p>
            <p>Everything is always expanding in the country and you are encouraged to create and grow around it. Hospitality is the cornerstone of the culture, and all are welcome here.</p>
        </div>
    </div>

<style>
	@media(min-width: 800px) {
		.block5 > div > img {
			display: none;
		}
		.block5 > div > div {
			padding-top: 1.5em;
			padding-bottom: 1.5em;
			box-sizing: border-box;
		}
		.div1 {
			background: url("/wp-content/themes/theme/assets/img/page4-2.webp");
			background-repeat: no-repeat;
		}
		
		.div1 > div, .div3 > div, .div5 > div {
			margin-left: 50%;
		}
		
		.div2, .div4, .div6 {
			background-position: right !important;
		}
		
		.div2 {
			background: url("/wp-content/themes/theme/assets/img/page4-3.webp");
			background-repeat: no-repeat;
		}
		
		.div3 {
			background: url("/wp-content/themes/theme/assets/img/page4-4.webp");
			background-repeat: no-repeat;
		}
		
		.div4 {
			background: url("/wp-content/themes/theme/assets/img/page4-5.webp");
			background-repeat: no-repeat;
		}
		
		.div5 {
			background: url("/wp-content/themes/theme/assets/img/page4-6.webp");
			background-repeat: no-repeat;
		}
		
		.div6 {
			background: url("/wp-content/themes/theme/assets/img/page4-7.webp");
			background-repeat: no-repeat;
		}	
	}
	
	@media(min-width: 800px) and (max-width: 1600px) {
		.block5 > div {
			background-size: 50% auto;
			box-sizing: border-box;
		}
	}
	@media(min-width: 1600px) {
		.block5 > div {
			background-size: 50%;
		}
	}
</style>

    <div class="block5">
        <div class="div1">
            <img src="/wp-content/themes/theme/assets/img/page4-2.webp" />
            <div>
                <h1>OUR OWN HIGH-LEVEL TRAINING SYSTEM:</h1>
                <ul>
                    <li>physical training;</li>
                    <li>technical training;</li>
                    <li>tactical training;</li>
                    <li>theoretical training;</li>
                    <li>psychological preparation.</li>
                </ul>
            </div>
        </div>

        <div class="reverse div2">
            <img src="/wp-content/themes/theme/assets/img/page4-3.webp" />
            <div>
                <h1>DAILY PLAYER ANALYTICS</h1>
                <p>The development of new technologies establishes new methods for collecting and analysing data. This leads to a deeper and more efficient evaluation of a player. Hockey analytics is one of the main keys to players’ accelerated development. The accumulation of the data allows the teaching staff to determine what training works and which does not; what strengths and weaknesses a player possesses and how they can be improved; what are the current technological trends that can be implemented to increase performance. All of the above information allows coaches to train players in the most effective and productive way.</p>
            </div>
        </div>

        <div class="div3">
            <img src="/wp-content/themes/theme/assets/img/page4-4.webp" />
            <div>
                <h1>INDIVIDUAL AND TEAM SKILLS</h1>
                <p>The academy goal is to teach players all the tricks and passes of the puck. To practice their shots at different speeds, as well asin a limited amount of space. They must be able to intercept the puck; carry out group and team tactical actions in attack and defence positions in each ice zone; in addition to creating numerical superiority in a limited area of the site.</p>
            </div>
        </div>

        <div class="reverse div4">
            <img src="/wp-content/themes/theme/assets/img/page4-5.webp" />
            <div>
                <h1>FORMING THE RIGHT HABITS</h1>
                <p><b>SUCH AS PROPER NUTRITION, REST AND RELAXATION CULTURE; IN ADDITION TO BUILDING TEAM WORK AND CREATING LONG-TERM CONNECTIONS.</b></p>
                <p>Every hockey player is already required to follow the professional rules of conduct on the ice, as well as off the ice.</p>
            </div>
        </div>

        <div class="div5">
            <img src="/wp-content/themes/theme/assets/img/page4-6.webp" />
            <div>
                <h1>PSYCHOLOGICAL AND MENTAL PREPARATION OF A PLAYER</h1>
                <ul>
                    <li>assessment of a player's personal characteristics - his character, temperament, personality, interests, level of hockey ambitions, etc.;</li>
                    <li>social aspects of the individual and the team - the psychological climate in the sports team, the formation of interpersonal relationships;</li>
                    <li>assessment of the player's maximum capabilities;</li>
                    <li>assessment of the mental state of the player and its modulation;</li>
                    <li>the means of achieving maximum or optimal mental performance of the player;</li>
                    <li>reasons for using a particular form of rehab after an intense training session; important tournaments and a difficult sports season</li>
                </ul>
            </div>
        </div>

        <div class="reverse div6">
            <img src="/wp-content/themes/theme/assets/img/page4-7.webp" />
            <div>
                <h1>FULL GAME SEASON OF AT LEAST 50 GAMES (EIHL, AS WELL AS 3-5 ANNUAL INTERNATIONAL PRO TOURNAMENTS)</h1>
                <p>The games may be attended by scouts from the leading hockey countries. AlAin Academy has its own AS (a licensed European sports agency), which can contribute to the employment of academy graduates in clubs of North America and Europe in the future. This opportunity gives the athletes additional motivation and a great chance to get into one of the leading clubs in the world upon completion of the academy.</p>
                <p>Our comfortable accommodation, shooting centre, gym, special sports nutrition and English teaching programs are perfectly adjusted to the needs of our young talents. The same applies for our recreational room, round-the-clock medical care and modern gaming diagnostics.</p>
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
		
		@media(min-width: 800px) {
			.slider img {
				height: 40vw;
			}
		}
    </style>

    <div class="slider">
            <div><img src="/wp-content/themes/theme/assets/img/slider3-1.webp"></div>
            <div><img src="/wp-content/themes/theme/assets/img/slider3-2.webp"></div>
            <div><img src="/wp-content/themes/theme/assets/img/slider3-3.webp"></div>
    </div>

    <div class="block3">
            <div class="div">
                <h3>BESIDES DAY-TO-DAY ON-ICE TRAININGS, ACADEMY’S PROGRAMME INCLUDES:</h3>
                <div><img src="/wp-content/themes/theme/assets/img/slider-icon1.webp"><p>Shooting area</p></div>
                <div><img src="/wp-content/themes/theme/assets/img/slider-icon2.webp"><p>Gym / training area</p></div>
                <div><img src="/wp-content/themes/theme/assets/img/slider-icon3.webp"><p>Swimming activities</p></div>
                <div><img src="/wp-content/themes/theme/assets/img/slider-icon4.webp"><p>Personal on-ice trainings (as an additional service)</p></div>
                <div><img src="/wp-content/themes/theme/assets/img/slider-icon5.webp"><p>Watching and analysing NHL, KHL, European Leagues' games together</p></div>
                <div><img src="/wp-content/themes/theme/assets/img/slider-icon6.webp"><p>By-weekly team activities outside the arena</p></div>
                <div><img src="/wp-content/themes/theme/assets/img/slider-icon7.webp"><p>On-ice and off-ice tests in order to track player progress</p></div>
            </div>
    </div>

    <div class="page4-block2">
        <div class="div1">
            <h1>ACCOMMODATION</h1>
            <ul>
                <li>Hotel / apartment</li>
                <li>Cleaning services</li>
                <li>Laundry services</li>
                <li>High speed Wi-Fi</li>
            </ul>
        </div>
        <div class="div2">
            <h1>FOOD</h1>
            <ul>
                <li>3-4 meals a day, with the option of snacks</li>
                <li>Away games meals</li>
            </ul>
        </div>
        <div class="div3">
            <h1>WHAT DOES THE ACADEMY PROVIDE?</h1>
            <ul>
                <li>On and off-ice training clothes</li>
                <li>Game jerseys and socks</li>
                <li>Training equipment</li>
            </ul>
        </div>
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
  </script>

<style>
	.page4-block3 > div {
		background: url("/wp-content/themes/theme/assets/img/page4-9.webp");
		background-repeat: no-repeat;
		background-size: 50% 100%;
		background-position: right;
	}
	@media(min-width: 800px) and (max-width: 1600px) {
		.page4-block3 > div > div > div {
			width: 90%;
		}
	}
	@media (min-width: 1600px) {
		.page4-block3 > div > div > div {
		width: 70%;
	}
	}
	.page4-block3 > div > div > div {
		padding-bottom: 2.5em;
	}
</style>

    <div class="page4-block3 block5">
        <div class="reverse">
            <img src="/wp-content/themes/theme/assets/img/page4-9.webp" />
            <div>
                <h1>SUPPORT</h1>
                <div>
                    <div><img src="/wp-content/themes/theme/assets/img/page4-icon1.webp" /><p>TRANSPORTATION</p></div>
                    <div><img src="/wp-content/themes/theme/assets/img/page4-icon2.webp" /><p>EQUIPMENT MANAGER</p></div>
                    <div><img src="/wp-content/themes/theme/assets/img/page4-icon3.webp" /><p>SKATE SHARPENING</p></div>
                    <div><img src="/wp-content/themes/theme/assets/img/page4-icon4.webp" /><p>EDUCATION</p></div>
                    <div><img src="/wp-content/themes/theme/assets/img/page4-icon5.webp" /><p>MEDICAL CARE 24/7</p></div>
                    <div><img src="/wp-content/themes/theme/assets/img/page4-icon6.webp" /><p>UAE VISA</p></div>
                </div>
            </div>
        </div>

    </div>

    <div class="trainers">
        <div class="heading">
            <h1>COACHING STAFF</h1>
            <p>Our teaching staff at the Academy is fully international and all coaches speak a variety of different languages. They have all taken part in international hockey tournaments, world championships and the Olympic Games. The Academies’ coaches have professional contacts all over the world, in all major hockey cities, and know and have worked with the leading players of the past and present generation.</p>
            <p>The academy is designed to prepare young athletes to become professional hockey players; to be ready physically and mentally, to be part of a professional ice hockey team and to succeed there / to accomplish greatness. The Academy expects all players to take it seriously, as a potential job; to work hard; to improve and grow into the best version of themselves. There is zero tolerance for players, who believe this is a social camp and nota training facility. Such athletes will be warned and expelled, if necessary.</p>
        </div>
        <div class="trainers-list">
            <div>
                <img src="/wp-content/themes/theme/assets/img/page4-trainer1.webp" />
                <h3><a href="/artjoms/">Artjoms Lapiks</a></h3>
                <p>Coach</p>
            </div>
            <div>
                <img src="/wp-content/themes/theme/assets/img/page4-trainer2.webp" />
                <h3><a href="/roland/">Roland Svanidze</a></h3>
                <p>Head Coach</p>
            </div>
            <div>
                <img src="/wp-content/themes/theme/assets/img/page4-trainer3.webp" />
                <h3><a href="/dmitry/">Dmitry Likhachev</a></h3>
                <p>Assistant coach</p>
            </div>
            <div>
                <img src="/wp-content/themes/theme/assets/img/page4-trainer4.webp" />
                <h3 class="h3-margin"><a href="/mohammad/">Mohammad Abbas Ahmad Ali Alblooshi</a></h3>
            </div>
            <div>
                <img src="/wp-content/themes/theme/assets/img/page4-trainer5.webp" />
                <h3 class="h3-margin"><a href="/hamel/">Hamel Ahmed Hamel Al Quabaisi</a></h3>
            </div>
        </div>
    </div>

    <div class="buttons">
        <button><a target=”_blank” href="https://docs.google.com/document/d/1VXVZ71R1D8iExGQtkzGWiop67I-qupiEnbwA6Pxfx18/edit">REGISTER YOUR INTEREST</a></button>
        <button><a target=”_blank” href="https://checkout.stripe.com/pay/cs_live_b11TIOx9sbidXWcQdy4izeX728lh66IerOuW17wnRjRyf1UEJU6OeoM7a3#fidkdWxOYHwnPyd1blppbHNgWjA0TzBqNGhBcH82T05kXU5SUXR9f0lvf01HX3ZudG5vPTI2SF9oRjNMMDRHYHZid1ZLX0JMRExkMUN1f0pkX2g8VWhKXH9oZEx%2FQUpNYl1cVUhjcXV3aG5xNTVqdGw3SWZLfScpJ3VpbGtuQH11anZgYUxhJz8nZks3Nz1dPWMwYWlnMX1sY19cJyknd2BjYHd3YHdKd2xibGsnPydtcXF1dj8qKmZtYGZuanBxK3Zxd2x1YCtmamgqJ3gl">PAY ONLINE</a></button>
    </div>

    <div class="block9">
        <h1>WITH THE SUPPORT OF: </h1>
        <div>
            <img src="/wp-content/themes/theme/assets/img/support7.webp" />
            <img src="/wp-content/themes/theme/assets/img/support4.webp" />
            <img src="/wp-content/themes/theme/assets/img/support1.webp" />
            <img src="/wp-content/themes/theme/assets/img/support2.webp" />
            <img src="/wp-content/themes/theme/assets/img/support3.webp" />
        </div>
    </div>

    <?php get_footer(); ?>