<html>
<head>
    <title> Datos De Usuario</title>
</head>
<header>
    Inggresar Los Datos De Usuario
</header>
<form action='administrar_libro.php' method='post'>
    <table> 
        <tr>
            <td>Normbre:</td>
            <td> <input type='text' name='nombre'></td>
        </tr>
        <tr>   
             <td>Apellido:</td>
             <td><input type='text' name='apellido'></td>
        </tr> 
        <tr>
            <td>Cedula:</td>
            <td><input type='text' name='cedula'></td>
        </tr> 
        <input type='hidden' name='insertar' value='insertar'>
        <table>
            <input type='submit' value='guardar'>
            <a href="index.php">Volver</a> <br>
</form>

</html>