<?php
/*
Template Name: Accommodation
*/
?>

<?php get_header(); ?>

<style>

    .page2-block1 {
        background: url(/wp-content/themes/theme/assets/img/page2-1.webp);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
    }

        .page2-block1 > div > form > p {
            color: gray;
            font-weight: bold;
        }

    .page2-block2 > ul > li {
        padding-bottom: 0;
    }

    .page2-block2 > div {
        display: flex;
        align-items: center;
        margin-bottom: 0.8em;
        margin-bottom: 0.8em;
    }

        .page2-block2 > div > p {
            margin-bottom: 0;
            margin-top: 0;
        }

        .page2-block2 > div > img {
            height: 1.8em;
            margin-right: 0.8em;
        }

    .white-button {
        background: white;
        border: 2px solid #c89600;
    }
	
	.white-button > a {
		color: #c89600;
	}
	
	.white-button > a:hover {
		color: white;
	}

    .block5 > div > div > button:hover {
        background: black;
        border: 2px solid black;
    }

    .block5 > div > div > .page2-block2 {
        padding-left: 0;
        margin-left: 0;
        margin-top: 0;
    }

    .block5 > div > div > button {
        margin-bottom: 1.5em;
    }

    @media (max-width: 800px) {
        .page2-block2 {
            max-width: 90%;
            padding-left: 1.3em;
        }

	.page2-block1 {
		margin-top: 100px;
	}

            .page2-block2 > p > b {
                font-size: 16px;
            }

        .page2-block1 > div {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

            .page2-block1 > div > div {
                background: #c89600;
                width: 88%;
                margin-top: 1.5em;
                color: white;
                padding: 1em;
                box-sizing: border-box;
            }

            .page2-block1 > div > form > div > .field {
                display: flex;
                flex-direction: column;
                margin-bottom: 0.8em;
            }

            .page2-block1 > div > form {
                width: 90%;
                display: flex;
                flex-direction: column;
                align-items: center;
                background: white;
                margin-top: 1.3em;
                padding-top: 0.3em;
                padding-bottom: 0.7em;
                margin-bottom: 1.5em;
                font-family: 'Gotham', 'Montserrat', sans-serif;
            }

                .page2-block1 > div > form > div > .field > label {
                    margin-bottom: 0.5em;
                }

                .page2-block1 > div > form > div > .field > input {
                    width: 100%;
                    padding: 0.25em;
                }

                .page2-block1 > div > form > div {
                    width: 88%;
                }

                .page2-block1 > div > form > button {
                    background-color: #c89600;
                    color: white;
                    height: 1.5em;
                    border: none;
                    display: flex;
                    padding: 1em;
                    font-size: 0.75em;
                    width: 92%;
                    border-radius: 15px 15px;
                    justify-content: center;
                    align-self: center;
                    align-items: center;
                }

            .page2-block1 > div > div > h1 {
                color: white;
                font-size: 30px;
                font-family: 'Azonix', sans-serif;
            }

            .page2-block1 > div > div > p {
                color: white;
                font-size: 15px;
                line-height: 22.5px;
                font-family: 'gotham', 'Montserrat', sans-serif;
            }

        .block5 > div > div > button {
            width: 100%;
        }
    }

    @media(min-width: 800px) {
		.block5 > div > img {
			display: none;
		}
		.block5 > div {
			background-repeat: no-repeat;
			background-size: 50%;
			padding-top: 1em;
		}
		.div2 > div, .div4 > div, .div6 > div {
			margin-left: 50%;
		}
		.div1 {
			background: url("/wp-content/themes/theme/assets/img/page2-2.webp");
			background-position: right;
		}
		.div2 {
			background: url("/wp-content/themes/theme/assets/img/page2-3.webp");
		}
		.div3 {
			background: url("/wp-content/themes/theme/assets/img/page2-4.webp");
			background-position: right;
		}
		.div4 {
			background: url("/wp-content/themes/theme/assets/img/page2-5.webp");
		}
		.div5 {
			background: url("/wp-content/themes/theme/assets/img/page2-6.webp");
			background-position: right;
		}
		.div6 {
			background: url("/wp-content/themes/theme/assets/img/page2-7.webp");
		}
		
	.page2-block1 {
       		margin-top: 60px;
  	 }

        .block5 > div > div {
            padding-left: 6em;
            padding-right: 9em;
        }

            .block5 > div > div > button {
                width: 55%;
                margin-top: 1.7em;
                margin-bottom: 2em;
            }

            .block5 > div > div > ul {
                margin-bottom: 0;
            }

        .page2-block2 {
            margin-left: 7em;
            margin-top: 2em;
            width: 60%;
        }

        .block5 > div > button {
            margin-top: 3em;
        }

        .page2-block1 > div {
            display: flex;
            flex-direction: column;
            width: 40%;
            margin-left: 6em;
            margin-top: 2em;
            margin-bottom: 15em;
        }

            .page2-block1 > div > div {
                background: #c89600;
                padding: 0.8em 1.5em 0.8em 1.5em;
            }

                .page2-block1 > div > div > h1 {
                    color: white;
                    font-size: 50px;
                    font-family: 'Azonix', sans-serif;
                }

                .page2-block1 > div > div > p {
                    color: white;
                    font-size: 15px;
                    line-height: 22.5px;
                    font-family: 'Gotham Pro', 'Montserrat', sans-serif;
                }

            .page2-block1 > div > form {
                background: white;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                font-family: 'Gotham', 'Montserrat', sans-serif;
            }

                .page2-block1 > div > form > div {
                    display: flex;
                    flex-direction: row;
                    justify-content: center;
                    width: 100%;
                    grid-gap: 2em;
                }

                    .page2-block1 > div > form > div > .field {
                        display: flex;
                        flex-direction: column;
                        width: 40%;
                    }

                        .page2-block1 > div > form > div > .field > label {
                            margin-bottom: 0.5em;
                        }

                        .page2-block1 > div > form > div > .field > input {
                            width: 100%;
                            padding: 0.25em;
                        }

                .page2-block1 > div > form > button {
                    border: none;
                    background: #c89600;
                    padding: 0.5em;
                    color: white;
                    width: 40%;
                    margin-top: 0.8em;
                    margin-bottom: 0.8em;
                }
    }
</style>

<div class="page2-block1">
    <div>
        <div>
            <h1>ACCOMMODATION</h1>
            <p>Centrally located in the heart of Dubai, it is perfect for any stay with a warm and inviting atmosphere.</p>
        </div>

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
    </div>
</div>

<div class="page2-block2" style="padding-bottom: 1.5em">
    <h1>HOTEL APARTMENTS</h1>
    <p><b>Emirates Sports Hotel Apartments offer a magnificent view of Dubai Sports City and an easy reach to a variety of sports facilities.</b></p>
    <ul>
        <li>16 elegant One-bedroom Apartments (55-65 sqm)</li>
        <li>32 exquisite and sophisticated Two-bedroom Apartments (81-105 sqm)</li>
    </ul>
    <p><b>All Apartments are spacious and fully equipped for the most comfortable stay:</b></p>
    <div><img src="/wp-content/themes/theme/assets/img/page2-icon1.webp" />Free high-speed Wi-fi;</div>
    <div><img src="/wp-content/themes/theme/assets/img/page2-icon2.webp" />An air-conditioning system in each room;</div>
    <div><img src="/wp-content/themes/theme/assets/img/page2-icon3.webp" />A flat-screen smart TV with a wide array of streaming platforms;</div>
    <div><img src="/wp-content/themes/theme/assets/img/page2-icon4.webp" />Large living room;</div>
    <div><img src="/wp-content/themes/theme/assets/img/page2-icon5.webp" />Fully-equipped kitchen;</div>
    <div><img src="/wp-content/themes/theme/assets/img/page2-icon6.webp" />A private bathroom with a bathtub in all the bedrooms;</div>
    <div><img src="/wp-content/themes/theme/assets/img/page2-icon6.webp" />Egyptian cotton bed linens and towels;</div>
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
              height: 100vh;
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

<div class="slider">
            <div><img src="/wp-content/themes/theme/assets/img/slider2-1.webp"></div>
            <div><img src="/wp-content/themes/theme/assets/img/slider2-2.webp"></div>
            <div><img src="/wp-content/themes/theme/assets/img/slider2-3.webp"></div>
            <div><img src="/wp-content/themes/theme/assets/img/slider2-4.webp"></div>
            <div><img src="/wp-content/themes/theme/assets/img/slider2-5.webp"></div>
            <div><img src="/wp-content/themes/theme/assets/img/slider2-6.webp"></div>
            <div><img src="/wp-content/themes/theme/assets/img/slider2-7.webp"></div>
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

<div class="block5">
    <div class="reverse div1">
        <img src="/wp-content/themes/theme/assets/img/page2-2.webp" />
        <div>
            <h1>ONE-BEDROOM APARTMENTS</h1>
            <h3>Typical layout includes:</h3>
            <ul>
                <li>Property size: 55-65 sqm</li>
                <li>Occupancy: 2 - 4 people</li>
                <li>View: landmark view of the sports fields or city view</li>
                <li>Spacious Living and Dining Area: sofa, armchair, sofa table, TV-stand, dining table, 4 dining chairs, 58-inch HD LCD TV, Smart TV, stylish lamp, carpet, wall art;</li>
                <li>Kitchen: refrigerator with freezer, microwave, toaster oven, tea/coffee kettle, cooking stove, tableware (plates and cups), glassware, kitchen utensils and other kitchen equipment (such as pots and pans);</li>
                <li>Bedroom: king-size bed (or two-single beds), night stands, lamps, writing desk, armchair, large mirror; iron and ironing board, spacious built-in wardrobe;</li>
                <li>Bathroom: en-suite bathroom with a toilet and a bath; hairdryer, hand and bath towels, soft bath mat and a protective shower curtain.</li>
            </ul>
            <button><a target=”_blank” href="https://live.ipms247.com/booking/roomwisedata.php?hid=emiratessportshotelapartments&roomtypeunkid=3667800000000000005&_gl=1*ohfebi*_ga*MzA2MzQxMDczLjE2NzcxNjQ4MTU.*_ga_JR88VZRJMZ*MTY3ODcxODU3OC42Mi4xLjE2Nzg3MTkxMzEuMC4wLjA.">BOOK NOW</a></button>
        </div>
    </div>

    <div class="div2">
        <img src="/wp-content/themes/theme/assets/img/page2-3.webp" />
        <div>
            <h1>TWO-BEDROOM APARTMENTS</h1>
            <p>Ideal for families, Two-bedroom Apartments include two similar-sized bedrooms and a spacious living and dining area with an open kitchen.</p>
            <h3>Typical layout includes:</h3>
            <ul>
                <li><b>Property size: </b>105 sqm</li>
                <li><b>Occupancy: </b>4 - 6 people</li>
                <li><b>View: </b>landmark view of the sports fields or city view</li>
                <li><b>Spacious Living and Dining Area: </b>sofa, armchair, sofa table, TV-stand, dining table, 4 dining chairs, 58-inch HD LCD TV, Smart TV, stylish lamp, carpet, wall art;</li>
                <li><b>Kitchen: </b>refrigerator with freezer, microwave, toaster oven, tea/coffee kettle, cooking stove, tableware (plates and cups), glassware, kitchen utensils and other kitchen equipment (such as pots and pans);</li>
                <li><b>Bedroom: </b>king-size bed (or two-single beds), night stands, lamps, writing desk, armchair, large mirror; iron and ironing board, spacious built-in wardrobe;</li>
                <li><b>Bathroom: </b>2 en-suite bathrooms with a toilet and bath; hairdryer, hand and bath towels, soft bath mat and a protective shower curtain.</li>
            </ul>
            <button><a target=”_blank” href="https://live.ipms247.com/booking/roomwisedata.php?hid=emiratessportshotelapartments&roomtypeunkid=3667800000000000006&_gl=1*1ozqjdv*_ga*MzA2MzQxMDczLjE2NzcxNjQ4MTU.*_ga_JR88VZRJMZ*MTY3ODcxODU3OC42Mi4xLjE2Nzg3MTkxMzEuMC4wLjA.">BOOK NOW</a></button>
        </div>
    </div>

    <div class="reverse div3">
        <img src="/wp-content/themes/theme/assets/img/page2-4.webp" />
        <div>
            <h1>PENTHOUSE APARTMENTS</h1>
            <p>Located on the highest floor, Emirates Sports Penthouse apartments offer the best views in the building and feature exclusive amenities.</p>
            <p>Every room is equipped with the latest equipment and technology, and has everything anyone would need to enjoy their stay, short-term or long-term.Emirates Sports Penthouse apartments redefine the Sports City skyline as they set a new standard of living in one of Dubai’s popular districts. This spectacular living space is sure to inspire the opulent side of even the most demanding of guests</p>
            <button class="white-button"><a target=”_blank” href="/contact/">REGISTER YOUR INTEREST</a></button>
        </div>
    </div>

    <div class="div4">
        <img src="/wp-content/themes/theme/assets/img/page2-5.webp" />
        <div>
            <h1>HOTEL STUDIOS</h1>
            <p>All 144 rooms at Emirates Sports Hotel Studios are fitted with full-length panoramic windows, and create an air of effortless luxury.</p>
            <h3>FEATURES AND AMENITIES:</h3>
            <div class="page2-block2">
                <div><img src="/wp-content/themes/theme/assets/img/page2-icon8.webp" />24/7 security services</div>
                <div><img src="/wp-content/themes/theme/assets/img/page2-icon1.webp" />High speed WiFi in all the rooms</div>
                <div><img src="/wp-content/themes/theme/assets/img/page2-icon1.webp" />Smart TV</div>
                <div><img src="/wp-content/themes/theme/assets/img/page2-icon9.webp" />Live sports broadcasts</div>
                <div><img src="/wp-content/themes/theme/assets/img/page2-icon10.webp" />In-house laundry facilities</div>
                <div><img src="/wp-content/themes/theme/assets/img/page2-icon11.webp" />Family-friendly</div>
                <div><img src="/wp-content/themes/theme/assets/img/page2-icon12.webp" />Indoor and outdoor sports activities</div>
            </div>
            <button class="white-button"><a target=”_blank” href="/contact/">REGISTER YOUR INTEREST</a></button>
        </div>
    </div>

    <div class="reverse div5">
        <img src="/wp-content/themes/theme/assets/img/page2-6.webp" />
        <div>
            <h1>STANDARD ROOM</h1>
            <p>Standard room category is sized at 27-40 sqm with a shower and panoramic windows of sport fields/ city views.</p>
            <h3>Details:</h3>
            <div class="page2-block2">
                <div><img src="/wp-content/themes/theme/assets/img/page2-icon13.webp" /><p><b>Room Size: </b>27-40 sqm</p></div>
                <div><img src="/wp-content/themes/theme/assets/img/page2-icon14.webp" /><p><b>Occupancy: </b>2 people</p></div>
                <div><img src="/wp-content/themes/theme/assets/img/page2-icon15.webp" /><p><b>Views: </b>landmark view of the sports fields or city view</p></div>
                <div><img src="/wp-content/themes/theme/assets/img/page2-icon16.webp" /><p><b>Beds: </b>king-size bed or two twin beds</p></div>
                <div><img src="/wp-content/themes/theme/assets/img/page2-icon17.webp" /><p><b>Bathroom: </b>a shower with a toilet; hairdryer, hand and bath towels, soft bath mat</p></div>
            </div>
            <button><a target=”_blank” href="https://live.ipms247.com/booking/roomwisedata.php?hid=emiratessportshotelapartments&roomtypeunkid=3667800000000000003&_gl=1*1h8wlmh*_ga*MzA2MzQxMDczLjE2NzcxNjQ4MTU.*_ga_JR88VZRJMZ*MTY3ODcxODU3OC42Mi4xLjE2Nzg3MTkxMzEuMC4wLjA.">BOOK NOW</a></button>
        </div>
    </div>

    <div class="div6">
        <img src="/wp-content/themes/theme/assets/img/page2-7.webp" />
        <div>
            <h1>SUITS</h1>
            <p>Distinguished by a large living and lounge area.</p>
            <h3>Details:</h3>
            <div class="page2-block2">
                <div><img src="/wp-content/themes/theme/assets/img/page2-icon13.webp" /><p><b>Room Size: </b>45 sqm</p></div>
                <div><img src="/wp-content/themes/theme/assets/img/page2-icon14.webp" /><p><b>Occupancy: </b>2-3 people</p></div>
                <div><img src="/wp-content/themes/theme/assets/img/page2-icon15.webp" /><p><b>Views: </b>landmark view of the sports fields or city view</p></div>
                <div><img src="/wp-content/themes/theme/assets/img/page2-icon16.webp" /><p><b>Beds: </b>king-size bed or two queen-size beds and sofa</p></div>
                <div><img src="/wp-content/themes/theme/assets/img/page2-icon17.webp" /><p><b>Bathroom: </b>a shower with a toilet; hairdryer, hand and bath towels, soft bath mat</p></div>
            </div>
            <button><a target=”_blank” href="https://live.ipms247.com/booking/roomwisedata.php?hid=emiratessportshotelapartments&roomtypeunkid=3667800000000000004&_gl=1*5gaazb*_ga*MzA2MzQxMDczLjE2NzcxNjQ4MTU.*_ga_JR88VZRJMZ*MTY3ODcxODU3OC42Mi4xLjE2Nzg3MTkxMzEuMC4wLjA.">BOOK NOW</a></button>
        </div>
    </div>

</div>

<script>
    const myDateInput = document.getElementById("myDate");
    const tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);
    const formattedDate = tomorrow.toISOString().slice(0, 10);
    myDateInput.value = formattedDate;

    const myDateInput1 = document.getElementById("myDate1");
    const aftertomorrow = new Date();
    aftertomorrow.setDate(aftertomorrow.getDate() + 2);
    const formattedDate1 = aftertomorrow.toISOString().slice(0, 10);
    myDateInput1.value = formattedDate1;
</script>

<?php get_footer(); ?>