<?php 
    require_once __DIR__ . "/conection.php";
   date_default_timezone_set('America/Caracas');
  Class Books{
       public $name;
       public $comment;
       
            
       function setBook($name, $comment){
            $this->name = $name;
            $this->comment = $comment;
        } 

        function getBookName(){
         return  $this->name;
        }

        function getBookComment(){
          return $this->comment;
        }
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itinerario de Libros</title>
</head>
<body>
    
