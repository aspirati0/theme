<?php
/*
Template Name: Dmitry
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
        <h1>Dmitry Likhachev</h1>
        <img src="/wp-content/themes/theme/assets/img/trainer3.webp" />
    </div>
    <h2>Assistant coach</h2>
    <div class="trainer">
        <h3>BIO:</h3>
        <p><b>Date of Birth: </b>08/09/1993</p>
        <h3>EDUCATION:</h3>
        <p>Yaroslavl State Pedagogical University names Uscinski Major-specialist in physical culture and sport</p>
        <h3>ACHIEVEMENTS:</h3>
        <ul>
            <li>Champion of Russia “Lokomotiv”</li>
            <li>Champions of the open championship of Moscow (2002-2009)</li>
            <li>Champion of the Universiade (2009)</li>
            <li>Participant of the Four Nations Cup tournament as part of the Russian national team</li>
            <li>Champion Nike Bauer Selects (US Tournament)</li>
        </ul>
        <h3>PLAYER CAREER:</h3>
        <ul>
            <li>Lokomotiv(Yaroslavl) KHL/MHL,RUS</li>
            <li>Khimik (Voskresensk ), RUS</li>
            <li>Belye Tigry (Orenburg), RUS</li>
            <li>HC Kalix ( Kalix ) , SWE</li>
            <li>IK Guts (Norrkoping), SWE</li>
            <li>IK Osby (Osby), SWE</li>
            <li>HC Mariupol (Mariupol), UKR</li>
        </ul>
        <h3>During career worked under the guidance of coaches:</h3>
        <ul>
            <li>Kornoukhov E.A., </li>
            <li>Vorobyov P.I., </li>
            <li>Vorobyov I.P.,</li>
            <li>Plushev V.A.,</li>
            <li>Borshchevsky N.K., </li>
            <li>Teemu Elomo</li>
            <li>Viter S.V., </li>
            <li>Seukand A.Yu</li>
        </ul>
    </div>
</body>
</html>