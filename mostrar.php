<?php
//incluye la clase libro y CrudLibro
require_once('crud_libro.php');
require_once('libro.php');
$crud=new CrudLibro();
$libro= new libro();
//obtiene todos los libros con el metodo mostrar la clase crud
$listalibros=$crud->mostrar();
?>

<html>
    <head>
        <title>Mostrar Libros</title>
    </head>
    <body>
        <table border=1>
            <head>
                <td>Nombre</td>
                <td>Autor</td>
                <td>Edicion</td>
                <td>Actualizar</td>
                <td>Eliminar</td>
            </head>
    </body>
         <?php foreach ($listaLibros as $libro) {?>
            <tr>
                <td><?php echo $libro->getNombre() ?></td>
                <td><?php echo $libro->getAutor() ?></td>
               
                <td><?php echo $libro->getAnio_edicion() ?></td>
            </tr>
            <?php }?>
         </body>
         </table>
         <a href="index.php">Volver</a>
         </body>
         </html>
