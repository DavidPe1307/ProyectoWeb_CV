<html>
    <head>
        <title>Nosotros</title>
        <link rel="stylesheet" href="css/estilologin.css">
    </head>
    <body>
        <div class="container" id="registrarse">
            <h1> Registrar Sesión </h1>
             <p>Bienvenido, ingrese sus datos para un registro previo.</p>
              <form method="POST" action="">
                <div class= "registro_datos">
                    <input type="text" name="Nombre" id="usuNombre" placeholder= "Ingrese su nombre" required>
                    <label for="usuNombre">Nombre</label>
                </div>
                <div class="registro_datos">
                    <input type="text" name="Apellido" id="usuApellido" placeholder="Ingrese su apellido" required> 
                    <label for="usuApellido" >Apellido</label>
                </div>
                <div class="registro_datos">
                    <input type="text" name="Cedula" id="usuCedula" placeholder="Ingrese su cedula" required> 
                    <label for="usuCedula" >Cedula</label>
                </div>
                <div class="registro_datos">
                    <input type="text" name="Correo" id="usuCorreo" placeholder="Ingrese su correo" required> 
                    <label for="usuCorreo" >Correo</label>
                </div>
                <div class="registro_datos">
                    <input type="text" name="Telefono" id="usuTelefono" placeholder="Ingrese su teléfono" required> 
                    <label for="usuTelefono" >Teléfono</label>
                </div>
                <div class="registro_datos">
                    <input type="text" name="Direccion" id="usuDireccion" placeholder="Ingrese su direccion" required> 
                    <label for="usuDireccion" >Direccion</label>
                </div>
                <div class="registro_datos">
                    <input type="password" name="Contraseña" id="usuContraseña" placeholder="Ingrese su contraseña" required> 
                    <label for="usuContraseña" >Contraseña</label>
                </div>
                <div class="registro_datos">
                    <input type="password" name="ConfirmarContraseña" id="usuConfirmarContraseña" placeholder="Confirme su contraseña" required> 
                    <label for="usuConfirmarContraseña" >Confirmar Contraseña</label>
                </div>
                <input type="submit" class="btn" name="Registrar" value="Registrar">
            </form>
                <p class="or">

        </div>

    </body>

    
</html>