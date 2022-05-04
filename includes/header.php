<?php 
    require_once __DIR__ . "/conection.php";
   date_default_timezone_set('America/Caracas');
  Class Books{
       public $name;
       public $comment;
       
            
       function getBook($name, $comment){
            $this->name = $name;
            $this->comment = $comment;
            $BOOKS[] = $this->name;
        } 

           function saveBook(){
               setcookie($this->name, $this->comment, 0, "/");
           }

           function deleteBook(){
               unset($_COOKIE[$this->name]);
               setcookie($this->name, null,-1, "/");
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
    
