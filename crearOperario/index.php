<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="layout">
        <nav class="nav--admin">
            <div class="nav--admin-h2">
                <h2>Industrias Gafra</h2>
            </div>
            <div class="nav--admin">
                <button class="nav--admin__button">Cerras sesion</button>
                <div class="nav--admin__div">
                    <img class="nav--admin__div__img" src="../assets/notificacion.png" alt="">
                    <p class="nav--admin__div__p--notificacion">4</p>
                </div>
            </div>
        </nav>

        <div class="login">
            <h1 class="login__h1">Crear operario</h1>
            <form class="login__form">
                <input class="login__form__input--usuario" type="text" placeholder="Buscar operario">
                <input class="login__form__input--usuario" type="text" placeholder="Nombre">
                <input class="login__form__input--usuario" type="text" placeholder="Apellidos">
                <input class="login__form__input--usuario" type="text" placeholder="Tipo de documento">
                <select name="Tipo de documento" id="" class="login__form__input--usuario">
                    <option value="Cedula de ciudadania">Cedula de ciudadania</option>
                    <option value="Cedula de extrangeria">Cedula de extrangeria</option>
                    <option value="Permiso especial">Permiso especial</option>
                </select>
                <input class="login__form__input--usuario" type="text" placeholder="Identificacion">
                <input class="login__form__input--usuario" type="text" placeholder="Identificacion">
                <input class="login__form__input--usuario" type="text" placeholder="Correo">
                <select name="Tipo de documento" id="" class="login__form__input--usuario">
                    <option value="Operario A">Operario A</option>
                    <option value="Operario B">Operario B</option>
                    <option value="Operario C">Operario C</option>
                </select>
                <input class="login__form__input--usuario" type="text" placeholder="Telefono">
                <input class="login__form__input--usuario" type="text" placeholder="Usuaio">
                <input class="login__form__button" type="button" value="Generar usuario">
                <input class="login__form__input--usuario" type="text" placeholder="contraseña">
                <input class="login__form__button" type="button" value="Generar contraseña">

                <input class="login__form__button button--green" type="button" value="Guardar">
                <input class="login__form__button button--red" type="button" value="Cancelar">
            </form>
        </div>
        <div class="button--back__div">
            <div class="button--back">
                <img class="button--back__img" src="../assets/back.png" alt="">
            </div>
            <div class="button--back">
                <p class="button--back__p">Inicio</p>
            </div>

        </div>
        





        <p class="layout__p--reservados">2024®️ Gafra todos los derechos reservados</p>

    </section>
    
</body>
</html>