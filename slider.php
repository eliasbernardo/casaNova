<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require './cssprueba.php';
?>
<html>
    <head>
        <link rel="https://api.w.org/" href="https://splidejs.com/wp-json/">
        <link rel="canonical" href="https://splidejs.com/">
        <link rel="next" href="https://splidejs.com/page/2/">
        <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">-->
        <link rel="icon" href="https://splidejs.com/wp-content/uploads/2019/08/cropped-site-icon-32x32.png" sizes="32x32">
        <link rel="icon" href="https://splidejs.com/wp-content/uploads/2019/08/cropped-site-icon-192x192.png" sizes="192x192">
        <link rel="apple-touch-icon" href="https://splidejs.com/wp-content/uploads/2019/08/cropped-site-icon-180x180.png">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minium-scale=1.0">
        <script type="application/ld+json">{"@context": "http://schema.org","@type": "WebSite","url": "https://splidejs.com/","name": "Splide","description": "Splide is a free lightweight but powerful slider and carousel, written in pure JavaScript without any dependencies. It supports a thumbnail slider, nested slide...","potentialAction": {"@type": "SearchAction","target": "https://splidejs.com/?s={search_term_string}","query-input": "required name=search_term_string"}}</script>
        <script type="text/javascript" id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vfl7VfO1r/www-widgetapi.js" async=""></script>
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-146338426-1"></script>
        
        <script src="https://kit.fontawesome.com/79feb92d76.js" crossorigin="anonymous"></script>
        <title></title>
       
        <style type="text/css">
            
            .splide__pagination__page {
                display: none;
            }
            .p-splide__arrow--next{
                display: none;
            }
            .p-splide__arrow--prev{
                display: none;
            }
            .splide__list{
                transform: translateX(0);
                transition: none;
                color: red;
                display: none;
                position: fixed;
            }
            .splide__track{
                position: relative;
                width: 100%;
                display: block;
                transform: none;
                transition: all;
            }
        </style>
    </head>
    <body>
        
        <div class="p-example__body">
            <div class="p-example__splide">
                <div id="example-padding" class="splide js-splide p-splide splide--loop splide--ltr splide--draggable is-active"  style="visibility: visible;">
                    
                    <div class="splide__arrows p-splide__arrows">
                        <button class="splide__arrow p-splide__arrow splide__arrow--prev p-splide__arrow--prev" aria-controls="example-padding-track" aria-label="Go to last slide">
                            <span class="fas fa-arrow-left"></span>
                        </button>
                        <button class="splide__arrow p-splide__arrow splide__arrow--next p-splide__arrow--next" aria-controls="example-padding-track" aria-label="Next slide">
                            <span class="fas fa-arrow-right"></span>
                        </button>
                    </div>
                    
                    <div class="splide__track" id="example-padding-track" style="padding-left: 90px; padding-right: 90px;"><!--ESTO DE AQUI ES PARA LO QUE SE MOVERA DENTRO-->
                        <ul class="splide__list" id="example-padding-list" ><!--Esto de aqui el splide__list es para la funcion de movimiento que cumple-->
                            <li class="splide__slide p-splide__slide splide__slide--clone" >
                                <span class="p-splide__slide__number"><img src="selectimages/img/imagen1.jpg"></span>
                            </li>
                            <li class="splide__slide p-splide__slide splide__slide--clone" >
                                <span class="p-splide__slide__number"><img src="selectimages/img/imagen2.jpg" class="image"></span>
                            </li>
                            <li class="splide__slide p-splide__slide is-active is-visible" id="example-padding-slide01" aria-hidden="false" tabindex="0" >
                                <span class="p-splide__slide__number"><img src="selectimages/img/imagen3.jpg"></span>
                            </li>
                            <li class="splide__slide p-splide__slide" id="example-padding-slide02" >
                                <span class="p-splide__slide__number">02</span>
                            </li>
                            <li class="splide__slide p-splide__slide" id="example-padding-slide03">
                                <span class="p-splide__slide__number">03</span>
                            </li>
                            <li class="splide__slide p-splide__slide" id="example-padding-slide04">
                                <span class="p-splide__slide__number">04</span>
                            </li>
                            <li class="splide__slide p-splide__slide" id="example-padding-slide05">
                                <span class="p-splide__slide__number">05</span>
                            </li>
                            <li class="splide__slide p-splide__slide" id="example-padding-slide06">
                                <span class="p-splide__slide__number">06</span>
                            </li>
                           
                        </ul>
                    </div>
                   
                </div>
            </div>

    </body>
    <link rel="stylesheet" id="c55c7abcd63b1c8345b609731c5254b1-css" href="https://splidejs.com/wp-content/sp-cache/optimize/styles/c55c7abcd63b1c8345b609731c5254b1/c55c7abcd63b1c8345b609731c5254b1.css?ver=1598213509" type="text/css" media="all">
   <script src="https://splidejs.com/wp-content/sp-cache/optimize/scripts/6d18636b69498a3d513d6ed6047c58ec/6d18636b69498a3d513d6ed6047c58ec.js?ver=1598213509"></script>
    
    
</html>
