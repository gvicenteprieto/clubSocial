<?php
require_once("C://xamppAct/htdocs/php/gestionClub/login/view/head/head.php");
?>

<div class="fondo_login" style="background-color: #000000e6; min-height: 100vh; padding-top: 50px;">
    <div class="icono" style="text-align: center; color: white;">
        <a href="../../index.php">
            <i class="fa-regular fa-futbol icono_login" style="font-size: 25px;
    margin-bottom: 10px; color: #5dbefb; text-align: center;"> CLUB SOCIAL</i>
        </a>
    </div>
    <div class="titulo" style="text-align: center; color: white; margin-bottom: 15px;">
        Inicia Sesión
    </div>
    <form action="valida.php" method="post" class="login col-3" autocomplete="off" style="color: white; margin: auto; border: 1px solid grey; padding: 20px; border-radius: 6px; background-color: #332f2f;">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Usuario:</label>
            <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="usuario">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellidos:</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" aria-describedby="apellidos">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombres:</label>
            <input type="text" class="form-control" id="nombres" name="nombres" aria-describedby="nombres">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email:</label>
            <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña:</label>
            <div class="ojoVisor" style="position: relative;">


                <button type="button" onClick="mostrarPass('pass', 'eyepass')" style="border: none; position: absolute;">
                    <i id="eyepass" class="fa-solid fa-eye changePass" style="position: absolute; top: 12px; color: #332f2f; right: 250; cursor: pointer;"></i>
                </button>


                <!-- <i onClick="mostrarPass('pass', 'eyepass')" id="eyepass" class="fa-solid fa-eye changePass" style="position: absolute; top: 12px; color: #332f2f; right: 0; cursor: pointer;"></i> -->


            </div>
            <input type="password" class="form-control" id="pass" name="pass">
        </div>
        <hr>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña:</label>
            <div class="ojoVisor" style="position: relative;">


                <button type="button" onClick="mostrarPass2('pass', 'eyepass')" style="border: none; position: absolute;">
                    <i id="eyepass" class="fa-solid fa-eye changePass" style="position: absolute; top: 12px; color: #332f2f; right: 250; cursor: pointer;"></i>
                </button>


                <!-- <i onClick="mostrarPass('pass', 'eyepass')" id="eyepass" class="fa-solid fa-eye changePass" style="position: absolute; top: 12px; color: #332f2f; right: 0; cursor: pointer;"></i> -->


            </div>
            <input type="password" class="form-control" id="pass" name="pass">
        </div>

        <hr>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña:</label>
            <div class="ojoVisor" style="position: relative;">


                <button type="button" onClick="mostrarPass3('pass', 'eyepass')" style="border: none; position: absolute;">
                    <i id="eyepass" class="fa-solid fa-eye changePass" style="position: absolute; top: 12px; color: #332f2f; right: 250; cursor: pointer;"></i>
                </button>


                <!-- <i onClick="mostrarPass('pass', 'eyepass')" id="eyepass" class="fa-solid fa-eye changePass" style="position: absolute; top: 12px; color: #332f2f; right: 0; cursor: pointer;"></i> -->


            </div>
            <input type="password" class="form-control" id="pass" name="pass">
        </div>
        
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <div class="login col-3" style="color: white; margin: auto; border: 1px solid grey; padding: 20px; border-radius: 6px; background-color: #332f2f;">
        ¿Primer ingreso al sitio? <a href="./signup.php" style="text-decoration:none">Registrarse</a>
    </div>

</div>

<?php
require_once("C://xamppAct/htdocs/php/gestionClub/login/view/head/footer.php");
?>
