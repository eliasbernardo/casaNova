<?php
require './header.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/styleregister.css" type="text/css">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" type="text/css">
        <title></title>
    </head>
    <body>
        <div class="registro">
            <div class="background"></div>
            <img src="images/15013.jpg">
            <div class="formulario">
                <div class="formu">
                    <h3>DATOS</h3>
                    <div class="nombre">
                        <div class="nombrep"><p>Nombres</p></div>
                        <div class="nombrein"><input type="text" placeholder="Ingrese nombres"></div>
                    </div>
                    <div class="apellido">
                        <div class="apellidop"><p>Apellidos</p></div>
                        <div class="apellidoin"><input type="text" placeholder="Ingrese apellidos"></div>
                    </div>
                    <div class="razon">
                        <div class="razonp"><p>Razón social</p></div>
                        <div class="razonin"><input type="text" placeholder="Ingrese razón social"></div>
                    </div>
                    <div class="dni-ruc">
                        <div class="dnip"><p>DNI/RUC</p></div>
                        <div class="dniin"><input type="number" placeholder="Ingrese su DNI/RUC"></div>
                    </div>
                    <div class="correo">
                        <div class="correop"><p>Correo</p></div>
                        <div class="correoin"><input type="email" placeholder="Ingrese su correo"></div>
                    </div>
                    <div class="tlf">
                        <div class="tlfp"><p>Teléfono</p></div>
                        <div class="tlfin"><input type="number" placeholder="Ingrese su teléfono"></div>
                    </div>
                    <div class="usuario">
                        <div class="usuariop"><p>Usuario</p></div>
                        <div class="part"><button>Particular</button></div>
                        <div class="inm"><button>Inmobiliaria</button></div>
                        <div class="agen"><button>Agente</button></div>
                        <div class="const"><button>Constructora</button></div>
                    </div>
                    <div class="reg">
                        <button>Registrarme</button>
                    </div>
                    <div class="terminos">
                        <div class="terminosp1"><p>Al enviar estás aceptando los</p></div>
                        <div class="terminosp2"><p>Términos y condiciones de contratación</p></div>
                    </div>
                </div>
            </div>
            <div class="ingresar">
                <div class="ya"><h2>Ya tengo cuenta,</h2></div>
                <div class="ingr"><h2>Ingresar</h2></div>
            </div>
        </div>
    </body>
</html>
