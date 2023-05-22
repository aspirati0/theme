<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>


<style>
	@media(min-width: 1600px) {
		.contact-h1, .contact-p {
			padding-left: 28%;
		}
		
		iframe {
			margin-left: 28%;
			width: 45%
		}
	}
	
	@media(min-width: 800px) and (max-width: 1600px) {
		.contact-p, iframe {
                padding-left: 18em;
				padding-right: 18em;
            }
		
		.contact-h1 {
		    padding-left: 5.7em;
    	}
		
		iframe {
                width: 60%;
            }
	}
		
        @media(min-width: 800px) {

	    .contact-h1 {
            margin-top: 100px;
    	    }
        }

        @media(max-width: 800px) {
			
			.contact-h1, .contact-p, iframe {
				padding-left: 5%;
				padding-right: 5%;
			}

			.contact-h1 {
					margin-top: 150px;
			}
			
			iframe {
				width: 90%;
			}

        }

        iframe {
            margin-top: 3em;
	 		margin-bottom: 3em;
        }

        .contact-h1 {
            font-family: 'Azonix', sans-serif;
            font-size: 50px;
        }

        .contact-p {
            margin: 0;
            font-family: 'gotham', 'Montserrat', sans-serif;
            font-size: 16px;
            font-weight: bold;
        }

            .contact-p > a {
                color: #c89600;
                text-decoration-color: #c89600;
                text-decoration-thickness: 5px;
            }
    </style>
    <h1 class="contact-h1">Contact</h1>
    <p class="contact-p"><a style="color:">info@emiratessportshotel.com</a></p>
    <p class="contact-p">Emirates Sports Hotel, Dubai Sports City, UAE </p>
    <p class="contact-p">For bookings: +971 4 572 0000</p>
    <p class="contact-p" style="color: gray">For job applications: +971 50 398 7582</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3614.8890459744293!2d55.2239633!3d25.0378392!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6f92f59b04fd%3A0x7f7db2713f118f78!2sEmirates%20Sports%20Hotel%20Apartments!5e0!3m2!1sen!2sde!4v1679364471841!5m2!1sen!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<?php get_footer(); ?>