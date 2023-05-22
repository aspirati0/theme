<?php
/*
Template Name: Mohammad
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
                    max-width: 50%;
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
        <h1>Mohammad Abbas Ahmad Ali Alblooshi</h1>
        <img src="/wp-content/themes/theme/assets/img/trainer4.webp" />
    </div>
    <div class="trainer">
        <h3>From 1990 to 2000:</h3>
        <p>
            karaté player with the UAE karaté federation.    
            Won: - 1993: bronze medal in international championship for freedom of Kuwait.
        </p>
        <p>
            <b>1993:</b> bronze medal in Peace and Friendship championship Iran.
            <b>1997:</b> bronze medal in Asian championship.
            <b>2000:</b> gold medal in Police World championship, lightweight category.
        </p>
        <h3>From 2001 to 2003:</h3>
        <p>UAE national team coach.</p>
        <h3>From 2003 to 2008:</h3>
        <p>board member and general secretary of UAE karaté federation.</p>
        <h3>From 2009 till now:</h3>
        <ul>
            <li>Executive director of UAE karaté federation.</li>
            <li>Technical committee member</li>
            <li>Chairman  of West Asia technical Committee.</li>
            <li>Member of Asian sports commission.</li>
            <li>Executive director of Arab karaté federation.</li>
        </ul>
    </div>
</body>
</html>