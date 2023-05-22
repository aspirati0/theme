<?php
/*
Template Name: Roland
*/
?>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/wp-content/themes/theme/assets/css/style.css" rel="stylesheet" type="text/css" />
    <title></title>
</head>
<body>
    <style>
        .heading {
            display: flex;
        }

            .heading > h1 {
                font-family: 'Azonix', sans-serif;
            }

            .heading > a {
                text-decoration: none;
                color: #00a0e6;
                font-size: 3em;
                margin-right: 1em;
            }

            h2 {
                font-size: 26px;
                font-family: 'Gotham', sans-serif;
                font-weight: bold;
            }

        ul > li::before {
            content: "\2022";
            color: black;
            font-weight: bold;
            display: inline-block;
            width: 1em;
        }

        .trainer {
            border-radius: 10px;
            border: 2px solid #cecece;
            margin-bottom: 4em;
        }

        .trainer > h3 {
            margin-top: 2em;
        }

        .trainer > h3:first-child {
            margin-top: 0;
        }

        .trainer > ul > li:last-child {
            padding-bottom: 0;
            margin-bottom: 0;
        }

        @media(min-width: 800px) {

            .heading {
                margin-top: 20px;
                padding-left: 15em;
            }

                .heading > a {
                    margin-top: 0.6em;
                }

                .heading > h1 {
                    max-width: 20%;
                    font-size: 50px;
                    margin-bottom: 0;
                }

                h2 {
                    padding-left: 12.1em;
                }

                .heading > img {
                    position: absolute;
                    right: 19em;
                    top: 30px;
                    height: 150px;
                }

            .trainer {
                margin-left: 19em;
                margin-right: 19em;
                margin-top: 3em;
                padding: 2em 3.5em;
            }
        }

        @media(max-width: 800px) {
            .heading, .trainer, h2 {
                margin-left: 1em;
                margin-right: 1em;
            }

            .heading {
                align-items: center;
                margin-top: 20px;
            }

                .heading > h1 {
                    font-size: 25px;
                }

            .trainer {
                padding: 1em;
            }

            .heading > img {
                height: 110px;
            }
        }
    </style>
    <div class="heading">
        <a href="/academy/">❮</a>
        <h1>Roland Svanidze</h1>
        <img src="/wp-content/themes/theme/assets/img/trainer2.webp" />
    </div>
    <h2>Head Coach</h2>
    <div class="trainer">
        <h3>BIO:</h3>
        <p><b>Date of Birth: </b>1st. November 1977</p>
        <p><b>Age: </b>44</p>
        <p>Graduation of the HC “ Novokuznetsk “ (school of Olympic reserve)
        Family status: married Children: 3 (19 years)</p>
        <h3>EDUCATION:</h3>
        <ul>
            <li>Foundation Degree in teaching of physical culture and sport. Diploma in Novokuznetsk State Pedagogical Institute. The Faculty of Physical Culture and Sport, Hockey coach. Russia.</li>
            <li>University Higher School of Coaches "Professional Sports and Training System highly qualified athletes in hockey, Russia. Omsk.</li>
        </ul>
        <h3>HOCKEY PLAYING EXPERIENCE:</h3>
        <ul>
            <li>Emirates Sports Academy, Head Coach from 2022 present</li>
            <li>IHC “DINAMO TBILISI” Head Coach, from 2018-2022</li>
            <li>National Team of Georgia, Head Coach, from 2017-2022</li>
            <li>UAE, DUBAI, EMAAR, Head Coach, Ice Hockey School - Ice Rink from 2016-2018</li>
        </ul>
        <h3>AWARD/ HONOR:</h3>
        <ul>
            <li>“CHALLENGE CUP 2016” DUBAI, UAE – BEST FORWARD (2016) Star Match Member</li>
            <li>“45th ANNIVERSARY SUPER SERIES 72” CANADA-USSR 2017 Star Match Member</li>
            <li>“EHL ALL STARS”, UAE (2017)</li>
            <li>“KHARLAMOV CUP 2018” DUBAI, UAE – BEST FORWARD (2018)</li>
        </ul>
        <h3>INTERNATIONAL:</h3>
        <ul>
            <li>IIHF, Champion of World Championship lll Division, Head Coach (2018)</li>
            <li>IIHF, World Championship ll Division, 4th place, Head Coach (2019)</li>
            <li>IIHF, World Championship ll Division, 2nd place, Silver Medal, Head Coach (2022)</li>
        </ul>
        <h3>HOCKEY ADMINISTRATIVE SKILLS:<h3>
        <ul>
            <li>Competitor game analysis.</li>
            <li>Player advanced scouting.</li>
            <li>Hockey analytics.</li>
            <li>In – game, post –game plan preparation. • Power play and Penalty kill strategies.</li>
            <li>Development coach.</li>
            <li>D-man development coach.</li>
            <li>Pre –season, in-season, post-season plan preparatio</li>
        </ul>
    </div>
</body>
</html>