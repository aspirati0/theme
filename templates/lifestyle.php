<?php
/*
Template Name: Lifestyle
*/
?>

<?php get_header(); ?>

<style>
	
	    @media(max-width: 800px) {
        .block5 > .reverse {
            display: flex;
            flex-direction: column;
            margin-top: 100px;
        }

            .block5 > .reverse > div {
                order: -1;
                display: flex;
                flex-direction: column;
                margin: 0;
                min-width: 100vw;
                padding-right: 1.3em;
                box-sizing: border-box;
                padding-bottom: 1em;
            }

        .block5 > div:last-child > img {
            display: none;
        }
    }
	
	.block > div > ul {
		margin-bottom: 0;
	}
	
	.block > div > ul > li > p {
		margin-bottom: 0;
	}

    .block5 > div > div > ul {
        margin-bottom: 0;
    }

        .block5 > div > div > ul > li:last-child {
            padding-bottom: 0;
        }
	
	    @media(min-width: 800px) {

        .block5 > div > div {
            padding-left: 6em;
            padding-right: 9em;
            justify-content: start;
        }
			
			    .block5 > div > div > h1 {
        margin-top: 2.2em;
		margin-bottom: 0;
    }

        .block5 > div > img {
            max-width: 50vw;
        }

        .block5 > div > div > p {
            margin-bottom: 0;
        }
			
			.block {
				background: url("/wp-content/themes/theme/assets/img/page3-2.webp");
				background-repeat: no-repeat;
				background-size: 50%;
			}
			
			.block > div {
				margin-left: 50%;
				padding-bottom: 3em;
			}
			
			.
    }
	
	@media(min-width: 800px) and (max-width: 1600px) {
		.block5 > div > div > p {
			width: 100%;
		}
		
		.block5 > div > div {
			padding-right: 4em !important;
			padding-bottom: 4em;
		}
	}
	
	@media(min-width: 1600px) and (max-width: 1900px) {
		.block5 > div > div > p {
			width: 80%;
		}

	}
	
	
	@media(min-width: 1900px) {
		
		.block5 > div > div > p {
			max-width: 60%;
		}
		
		.block5 > div > div > h1 {
			margin-bottom: 0.5em;
		}
		
		.reverse > img {
			max-height: 29vw;
		}
	}
	
	@media(min-width: 2200px) {
		.reverse > img {
			height: 23vw;
		}
	}
	

</style>

<div class="block5">

    <div class="reverse">
        <img src="/wp-content/themes/theme/assets/img/page3-1.webp" />
        <div style="color: white; background: #64c3c3 ">
            <h1 class="h1" style="font-family: 'Azonix'; font-size: 50px; width: 30%">LIFESTYLE CLUB</h1>
            <p>Travel to Emirates Sports Hotel Apartments to take part in our premier Lifestyle Club. It will fulfill all of your health and wellness needs. Includes a variety of healthy-driven activities and experiences, such as fitness classes/massages, wellness coaches and more.</p>
            <p>Our team of experienced coaches will guide you through the training process whether you are just a beginner or a high performance professional athlete. In addition to physical conditioning, our guests will be able to acquire new skills they never thought they had.</p>
        </div>
    </div>

    <div class="block">
        <div>
            <h1>ACTIVITIES:</h1>
            <ul>
                <li><b>Outdoor calisthenics gym/boxing zones</b></li>
                <li><b>Ice-hockey shootout area</b></li>
                <li><b>Weekly football games</b></li>
                <li>
					<b>Personal sessions with professional team of coaches that can:</b>
					<p style="list-style: none">
						<p>- Develop a nutrition program;</p>
						<p>- Create an individual workout training plan;</p>
						<p>- Book private/group boxing and hockey trainings;</p>
					</p>
                </li>
            </ul>
            <h1>OUTDOOR TRAINING FACILITY</h1>
            <p>Our main goal is to provide all guests with everything they need for an active and healthy lifestyle. And our team of professionals can help you find your stroke from the beginner to advanced level play in various sports.</p>
            <p>Start your day right! Join our morning warm-ups and you will see how exercise helps you to fill up with strength, energy and vigor for the rest of the day.</p>
            <h1>ICE-HOCKEY SHOOTOUT AREA</h1>
            <p>Ice-hockey shooting area is one of our training facilities where you can try your hand or improve your hockey skills.</p>
            <p>Emirates Sports offers the best experience for all family members of all ages and skill levels - children, teenagers and adults. ​​All sports activities are available for permanent residents and our guests of Emirates Sports Hotel Apartments.</p>
            <h1>Emirates Sports ACADEMY</h1>
            <p>ESN Academy is the first year-round Summer and Winter Sports Academy in the desert that focuses on building a solid foundation for our members, which includes learning proper technique, acquiring a strong and positive mindset, ongoing support and motivation to work hard.</p>
            <p>The Academy offers mixed sports activities, where all family members are welcome to join our special training sessions, as we know that only with the support of parents, our students really shine!</p>
            <p>The ESN Academy program includes <i>off-ice hockey, boxing and physical trainings.</i></p>
        </div>
    </div>

</div>

<?php get_footer(); ?>