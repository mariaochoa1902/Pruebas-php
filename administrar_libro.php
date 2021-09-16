<?php
//incluye la clase Libro y crudLibro
require_once('crud_libro.php');
require_once('libro.php');

$crud= new CrudLibro();
$libro= new libro();

       //si el elemento insertar no viene nulo llama al crud e inserta un libro
       if(isset($_POST['insertar'])) {
           $libro->setNombre($_POST['nombre']);
           $libro->setAutor($_POST['autor']);
           $libro->setAnio_edicion($_POST['edicion']);
           //llama a la funcion insertar definida en el crud
           $crud->insertar($libro);
           header('Location: index.php');
           // si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
        }elseif(isset($_POST['actualizar'])){
            $libro->setId($_POST['id']);
            $libro->setNombre($_POST['nombre']);
            $libro->setAutor($_POST['autor']);
            $libro->setAnio_edicion($_POST['edicion']);
            $crud->actualizar($libro);
            header('Location: index.php');
    // si la variable accion enviada por GET es == 'e' llama al crud y elimina el libro
    }elseif ($_GET['action']=='e') {
        $crud->eliminar($_GET['id']);
        header('Location: index.php');
    // si la variable accion enviada por GET es == 'a', envia a la pagina actualizar.php
    }elseif($_GET['action']=='a'){
        header('location: actualizar.php');
    }
    ?>