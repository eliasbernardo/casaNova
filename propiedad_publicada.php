<?php
require './header.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="styles/propiedad_publicada.css" type="text/css" rel="stylesheet">
        <link href="styles/propiedad_publicada2.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="propiety-public">
            <div class="propiety-description">
                <div class="conten-public">
                    <div class="description"><h3>Departamento - 78m2 - 3 Dormitorios - 1Estacionamiento</h3></div>
                    <div class="direction">República De Panamá al 300, Lima Cercado, Lima</div>
                </div>
                
                <div class="imag-description">
                    <div class="imag-slider">
                        
                        <ul class="slider">
                            <li class="slide" id="slide1"><img src="images/casa2.jpeg"></li>
                            <li class="slide" id="slide2"><img src="images/casa3.jpeg"></li>
                            <li class="slide" id="slide3"><img src="images/casa4.jpeg"></li>
                            <li class="slide" id="slide4"><img src="images/casa2.jpeg"></li>
                            <li class="slide" id="slide5"><img src="images/casa3.jpeg"></li>
                        </ul>
                    </div>
                    <!--------------------------------------------------------------------------------------------------------------------->
                    <div class="imag-slider-one">
                        <div class="nav">
                            <nav>
                                <ul class="menu">
                                    <li><a href="#slide1"><img src="images/casa2.jpeg"></a></li>
                                    <li><a href="#slide2"><img src="images/casa3.jpeg"></a></li>
                                    <li><a href="#slide3"><img src="images/casa4.jpeg"></a></li>
                                    <li><a href="#slide4"><img src="images/casa2.jpeg"></a></li>
                                    <li><a href="#slide5"><img src="images/casa3.jpeg"></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="general-description">
                    <div class="name-description"><h1>Descripcion</h1></div>
                    <div class="parraf-description">
                        
                        <!--1000 caracteres-->
                        <p>Está Ubicado entre Miraflores y Barranco en la cuadra 5 de República de Panamá.
                        Con todas las líneas de Bus y metro a 50 metros, estación plaza de flores y estación Balta.
                        Dispone de 3 ascensores de última generación.<br>
                        <br>
                        Semi amoblado (lpinea blanca, cocina moderna, therma nueva, y refrigeradora nueva. Reposteros
                        modernos altos y bajos de melamine). Cortinas venecianas y rollers blackout
                        <br>
                        <br>
                        Gimnasio, sala de reuniones, BBQ, ZOOM, zona de juegos de adolescentes (pingpong), Kit place.
                        Zona de Biciletas.
                        <br>
                        <br>
                        Opciones tenemos una cochera por 350 soles adicionales</p>     
                    </div>            
                </div>
                <div class="ubication-general">
                    <div class="ubication"><h3>Ubicación</h3></div>
                    <div class="name-ubication">República de Panamá al 300, Lima Cercado, Lima</div>
                    <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.8758047521765!2d-77.03162838556739!3d-12.120649146578446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c819b88a9d33%3A0x991b84da5cbd0585!2sParque%20Central%20de%20Miraflores!5e0!3m2!1ses-419!2spe!4v1601161984073!5m2!1ses-419!2spe" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                </div>
            </div>

            <div class="propiety">
                <div class="contact-anu">
                    <form>
                        <input class="btn" type="button" value="CONTACTAR ANUNCIANTE">
                        <div class="p"><p>Ingresa tus datos a fin de poder contactarte con el anunciante</p></div>
                        <div>Nombre</div>
                        <input type="text" class="form" placeholder="Ingresa tu nombre">
                        <div>Email</div>
                        <input type="email" class="form" placeholder="Ingresa tu Email">
                        <div>Teléfono</div>
                        <input type="text" class="form" placeholder="Ingresa tu teléfono">
                        <div>Mensaje</div>
                        <input type="text" class="message">
                        <li> Al enviar estás aceptando los términos y condiciones de Uso</li>
                    </form>
                </div>
            </div>
    </div>
    </body>
    
</html>
