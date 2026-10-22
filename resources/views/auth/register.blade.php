<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../../../public/css/register.css">
</head>

<body>
    <?php //require_once "../layouts/header.php"; ?>
    <div class="mainContainer">

        <div class="leftContainer">
            <img src="../../../public/assets/images.jfif" alt="imagen lateral del inicio de sesion">


        </div>

        <div class="rightContainer">

            <div class="formContainer">

                <form action="" method="post" class="formulario">

                    <h1>Registro de usuario</h1>
                    <div class="campo">
                        <label for="nombre">Nombre Completo</label>
                        <input
                            type="text"
                            id="nombre"
                            name="nombre"
                            required
                            placeholder="Ingrese su nombre">
                    </div>

                    <div class="campo">
                        <label for="correo">Correo Electrónico</label>
                        <input
                            type="email"
                            id="correo"
                            name="correo"
                            required
                            placeholder="correo@ejemplo.com">
                    </div>

                    <div class="campo">
                        <label for="usuario">Usuario</label>
                        <input
                            type="text"
                            id="usuario"
                            name="usuario"
                            required
                            placeholder="Nombre de usuario">
                    </div>

                    <div class="campo">
                        <label for="password">Contraseña</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            required
                            minlength="8"
                            pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$"
                            title="La contraseña debe tener al menos 8 caracteres, una letra mayúscula, una minúscula y un número."
                            placeholder="********">
                    </div>

                    <div class="campo">
                        <label for="confirmar">Confirmar Contraseña</label>
                        <input
                            type="password"
                            id="confirmar"
                            name="confirmar"
                            required
                            placeholder="********">
                    </div>
                    <button>Registarse</button>
                    <p class="login-link">
                        ¿Ya tienes una cuenta?
                        <a href="login.php">Inicia sesión</a>
                    </p>
                </form>

            </div>

        </div>
        
    </div>
    <?php //require_once "../layouts/footer.php"; ?>
</body>
</html>