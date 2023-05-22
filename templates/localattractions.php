﻿<?php
/*
Template Name: Local Attracions
*/
?>

<?php get_header(); ?>

<style>

        .heading {
            display: flex;
        }

        .heading > h1 {
            font-family: 'Azonix', sans-serif;
        }

            .heading > a {
                text-decoration: none;
                color: #c89600;
                font-size: 3em;
                margin-right: 1em;
            }

        .block5 > div > div {
            background: #fbfbfb;
        }


        @media(min-width: 800px) {

           .heading {
               margin-top: 100px;
               padding-left: 6em;
           }

           .heading > a {
               margin-top: 0.6em;
           }

            .heading > h1 {
                max-width: 30%;
                font-size: 50px;
            }

            .block5 > div > div {
                padding-right: 5em;
            }

            .attractions {
                display: flex;
                flex-wrap: wrap;
                width: 100%;
            }

            .attractions > div {
                width: 50%;
                display: flex;
            }

                .attractions > div:last-child {
                    width: 100%;
                }

                .attractions > div > div {
                    width: 50%;
                    box-sizing: border-box;
                    padding-left: 3em;
                    padding-top: 1.5em;
                    padding-right: 3em;
                }

                .attractions > div > img {
                    width: 50%;
                }
            .block5 > div > img {
                display: none;
            }
            .block5 > div {
                background: url("/wp-content/themes/theme/assets/img/local1.webp");
                background-repeat: no-repeat;
                background-size: 50% 100%;
                background-position: right;
            }
        }


        @media(max-width: 800px) {
            .heading, .attractions {
                padding-left: 1em;
                padding-right: 1em;
            }
            .heading {
                align-items: center;
            }
            .attractions > div {
                display: flex;
                flex-direction: column;
            }
            .attractions > div > div {
                order: 2;
            }
            .attractions > div > img {
                order: 1;
            }
            .heading {
               margin-top: 140px;
           }
           .heading > h1 {
               font-size: 25px;
           }
        }

    </style>

    <div class="heading">
        <a href="/">❮</a>
        <h1>
            LOCAL ATTRACTIONS
        </h1>
    </div>

    <div class="block5">
        <div class="reverse">
            <img src="/wp-content/themes/theme/assets/img/local1.webp" />
            <div>
                <h3>Burj Khalifa</h3>
                <p>
                    Explore one of the world’s tallest observation spots, located on the skyscraper’s 124th floor.
                </p>
                <ul>
                    <li><b>At the top</b> - Soak in unforgettable panoramic views of the entire city -  desert, seaside, downtown, all at once!</li>
                    <li><b>Sky view Dubai</b> - Enjoy a breathtaking 360-degree view of the Dubai skyline and discover a whole new perspective on the city from the <b>Observatory</b>, or challenge yourself and walk around the building without any barriers blocking stunning views of the sky from <b>Edge walk</b>, or get ready for an extreme ride from <b>Sky Slide</b>.</li>
                    <li><b>At.mosphere</b> - experience a unique and luxury dining destination on level 122 of Burj Khalifa at the highest Restaurant and Lounge in the world.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="attractions">
        <div>
            <img src="/wp-content/themes/theme/assets/img/local2.webp" />
            <div>
                <h3>Global Village</h3>
                <p>
                    Immerse yourself in an exciting multi-cultural entertainment zone and discover different cultures from more than 70 countries across 20+ unique pavilions.
                </p>
            </div>
        </div>

        <div>
            <img src="/wp-content/themes/theme/assets/img/local3.webp" />
            <div>
                <h3>Museum of the Future</h3>
                <p>
                    A must-visit international destination, bringing the best of family entertainment and technology. This journey to the future, through a special interactive program, will take you to a different reality to explore technologies and see the other side of the future.
                </p>
            </div>
        </div>

        <div>
            <div>
                <h3>
                    IMG Worlds of Adventure
                </h3>
                <p>
                    IMG Worlds of Adventure is the largest indoor themed entertainment destination in the world. We believe that all family members will be impressed with six epic adventure zones that include roller coasters of all ages.
                </p>
            </div>
            <img src="/wp-content/themes/theme/assets/img/local4.webp" />
        </div>

        <div>
            <div>
                <h3>
                    Legoland Water Park
                </h3>
                <p>
                    Cool down and enjoy a fun adventure at one of the largest Dubai theme parks with more than 20 waterslides and attractions.
                </p>
            </div>
            <img src="/wp-content/themes/theme/assets/img/local5.webp" />
        </div>

        <div>
            <img src="/wp-content/themes/theme/assets/img/local6.webp" />
            <div>
                <h3>Al Qudra Cycle Track</h3>
                <p>
                    It is a popular place among cyclists in Dubai, covering more than 80 kilometers. This unique road gives an opportunity to ride through a desert landscape and offers a chance to see local wildlife.
                </p>
            </div>
        </div>

        <div>
            <img src="/wp-content/themes/theme/assets/img/local7.webp" />
            <div>
                <h3>Ain Dubai</h3>
                <p>
                    Reach new heights and enjoy the spectacular sunset views at the largest observation wheel, flying 250 meters above the city.
                </p>
            </div>
        </div>

        <div>
            <div>
                <h3>
                    The View at The Palm
                </h3>
                <p>
                    Enjoy an astonishing 360-degree panorama view from "The View at The Palm" of the seaside and Dubai skyline.
                </p>
            </div>
            <img src="/wp-content/themes/theme/assets/img/local8.webp" />
        </div>

        <div>
            <div>
                <h3>
                    Dubai Miracle Garden
                </h3>
                <p>
                    Get inspired by majestic installations of over 150 million full blooming flowers from around the world at the largest themed flower garden.
                </p>
            </div>
            <img src="/wp-content/themes/theme/assets/img/local9.webp" />
        </div>

        <div>
            <div>
                <h3>
                    Al Qudra Lakes
                </h3>
                <p>
                    If you’re an outdoor enthusiast, you shouldn’t miss this destination. Al Qudra Lakes has always been a favorite vacation spot for both visitors and residents. It’s a perfect option, if you would like to escape from the city. The desert oasis offers activities that will allow you to relax and enjoy the local breathtaking nature.
                </p>
            </div>
            <img src="/wp-content/themes/theme/assets/img/local10.webp" />
        </div>
    </div>


<?php get_footer(); ?>
