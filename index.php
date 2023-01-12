<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio - samed polat</title>
    <link rel="stylesheet" href="https://use.typekit.net/xhb1sin.css">
    <script src="https://kit.fontawesome.com/3c35670437.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="preload">
    <div class="loading-wrapper">
        <div class="spinner-square">
            <div class="square-1 square"></div>
            <div class="square-2 square"></div>
            <div class="square-3 square"></div>
        </div>
    </div>
    <section class="hero">
        <!-- START HERO SECTION -->
        <!-- START HEADER -->
        <header class="nav-container max-width">
            <div >samed polat.</div>
            <input id="page-nav-toggle" class="main-navigation-toggle" type="checkbox" />
            <label for="page-nav-toggle">
                <svg class="icon--menu-toggle" viewBox="0 0 60 30">
                    <g class="icon-group">
                        <g class="icon--menu">
                            <path d="M 6 5 L 54 5" />
                            <path d="M 6 20 L 54 20" />
                        </g>
                        <g class="icon--close">S
                            <path d="M 15 0 L 45 30" />
                            <path d="M 15 30 L 45 0" />
                        </g>
                    </g>
                </svg>
            </label>
            <!-- NAVBAR START -->
            <nav class="main-navigation" id="nav">
                <ul>
                    <li><a href="#">home</a></li>
                    <li><a href="#about" onclick="hideNav();">over mij</a></li>
                    <li><a href="#projects" onclick="hideNav();">projecten</a></li>
                    <li><a href="#contact" onclick="hideNav();">contact</a></li>
                </ul>
            </nav>
            <!-- NAVBAR END -->
        </header>
        <!-- HEADER END -->
        <div class="hero-content content  animate__animated animate__fadeIn wow">
            <p class="hero-content_kicker">FRONTEND DEVELOPER</p>
            <h1 class="hero-content_title">samed polat.</h1>
            <p class="hero-content_subtitle">ik ontwerp en bouw websites</p>
            <svg class="backg-figure hero-fig-sq2 circle horizontal_flip" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 604.2 603.7" fill="#1d1d1b" xmlns:v="https://vecta.io/nano">
                <path d="M.5 531.4l-.5-.5v32l.5.5zm0-60.3l-.5-.5v32.1l.5.5zm0-60.3l-.5-.5v32l.5.5zm0-60.4l-.5-.5v32l.5.5zm0-47.8V290l-.5-.5v32.1l.5.5z" />
                <path d="M.5 290v12.6V290zm-.1-60.4l-.4-.4v32.1l.4.4z" />
                <path d="M.5 229.7l-.1-.1v32.1l.1.1zm-.2-60.6l-.3-.3v32.1l.3.3z" />
                <path d="M.5 169.3l-.2-.2v32.1l.2.2zm-.3-60.7l-.2-.1v32l.2.2z" />
                <path d="M.5 109l-.3-.4v32.1l.3.3zM.1 48.1H0v32l.1.1z" />
                <path d="M.5 48.6l-.4-.5v32.1l.4.4zM0 1h0 0zm0 14.9v3.8h0z" />
                <path d="M.5 20.2V1H0h0v14.9 3.8zm.4 511.6l-.4-.4v32l.5.5z" />
                <path d="M1 563.9l39.3 39.2h32.1L.9 531.8zm-.2-92.5l-.3-.3v32.1l.4.3z" />
                <path d="M.9 503.5l99.8 99.6h32.2L.8 471.4zm-.2-92.6l-.2-.1v32l.2.2z" />
                <path d="M.7 443l160.6 160.1h32.2L.7 410.9zm-.1-92.6H.5v32l.1.2z" />
                <path d="M.6 382.6l221.3 220.5h32.2L.6 350.4zm-.1-80v19.5h0z" />
                <path d="M.5 302.6v19.5l282 281h32.1L.5 290zm0-40.8l342.4 341.3h32.2L.5 229.7zm0-60.4l403.1 401.7h32.1L.5 169.3zm0-60.4l463.7 462.1h32.1L.5 109zm0-60.4l524.3 522.5h32.1L.5 48.6zm584.8 522.5h16.8v-15.4L13.4 1H.5v19.2zm16.8-75.6L73.8 1H41.7l560.4 558.5zm0-60.4L134.4 1h-32.1l499.8 498.1zm0-60.4L195 1h-32.1l439.2 437.7zm0-60.3L255.5 1h-32.2l378.8 377.5zm0-60.3L316.1 1h-32.2l318.2 317.1zm0-60.4L376.6 1h-32.1l257.6 256.7zm0-60.4L437.3 1h-32.2l197 196.3zm0-60.4L497.9 1h-32.2l136.4 135.9zm0-60.3L558.3 1h-32.1l75.9 75.7z" /></svg>
            <svg class="backg-figure hero-fig-sq" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 604.2 603.7" fill="#1d1d1b" xmlns:v="https://vecta.io/nano">
                <path d="M.5 531.4l-.5-.5v32l.5.5zm0-60.3l-.5-.5v32.1l.5.5zm0-60.3l-.5-.5v32l.5.5zm0-60.4l-.5-.5v32l.5.5zm0-47.8V290l-.5-.5v32.1l.5.5z" />
                <path d="M.5 290v12.6V290zm-.1-60.4l-.4-.4v32.1l.4.4z" />
                <path d="M.5 229.7l-.1-.1v32.1l.1.1zm-.2-60.6l-.3-.3v32.1l.3.3z" />
                <path d="M.5 169.3l-.2-.2v32.1l.2.2zm-.3-60.7l-.2-.1v32l.2.2z" />
                <path d="M.5 109l-.3-.4v32.1l.3.3zM.1 48.1H0v32l.1.1z" />
                <path d="M.5 48.6l-.4-.5v32.1l.4.4zM0 1h0 0zm0 14.9v3.8h0z" />
                <path d="M.5 20.2V1H0h0v14.9 3.8zm.4 511.6l-.4-.4v32l.5.5z" />
                <path d="M1 563.9l39.3 39.2h32.1L.9 531.8zm-.2-92.5l-.3-.3v32.1l.4.3z" />
                <path d="M.9 503.5l99.8 99.6h32.2L.8 471.4zm-.2-92.6l-.2-.1v32l.2.2z" />
                <path d="M.7 443l160.6 160.1h32.2L.7 410.9zm-.1-92.6H.5v32l.1.2z" />
                <path d="M.6 382.6l221.3 220.5h32.2L.6 350.4zm-.1-80v19.5h0z" />
                <path d="M.5 302.6v19.5l282 281h32.1L.5 290zm0-40.8l342.4 341.3h32.2L.5 229.7zm0-60.4l403.1 401.7h32.1L.5 169.3zm0-60.4l463.7 462.1h32.1L.5 109zm0-60.4l524.3 522.5h32.1L.5 48.6zm584.8 522.5h16.8v-15.4L13.4 1H.5v19.2zm16.8-75.6L73.8 1H41.7l560.4 558.5zm0-60.4L134.4 1h-32.1l499.8 498.1zm0-60.4L195 1h-32.1l439.2 437.7zm0-60.3L255.5 1h-32.2l378.8 377.5zm0-60.3L316.1 1h-32.2l318.2 317.1zm0-60.4L376.6 1h-32.1l257.6 256.7zm0-60.4L437.3 1h-32.2l197 196.3zm0-60.4L497.9 1h-32.2l136.4 135.9zm0-60.3L558.3 1h-32.1l75.9 75.7z" /></svg>
        </div>
        <div class="backg-text right animate__animated animate__fadeInLeft animate__delay-1s wow">PORTFOLIO</div>
        <div class="scroll-down_left animate__animated animate__bounce animate__delay-1s animate__repeat-2 wow">
            <svg class="scroll-down_left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.7 147.7" fill="#fff" xmlns:v="https://vecta.io/nano">
                <path d="M7.4 39h.8v107.9h-.8z" />
                <path d="M7.494 146.909l7.637-7.637.566.566-7.637 7.637z" />
                <path d="M-.009 139.868l.566-.566 7.637 7.637-.566.566zm7.674 7.652l.212-.212.212.212-.212.212zM6.4 22.4c-.3.2-.4.5-.4.8s.2.6.4.6.3-.1.5-.5L7 23a2.73 2.73 0 0 1 .7-1.3c.3-.2.6-.3.9-.3.5 0 1 .2 1.3.6.4.4.6 1 .6 1.6 0 .8-.3 1.5-.9 2l-.9-.8c.4-.3.6-.7.6-1.2 0-.4-.2-.7-.6-.7a.47.47 0 0 0-.5.5l-.1.3c-.1.4-.3.8-.6 1.1s-.6.4-1 .4c-.5 0-.9-.2-1.2-.5-.3-.5-.4-.9-.3-1.4 0-.6.2-1.2.5-1.7l.9.8zm.3-6c-.3.3-.5.8-.5 1.2 0 .8.5 1.4 1.3 1.5h.1c.8 0 1.5-.6 1.5-1.4v-.1c0-.4-.2-.8-.5-1.2H10a3.08 3.08 0 0 1 .3 1.3c0 .7-.3 1.5-.8 2s-1.2.9-2 .8c-.8 0-1.6-.3-2.1-.9-.5-.5-.7-1.2-.7-1.9 0-.5.1-1 .3-1.4l1.7.1zm-1.6-1.1v-1.5h.8c-.3-.1-.5-.4-.7-.7-.2-.1-.3-.4-.2-.7 0-.2 0-.4.1-.6l1.4.2c-.1.2-.2.4-.2.7 0 .4.1.8.4 1s.7.3 1.1.3h2.5v1.5l-5.2-.2zm.6-9c.5-.6 1.2-.9 2-.9s1.5.3 2 .9c1 1.2 1 3 0 4.2-.5.6-1.2.9-2 .9s-1.5-.3-2-.9c-1-1.2-1-2.9 0-4.2zm2 .7c-.8 0-1.5.6-1.5 1.4a1.54 1.54 0 0 0 1.5 1.5 1.54 1.54 0 0 0 1.5-1.5h0C9.1 7.6 8.5 7 7.7 7h0zM1.6 2.8h8.7v1.5H1.6V2.8zm0-2.8h8.7v1.5H1.6V0z" />
            </svg>
        </div>
    </section> <!-- END HERO SECTION -->
    <section class="about animate__animated animate__fadeInUp wow" id="about">
        <div class="about-content content">
            <div class="about-content_textcontainer">
                <h3 class="about-content_title">even wat over mij</h3>
                <p class="about-content_text">Ik ben al sinds 2020 bezig met het bouwen van websites. Mijn focus ligt vooral op het ontwerpen en bouwen van websites, front-end dus, en een snuifje back-end. Momenteel ben ik nog bezig met mijn studie software development bij het Mediacollege Amsterdam. Daarnaast bouw ik soms ook websites als freelancer.</p>
                <a href="#projects" class="cta-button">bekijk mijn werk</a>
            </div>
            <div class="about-content_imagecontainer">
                <img class="about-content_image" src="images/wave.png" alt="">
            </div>
            <svg class="backg-figure about-fig-sq2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 604.2 603.7" fill="#1d1d1b" xmlns:v="https://vecta.io/nano">
                <path d="M.5 531.4l-.5-.5v32l.5.5zm0-60.3l-.5-.5v32.1l.5.5zm0-60.3l-.5-.5v32l.5.5zm0-60.4l-.5-.5v32l.5.5zm0-47.8V290l-.5-.5v32.1l.5.5z" />
                <path d="M.5 290v12.6V290zm-.1-60.4l-.4-.4v32.1l.4.4z" />
                <path d="M.5 229.7l-.1-.1v32.1l.1.1zm-.2-60.6l-.3-.3v32.1l.3.3z" />
                <path d="M.5 169.3l-.2-.2v32.1l.2.2zm-.3-60.7l-.2-.1v32l.2.2z" />
                <path d="M.5 109l-.3-.4v32.1l.3.3zM.1 48.1H0v32l.1.1z" />
                <path d="M.5 48.6l-.4-.5v32.1l.4.4zM0 1h0 0zm0 14.9v3.8h0z" />
                <path d="M.5 20.2V1H0h0v14.9 3.8zm.4 511.6l-.4-.4v32l.5.5z" />
                <path d="M1 563.9l39.3 39.2h32.1L.9 531.8zm-.2-92.5l-.3-.3v32.1l.4.3z" />
                <path d="M.9 503.5l99.8 99.6h32.2L.8 471.4zm-.2-92.6l-.2-.1v32l.2.2z" />
                <path d="M.7 443l160.6 160.1h32.2L.7 410.9zm-.1-92.6H.5v32l.1.2z" />
                <path d="M.6 382.6l221.3 220.5h32.2L.6 350.4zm-.1-80v19.5h0z" />
                <path d="M.5 302.6v19.5l282 281h32.1L.5 290zm0-40.8l342.4 341.3h32.2L.5 229.7zm0-60.4l403.1 401.7h32.1L.5 169.3zm0-60.4l463.7 462.1h32.1L.5 109zm0-60.4l524.3 522.5h32.1L.5 48.6zm584.8 522.5h16.8v-15.4L13.4 1H.5v19.2zm16.8-75.6L73.8 1H41.7l560.4 558.5zm0-60.4L134.4 1h-32.1l499.8 498.1zm0-60.4L195 1h-32.1l439.2 437.7zm0-60.3L255.5 1h-32.2l378.8 377.5zm0-60.3L316.1 1h-32.2l318.2 317.1zm0-60.4L376.6 1h-32.1l257.6 256.7zm0-60.4L437.3 1h-32.2l197 196.3zm0-60.4L497.9 1h-32.2l136.4 135.9zm0-60.3L558.3 1h-32.1l75.9 75.7z" /></svg>
            <svg class="backg-figure circle about-fig-ci" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 604.2 603.7" fill="#1d1d1b" xmlns:v="https://vecta.io/nano">
                <path d="M.5 531.4l-.5-.5v32l.5.5zm0-60.3l-.5-.5v32.1l.5.5zm0-60.3l-.5-.5v32l.5.5zm0-60.4l-.5-.5v32l.5.5zm0-47.8V290l-.5-.5v32.1l.5.5z" />
                <path d="M.5 290v12.6V290zm-.1-60.4l-.4-.4v32.1l.4.4z" />
                <path d="M.5 229.7l-.1-.1v32.1l.1.1zm-.2-60.6l-.3-.3v32.1l.3.3z" />
                <path d="M.5 169.3l-.2-.2v32.1l.2.2zm-.3-60.7l-.2-.1v32l.2.2z" />
                <path d="M.5 109l-.3-.4v32.1l.3.3zM.1 48.1H0v32l.1.1z" />
                <path d="M.5 48.6l-.4-.5v32.1l.4.4zM0 1h0 0zm0 14.9v3.8h0z" />
                <path d="M.5 20.2V1H0h0v14.9 3.8zm.4 511.6l-.4-.4v32l.5.5z" />
                <path d="M1 563.9l39.3 39.2h32.1L.9 531.8zm-.2-92.5l-.3-.3v32.1l.4.3z" />
                <path d="M.9 503.5l99.8 99.6h32.2L.8 471.4zm-.2-92.6l-.2-.1v32l.2.2z" />
                <path d="M.7 443l160.6 160.1h32.2L.7 410.9zm-.1-92.6H.5v32l.1.2z" />
                <path d="M.6 382.6l221.3 220.5h32.2L.6 350.4zm-.1-80v19.5h0z" />
                <path d="M.5 302.6v19.5l282 281h32.1L.5 290zm0-40.8l342.4 341.3h32.2L.5 229.7zm0-60.4l403.1 401.7h32.1L.5 169.3zm0-60.4l463.7 462.1h32.1L.5 109zm0-60.4l524.3 522.5h32.1L.5 48.6zm584.8 522.5h16.8v-15.4L13.4 1H.5v19.2zm16.8-75.6L73.8 1H41.7l560.4 558.5zm0-60.4L134.4 1h-32.1l499.8 498.1zm0-60.4L195 1h-32.1l439.2 437.7zm0-60.3L255.5 1h-32.2l378.8 377.5zm0-60.3L316.1 1h-32.2l318.2 317.1zm0-60.4L376.6 1h-32.1l257.6 256.7zm0-60.4L437.3 1h-32.2l197 196.3zm0-60.4L497.9 1h-32.2l136.4 135.9zm0-60.3L558.3 1h-32.1l75.9 75.7z" /></svg>
            <svg class="backg-figure about-fig-sq horizontal_flip" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 604.2 603.7" fill="#1d1d1b" xmlns:v="https://vecta.io/nano">
                <path d="M.5 531.4l-.5-.5v32l.5.5zm0-60.3l-.5-.5v32.1l.5.5zm0-60.3l-.5-.5v32l.5.5zm0-60.4l-.5-.5v32l.5.5zm0-47.8V290l-.5-.5v32.1l.5.5z" />
                <path d="M.5 290v12.6V290zm-.1-60.4l-.4-.4v32.1l.4.4z" />
                <path d="M.5 229.7l-.1-.1v32.1l.1.1zm-.2-60.6l-.3-.3v32.1l.3.3z" />
                <path d="M.5 169.3l-.2-.2v32.1l.2.2zm-.3-60.7l-.2-.1v32l.2.2z" />
                <path d="M.5 109l-.3-.4v32.1l.3.3zM.1 48.1H0v32l.1.1z" />
                <path d="M.5 48.6l-.4-.5v32.1l.4.4zM0 1h0 0zm0 14.9v3.8h0z" />
                <path d="M.5 20.2V1H0h0v14.9 3.8zm.4 511.6l-.4-.4v32l.5.5z" />
                <path d="M1 563.9l39.3 39.2h32.1L.9 531.8zm-.2-92.5l-.3-.3v32.1l.4.3z" />
                <path d="M.9 503.5l99.8 99.6h32.2L.8 471.4zm-.2-92.6l-.2-.1v32l.2.2z" />
                <path d="M.7 443l160.6 160.1h32.2L.7 410.9zm-.1-92.6H.5v32l.1.2z" />
                <path d="M.6 382.6l221.3 220.5h32.2L.6 350.4zm-.1-80v19.5h0z" />
                <path d="M.5 302.6v19.5l282 281h32.1L.5 290zm0-40.8l342.4 341.3h32.2L.5 229.7zm0-60.4l403.1 401.7h32.1L.5 169.3zm0-60.4l463.7 462.1h32.1L.5 109zm0-60.4l524.3 522.5h32.1L.5 48.6zm584.8 522.5h16.8v-15.4L13.4 1H.5v19.2zm16.8-75.6L73.8 1H41.7l560.4 558.5zm0-60.4L134.4 1h-32.1l499.8 498.1zm0-60.4L195 1h-32.1l439.2 437.7zm0-60.3L255.5 1h-32.2l378.8 377.5zm0-60.3L316.1 1h-32.2l318.2 317.1zm0-60.4L376.6 1h-32.1l257.6 256.7zm0-60.4L437.3 1h-32.2l197 196.3zm0-60.4L497.9 1h-32.2l136.4 135.9zm0-60.3L558.3 1h-32.1l75.9 75.7z" /></svg>
        </div>
        <div class="backg-text left animate__animated animate__fadeInLeft wow">OVER MIJ</div>
        <div class="scroll-down_right animate__animated animate__bounce animate__delay-2s animate__repeat-2 wow">
            <svg class="scroll-down_right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.7 147.7" fill="#fff" xmlns:v="https://vecta.io/nano">
                <path d="M7.4 39h.8v107.9h-.8z" />
                <path d="M7.494 146.909l7.637-7.637.566.566-7.637 7.637z" />
                <path d="M-.009 139.868l.566-.566 7.637 7.637-.566.566zm7.674 7.652l.212-.212.212.212-.212.212zM6.4 22.4c-.3.2-.4.5-.4.8s.2.6.4.6.3-.1.5-.5L7 23a2.73 2.73 0 0 1 .7-1.3c.3-.2.6-.3.9-.3.5 0 1 .2 1.3.6.4.4.6 1 .6 1.6 0 .8-.3 1.5-.9 2l-.9-.8c.4-.3.6-.7.6-1.2 0-.4-.2-.7-.6-.7a.47.47 0 0 0-.5.5l-.1.3c-.1.4-.3.8-.6 1.1s-.6.4-1 .4c-.5 0-.9-.2-1.2-.5-.3-.5-.4-.9-.3-1.4 0-.6.2-1.2.5-1.7l.9.8zm.3-6c-.3.3-.5.8-.5 1.2 0 .8.5 1.4 1.3 1.5h.1c.8 0 1.5-.6 1.5-1.4v-.1c0-.4-.2-.8-.5-1.2H10a3.08 3.08 0 0 1 .3 1.3c0 .7-.3 1.5-.8 2s-1.2.9-2 .8c-.8 0-1.6-.3-2.1-.9-.5-.5-.7-1.2-.7-1.9 0-.5.1-1 .3-1.4l1.7.1zm-1.6-1.1v-1.5h.8c-.3-.1-.5-.4-.7-.7-.2-.1-.3-.4-.2-.7 0-.2 0-.4.1-.6l1.4.2c-.1.2-.2.4-.2.7 0 .4.1.8.4 1s.7.3 1.1.3h2.5v1.5l-5.2-.2zm.6-9c.5-.6 1.2-.9 2-.9s1.5.3 2 .9c1 1.2 1 3 0 4.2-.5.6-1.2.9-2 .9s-1.5-.3-2-.9c-1-1.2-1-2.9 0-4.2zm2 .7c-.8 0-1.5.6-1.5 1.4a1.54 1.54 0 0 0 1.5 1.5 1.54 1.54 0 0 0 1.5-1.5h0C9.1 7.6 8.5 7 7.7 7h0zM1.6 2.8h8.7v1.5H1.6V2.8zm0-2.8h8.7v1.5H1.6V0z" />
            </svg>
        </div>
    </section>
    <section class="projects animate__animated animate__fadeInUp wow" id="projects">
        <div class="projects-content content slider">
            <div class="projects-content_textcontainer">
                <div class="projects-content_title">mijn projecten</div>
                <div class="projects-content_text">Hier zijn een aantal van mijn projecten waar ik trots op ben. Voor de alle anderen kan je mijn <a class="link" href="">GitHub pagina</a> bezoeken</div>
            </div>
            <div class="swiper-wrapper">
                <!-- ---------------------------------------------------------- slide 1 -->
                <div class="swiper-slide">
                    <div class="slider-left">
                        <div class="left-textbox">
                            <div class="text">
                                Dit is een examenopdracht wat bij mijn studie hoort. Voor deze opdracht kreeg je een onderwerp en een stijl waarmee je hoorde te werken. In mijn geval was het onderwerp 'games' in het stijl van 'Storytel'. Verder was het de bedoeling om hier een soort webapp van te maken waarmee je de mogelijkheid krijgt om een collectie van een bepaalde groep producten bij te houden, en daarbij aanbevenlingen krijg op basis van je wensen en collectie. De website komt pas online na mijn examens.
                            </div>
                            <div class="date">
                                nog aan de gang
                            </div>
                        </div>
                    </div>
                    <div class="slider-right">
                        <div class="right-textbox">
                            <div class="title">Collezione</div>
                            <div class="subtitle ">ReactJS, swiperJS, SCSS</div>
                        </div>
                        <img class="right-image" src="images/collezione.png" alt="">
                        <div class="right-links">
                            <div>
                            </div>
                            <div class="links">
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- ---------------------------------------------------------- slide 1 -->
                <div class="swiper-slide">
                    <div class="slider-left">
                        <div class="left-textbox">
                            <div class="text">
                                iTrell was een mini project dat ik voor een vak had gemaakt. De opdracht was om een soort Trello app te maken in React met Redux met als doel om meer over Redux te leren. Voor dit project had ik een glassmorphism style gebruikt. 
                            </div>
                            <div class="date">
                                November 2022
                            </div>
                        </div>
                    </div>
                    <div class="slider-right">
                        <div class="right-textbox">
                            <div class="title">iTrell</div>
                            <div class="subtitle ">ReactJS, Redux, SCSS</div>
                        </div>
                        <img class="right-image" src="images/itrell.png" alt="">
                        <div class="right-links">
                            <div>
                                <a class="cta-button" href="https://samedpolat.nl/itrell/" target="_blank">Bezoek website</a>
                            </div>
                            <div class="links">
                                <a href="https://github.com/svmcd/React-lessen/tree/master/itrell" target="_blank"><i class="fa-brands fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ---------------------------------------------------------- slide 1 -->
                <div class="swiper-slide">
                    <div class="slider-left">
                        <div class="left-textbox">
                            <div class="text">
                                In mijn derde studiejaar werkte een medestudent en ik aan een project van NVVN, namelijk SDG Game. Dit is ook een opdracht wat bij mijn studie hoort en hier werden we beoordeeld op het werken met echte opdrachtgevers. Dit project is nog lopend maar niet meer door ons. De startpagina, SDG selector en de SDG pagina's zijn gemaakt toen wij er nog bezig mee waren.
                            </div>
                            <div class="date">
                                Juni 2022
                            </div>
                        </div>
                    </div>
                    <div class="slider-right">
                        <div class="right-textbox"> 
                            <div class="title">SDG Game</div>
                            <div class="subtitle ">Laravel, Lottiefiles, SwiperJS</div>
                        </div>
                        <img class="right-image" src="images/sdggame.png" alt="">
                        <div class="right-links">
                            <div>
                                <a class="cta-button" href="https://www.sdggame.nl" target="_blank">Bezoek website</a>
                            </div>
                            <div class="links">
                                <a href="https://github.com/ColindeGroot/NVVN" target="_blank"><i class="fa-brands fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ---------------------------------------------------------- slide 1 -->
                <div class="swiper-slide">
                    <div class="slider-left">
                        <div class="left-textbox">
                            <div class="text">
                                Deze website had ik met een partner gebouwd voor een opdrachtgever. We hadden volledig geluisterd naar de wensen en behoeften van de opdrachtgever en zo een website op maat gecreëerd.
                            </div>
                            <div class="date">
                                Juli 2022
                            </div>
                        </div>
                    </div>
                    <div class="slider-right">
                        <div class="right-textbox">
                            <div class="title">Conneccations</div>
                            <div class="subtitle ">Wordpress, Elementor.</div>
                        </div>
                        <img class="right-image" src="images/conneccations.png" alt="">
                        <div class="right-links">
                            <div>
                                <a class="cta-button" href="https://www.conneccations.nl" target="_blank">Bezoek website</a>
                            </div>
                            <div class="links">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ---------------------------------------------------------- slide 3 -->
                <div class="swiper-slide">
                    <div class="slider-left">
                        <div class="left-textbox">
                            <div class="text">
                                In opdracht van mijn studie hoorden we een eigen fantasie onderneming te bedenken waarover we een website over moesten bouwen. Dit was tijdens de corona pandemie, dus kwam ik op een creatieve idee.
                            </div>
                            <div class="date">
                                Juni 2021
                            </div>
                        </div>
                    </div>
                    <div class="slider-right">
                        <div class="right-textbox">
                            <div class="title">Corono</div>
                            <div class="subtitle ">HTML, CSS, Javascript, Adobe XD, Adobe Illustrator</div>
                        </div>
                        <img class="right-image" src="images/corono.png" alt="">
                        <div class="right-links">
                            <div>
                                <a class="cta-button" href="https://samedpolat.nl/corono/" target="_blank">Bezoek website</a>
                            </div>
                            <div class="links">
                                <a href="https://github.com/svmcd/corono" target="_blank"><i class="fa-brands fa-github"></i></a>
                                <a href="https://trello.com/b/1iDqJIWg/make-it-rain-corono" target="_blank"><i class="fa-brands fa-trello"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ---------------------------------------------------------- slide 4 -->
                <div class="swiper-slide">
                    <div class="slider-left">
                        <div class="left-textbox">
                            <div class="text">
                                Een van mijn eerste websites/webapps die ik heb gebouwd. Dit is ook een opdracht die bij mijn studie hoort. Hier was het de bedoeling dat we een dashboard gingen bouwen met verschillende widgets wat je zou helpen om energie te besparen.
                            </div>
                            <div class="date">
                                April 2021
                            </div>
                        </div>
                    </div>
                    <div class="slider-right">
                        <div class="right-textbox">
                            <div class="title">Greenhouse</div>
                            <div class="subtitle ">HTML, CSS, Javascript, JSON, API's, Adobe XD, Adobe Illustrator</div>
                        </div>
                        <img class="right-image" src="images/greenhouse.png" alt="">
                        <div class="right-links">
                            <div>
                                <a class="cta-button" href="https://samedpolat.nl/GreenHouse/" target="_blank">Bezoek website</a>
                            </div>
                            <div class="links">
                                <a href="https://github.com/svmcd/GreenHouse" target="_blank"><i class="fa-brands fa-github"></i></a>
                                <a href="https://trello.com/b/L0mcex7Z/duurzaam-huis-jelani-samed" target="_blank"><i class="fa-brands fa-trello"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ---------------------------------------------------------- -->
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="backg-text right animate__animated animate__fadeInLeft wow">PROJECTEN</div>
    </section>
    <section class="about animate__animated animate__fadeInUp wow" id="contact">
        <div class="about-content content">
            <div class="contact-content_textcontainer">
                <h3 class="about-content_title">vraag of opmerking?</h3>
                <p class="about-content_text">Neem gerust contact met mij op.</p>
                <div class="contact-content_hyperlinks">
                    <a class="hyperlink" href="mailto:spolat0750@gmail.com">stuur een mailtje</a>
                    <a class="hyperlink" href="https://www.linkedin.com/in/samed-polat-b400891b2/">connect op LinkedIn</a>
                </div>
            </div>
            <svg class="backg-figure contact-fig-sq2 horizontal_flip" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 604.2 603.7" fill="#1d1d1b" xmlns:v="https://vecta.io/nano">
                <path d="M.5 531.4l-.5-.5v32l.5.5zm0-60.3l-.5-.5v32.1l.5.5zm0-60.3l-.5-.5v32l.5.5zm0-60.4l-.5-.5v32l.5.5zm0-47.8V290l-.5-.5v32.1l.5.5z" />
                <path d="M.5 290v12.6V290zm-.1-60.4l-.4-.4v32.1l.4.4z" />
                <path d="M.5 229.7l-.1-.1v32.1l.1.1zm-.2-60.6l-.3-.3v32.1l.3.3z" />
                <path d="M.5 169.3l-.2-.2v32.1l.2.2zm-.3-60.7l-.2-.1v32l.2.2z" />
                <path d="M.5 109l-.3-.4v32.1l.3.3zM.1 48.1H0v32l.1.1z" />
                <path d="M.5 48.6l-.4-.5v32.1l.4.4zM0 1h0 0zm0 14.9v3.8h0z" />
                <path d="M.5 20.2V1H0h0v14.9 3.8zm.4 511.6l-.4-.4v32l.5.5z" />
                <path d="M1 563.9l39.3 39.2h32.1L.9 531.8zm-.2-92.5l-.3-.3v32.1l.4.3z" />
                <path d="M.9 503.5l99.8 99.6h32.2L.8 471.4zm-.2-92.6l-.2-.1v32l.2.2z" />
                <path d="M.7 443l160.6 160.1h32.2L.7 410.9zm-.1-92.6H.5v32l.1.2z" />
                <path d="M.6 382.6l221.3 220.5h32.2L.6 350.4zm-.1-80v19.5h0z" />
                <path d="M.5 302.6v19.5l282 281h32.1L.5 290zm0-40.8l342.4 341.3h32.2L.5 229.7zm0-60.4l403.1 401.7h32.1L.5 169.3zm0-60.4l463.7 462.1h32.1L.5 109zm0-60.4l524.3 522.5h32.1L.5 48.6zm584.8 522.5h16.8v-15.4L13.4 1H.5v19.2zm16.8-75.6L73.8 1H41.7l560.4 558.5zm0-60.4L134.4 1h-32.1l499.8 498.1zm0-60.4L195 1h-32.1l439.2 437.7zm0-60.3L255.5 1h-32.2l378.8 377.5zm0-60.3L316.1 1h-32.2l318.2 317.1zm0-60.4L376.6 1h-32.1l257.6 256.7zm0-60.4L437.3 1h-32.2l197 196.3zm0-60.4L497.9 1h-32.2l136.4 135.9zm0-60.3L558.3 1h-32.1l75.9 75.7z" /></svg>
            <svg class="backg-figure contact-fig-ci" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 604.2 603.7" fill="#1d1d1b" xmlns:v="https://vecta.io/nano">
                <path d="M.5 531.4l-.5-.5v32l.5.5zm0-60.3l-.5-.5v32.1l.5.5zm0-60.3l-.5-.5v32l.5.5zm0-60.4l-.5-.5v32l.5.5zm0-47.8V290l-.5-.5v32.1l.5.5z" />
                <path d="M.5 290v12.6V290zm-.1-60.4l-.4-.4v32.1l.4.4z" />
                <path d="M.5 229.7l-.1-.1v32.1l.1.1zm-.2-60.6l-.3-.3v32.1l.3.3z" />
                <path d="M.5 169.3l-.2-.2v32.1l.2.2zm-.3-60.7l-.2-.1v32l.2.2z" />
                <path d="M.5 109l-.3-.4v32.1l.3.3zM.1 48.1H0v32l.1.1z" />
                <path d="M.5 48.6l-.4-.5v32.1l.4.4zM0 1h0 0zm0 14.9v3.8h0z" />
                <path d="M.5 20.2V1H0h0v14.9 3.8zm.4 511.6l-.4-.4v32l.5.5z" />
                <path d="M1 563.9l39.3 39.2h32.1L.9 531.8zm-.2-92.5l-.3-.3v32.1l.4.3z" />
                <path d="M.9 503.5l99.8 99.6h32.2L.8 471.4zm-.2-92.6l-.2-.1v32l.2.2z" />
                <path d="M.7 443l160.6 160.1h32.2L.7 410.9zm-.1-92.6H.5v32l.1.2z" />
                <path d="M.6 382.6l221.3 220.5h32.2L.6 350.4zm-.1-80v19.5h0z" />
                <path d="M.5 302.6v19.5l282 281h32.1L.5 290zm0-40.8l342.4 341.3h32.2L.5 229.7zm0-60.4l403.1 401.7h32.1L.5 169.3zm0-60.4l463.7 462.1h32.1L.5 109zm0-60.4l524.3 522.5h32.1L.5 48.6zm584.8 522.5h16.8v-15.4L13.4 1H.5v19.2zm16.8-75.6L73.8 1H41.7l560.4 558.5zm0-60.4L134.4 1h-32.1l499.8 498.1zm0-60.4L195 1h-32.1l439.2 437.7zm0-60.3L255.5 1h-32.2l378.8 377.5zm0-60.3L316.1 1h-32.2l318.2 317.1zm0-60.4L376.6 1h-32.1l257.6 256.7zm0-60.4L437.3 1h-32.2l197 196.3zm0-60.4L497.9 1h-32.2l136.4 135.9zm0-60.3L558.3 1h-32.1l75.9 75.7z" /></svg>
                <path d="M.5 531.4l-.5-.5v32l.5.5zm0-60.3l-.5-.5v32.1l.5.5zm0-60.3l-.5-.5v32l.5.5zm0-60.4l-.5-.5v32l.5.5zm0-47.8V290l-.5-.5v32.1l.5.5z" />
                <path d="M.5 290v12.6V290zm-.1-60.4l-.4-.4v32.1l.4.4z" />
                <path d="M.5 229.7l-.1-.1v32.1l.1.1zm-.2-60.6l-.3-.3v32.1l.3.3z" />
                <path d="M.5 169.3l-.2-.2v32.1l.2.2zm-.3-60.7l-.2-.1v32l.2.2z" />
                <path d="M.5 109l-.3-.4v32.1l.3.3zM.1 48.1H0v32l.1.1z" />
                <path d="M.5 48.6l-.4-.5v32.1l.4.4zM0 1h0 0zm0 14.9v3.8h0z" />
                <path d="M.5 20.2V1H0h0v14.9 3.8zm.4 511.6l-.4-.4v32l.5.5z" />
                <path d="M1 563.9l39.3 39.2h32.1L.9 531.8zm-.2-92.5l-.3-.3v32.1l.4.3z" />
                <path d="M.9 503.5l99.8 99.6h32.2L.8 471.4zm-.2-92.6l-.2-.1v32l.2.2z" />
                <path d="M.7 443l160.6 160.1h32.2L.7 410.9zm-.1-92.6H.5v32l.1.2z" />
                <path d="M.6 382.6l221.3 220.5h32.2L.6 350.4zm-.1-80v19.5h0z" />
                <path d="M.5 302.6v19.5l282 281h32.1L.5 290zm0-40.8l342.4 341.3h32.2L.5 229.7zm0-60.4l403.1 401.7h32.1L.5 169.3zm0-60.4l463.7 462.1h32.1L.5 109zm0-60.4l524.3 522.5h32.1L.5 48.6zm584.8 522.5h16.8v-15.4L13.4 1H.5v19.2zm16.8-75.6L73.8 1H41.7l560.4 558.5zm0-60.4L134.4 1h-32.1l499.8 498.1zm0-60.4L195 1h-32.1l439.2 437.7zm0-60.3L255.5 1h-32.2l378.8 377.5zm0-60.3L316.1 1h-32.2l318.2 317.1zm0-60.4L376.6 1h-32.1l257.6 256.7zm0-60.4L437.3 1h-32.2l197 196.3zm0-60.4L497.9 1h-32.2l136.4 135.9zm0-60.3L558.3 1h-32.1l75.9 75.7z" /></svg>

        </div>
        <div class="backg-text left animate__animated animate__fadeInRight wow">CONTACT</div>
    </section>
    <section class="footer">
        <div class="footer-content content">
            <div>
                <h1 class="hero-content_title">samed polat.</h1>
                <p>NL004415443B46</p>
            </div>
            <a href="https://github.com/svmcd/portfolio2022"><i class="fa-brands fa-github"></i></a>
        </div>
    </section>
    <script src="js/script.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/swiper.js"></script>
</body>

</html>