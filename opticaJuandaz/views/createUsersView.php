<?php
class createUsersView
{
    function paginateCreateUsers()
    {
?>
        <form action="" method="POST">
                    <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
                <div class="error" id="error-nombre"></div>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" required>
                <div class="error" id="error-apellidos"></div>
            </div>
            <div class="form-group">
                <label for="email">Correo:</label>
                <input type="email" id="email" name="email" required>
                <div class="error" id="error-email"></div>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" required>
                <div class="error" id="error-direccion"></div>
            </div>
            <div class="form-group">
                <label for="sexo">Sexo:</label>
                <select id="sexo" name="sexo" required>
                    <option value="m">Masculino</option>
                    <option value="f">Femenino</option>
                </select>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
                <div class="error" id="error-password"></div>
            </div>
            <button type="submit">Registrarse</button>
        </form>
<?php
    }
}