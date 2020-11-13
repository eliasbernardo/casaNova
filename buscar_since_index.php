<?php
require './header.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/stylebuscar.css">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minium-scale=1.0">
        <title></title>
    </head>
    <body>
        <div class="conteiner">
            <!--PARA EL  FILTRO-->
            <div class="filter">
                <!--Aqui es la seccion de filtro-->
                <div class="filtrosearch">
                    <div class="mostrar-filtro-seleccionado">
                        <div><h5>Selección actual</h5><a>Limpiar filtros</a></div>
                    </div>
                    <div class="filtro-radio">
                        <div class="filtro-radio-filter">
                            <h3>Tipo de operación</h3>
                            <div class="radio"><input type="radio" name="toperacion" value="comprar"><label>Comprar</label></div>
                            <div class="radio"><input type="radio" name="toperacion"><label>Alquilar</label></div>
                            <div class="radio"><input type="radio" name="toperacion"><label>Comercial</label></div>
                            <div class="radio"><input type="radio" name="toperacion"><label>Proyectos</label></div>
                            <div class="radio"><input type="radio" name="toperacion"><label>Traspaso</label></div>
                        </div>
                        <div class="filtro-radio-filter">
                            <h3>Tipo de inmueble</h3>
                            <div class="radio"><input type="radio" name="inmueble"><label>Departamento</label></div>
                            <div class="radio"><input type="radio" name="inmueble"><label>Casa</label></div>
                            <div class="radio"><input type="radio" name="inmueble"><label>Terreno/Lote</label></div>
                            <div class="radio"><input type="radio" name="inmueble"><label>Local comercial</label></div>
                            <div class="radio"><input type="radio" name="inmueble"><label>Oficina</label></div>
                        </div>
                        <div>
                            <h3>Dormitorios</h3>
                            <a>1</a>
                            <a>2</a>
                            <a>3</a>
                            <a>4</a>
                            <a>5</a>
                        </div>
                        <div>
                            <h3>Baño</h3>
                            <a>1</a>
                            <a>2</a>
                            <a>3</a>
                            <a>4</a>
                            <a>5</a>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            <div class="conten">
                <div class="public hone">
                    <div class="sec one">
                        <div class="imag"><div class="imagjr"><img src="images/casa2.jpeg"><div class="precio">S/2500<span></span></div></div><div class="texto"><div class="textojr1">Esto es un texto de prueba</div><div class="precio"><input type="submit" value="VER"></div></div></div>
                        <div class="imag"><div class="imagjr"><img src="images/casa3.jpeg"><div class="precio">S/2500<span></span></div></div><div class="texto"><div class="textojr1">Esto es un texto de prueba</div><div class="precio"><input type="submit" value="VER"></div></div></div>
                    </div>
                    <div class="sec two">
                        <div class="imag"><div class="imagjr"><img src="images/casa2.jpeg"><div class="precio">S/2500<span></span></div></div><div class="texto"><div class="textojr1">Esto es un texto de prueba</div><div class="precio"><input type="submit" value="VER"></div></div></div>
                        <div class="imag"><div class="imagjr"><img src="images/casa3.jpeg"><div class="precio">S/2500<span></span></div></div><div class="texto"><div class="textojr1">Esto es un texto de prueba</div><div class="precio"><input type="submit" value="VER"></div></div></div>
                    </div>
                    <div class="sec three">
                        <div class="imag"><div class="imagjr"><img src="images/casa2.jpeg"><div class="precio">S/2500<span></span></div></div><div class="texto"><div class="textojr1">Esto es un texto de prueba</div><div class="precio"><input type="submit" value="VER"></div></div></div>
                        <div class="imag"><div class="imagjr"><img src="images/casa3.jpeg"><div class="precio">S/2500<span></span></div></div><div class="texto"><div class="textojr1">Esto es un texto de prueba</div><div class="precio"><input type="submit" value="VER"></div></div></div>
                    </div>
                    <div class="sec four">
                        <div class="imag"><div class="imagjr"><img src="images/casa2.jpeg"><div class="precio">S/2500<span></span></div></div><div class="texto"><div class="textojr1">Esto es un texto de prueba</div><div class="precio"><input type="submit" value="VER"></div></div></div>
                        <div class="imag"><div class="imagjr"><img src="images/casa3.jpeg"><div class="precio">S/2500<span></span></div></div><div class="texto"><div class="textojr1">Esto es un texto de prueba</div><div class="precio"><input type="submit" value="VER"></div></div></div>
                    </div>
                </div>
                <!--Seccion del banner-->
                <div class="banner">
                    <div class="ban">
                        <div class="im"><img src="images/banner1.jpg" ><div class="descripcion">in 3 days $200</div></div>
                        <div class="im"><img src="images/banner2.jpg"><div class="descripcion">in 3 days $200</div></div>
                        <div class="im"><img src="images/banner3.jpg"><div class="descripcion">in 3 days $200</div></div>
                        <div class="im"><img src="images/banner4.jpg"><div class="descripcion">in 3 days $200</div></div>
                        <div class="im"><img src="images/banner5.jpg"><div class="descripcion">in 3 days $200</div></div>
                        <div class="im"><img src="images/banner6.jpg"><div class="descripcion">in 3 days $200</div></div>
                    </div>
                </div>
                
                <div class="public htwo">
                    <div class="sec one">
                        <div class="imag"><div class="imagjr"><img src="images/casa2.jpeg"><div class="precio">S/2500<span></span></div></div><div class="texto"><div class="textojr1">Esto es un texto de prueba</div><div class="precio"><input type="submit" value="VER"></div></div></div>
                        <div class="imag"><div class="imagjr"><img src="images/casa3.jpeg"><div class="precio">S/2500<span></span></div></div><div class="texto"><div class="textojr1">Esto es un texto de prueba</div><div class="precio"><input type="submit" value="VER"></div></div></div>
                    </div>
                    <div class="sec two">
                        <div class="imag"><div class="imagjr"><img src="images/casa2.jpeg"><div class="precio">S/2500<span></span></div></div><div class="texto"><div class="textojr1">Esto es un texto de prueba</div><div class="precio"><input type="submit" value="VER"></div></div></div>
                        <div class="imag"><div class="imagjr"><img src="images/casa3.jpeg"><div class="precio">S/2500<span></span></div></div><div class="texto"><div class="textojr1">Esto es un texto de prueba</div><div class="precio"><input type="submit" value="VER"></div></div></div>
                    </div>
                    <div class="sec three">
                        <div class="imag"><div class="imagjr"><img src="images/casa2.jpeg"><div class="precio">S/2500<span></span></div></div><div class="texto"><div class="textojr1">Esto es un texto de prueba</div><div class="precio"><input type="submit" value="VER"></div></div></div>
                        <div class="imag"><div class="imagjr"><img src="images/casa3.jpeg"><div class="precio">S/2500<span></span></div></div><div class="texto"><div class="textojr1">Esto es un texto de prueba</div><div class="precio"><input type="submit" value="VER"></div></div></div>
                    </div>
                    <div class="sec four">
                        <div class="imag"><div class="imagjr"><img src="images/casa2.jpeg"><div class="precio">S/2500<span></span></div></div><div class="texto"><div class="textojr1">Esto es un texto de prueba</div><div class="precio"><input type="submit" value="VER"></div></div></div>
                        <div class="imag"><div class="imagjr"><img src="images/casa3.jpeg"><div class="precio">S/2500<span></span></div></div><div class="texto"><div class="textojr1">Esto es un texto de prueba</div><div class="precio"><input type="submit" value="VER"></div></div></div>
                    </div>
                </div>
                
                <div class="banner">
                    <div class="ban">
                        <div class="im"><img src="images/banner1.jpg" ><div class="descripcion">in 3 days $200</div></div>
                        <div class="im"><img src="images/banner2.jpg"><div class="descripcion">in 3 days $200</div></div>
                        <div class="im"><img src="images/banner3.jpg"><div class="descripcion">in 3 days $200</div></div>
                        <div class="im"><img src="images/banner4.jpg"><div class="descripcion">in 3 days $200</div></div>
                        <div class="im"><img src="images/banner5.jpg"><div class="descripcion">in 3 days $200</div></div>
                        <div class="im"><img src="images/banner6.jpg"><div class="descripcion">in 3 days $200</div></div>
                    </div>
                </div>
                
                <div>Aqui ira el propaganda</div>
            </div>
        </div>
        <div class="paginacion">
            <div class=""><h2>AQUI IRA EL NUMERO DE PAGINA</h2></div>
         </div>
    </body>
</html>
