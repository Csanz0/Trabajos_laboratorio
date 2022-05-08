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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itinerario de Libros</title>
    <link rel="stylesheet" href="./Actividad_I\sources\style.css">
</head>
<style>
  :root {
	--bgPrimary: rgba(1, 202, 205, 0.852);
	--bgSecondary: rgba(158, 251, 224, 0.636);
	--TextColor: rgb(36, 50, 50);
	--deleteColors: rgba(251, 93, 93, 0.917);
	--verifyColors: rgb(100,255,100);
	--moodColors: rgb(145, 152, 233);
}

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: Arial, Helvetica, sans-serif;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
}
body{
    width: 100vw;
    overflow-x: hidden;
    background: rgba(255,255,245,0.8);
}
/* head styles */
.head {
	background: var(--bgPrimary);
	color: var(--TextColor);
	font-size: 1.4rem;
	display: flex;
    padding: 0.5em;
	flex: row wrap;
    justify-content: space-around;
    align-items: center;
}
h1{
    flex: 1 1 auto;
    margin-left: 0.2em;
}
.head a {
    text-decoration: none;
    color: var(--verifyColors);
    font-size: 2rem;
    position: relative;
    flex: 1 1 auto;
    transition: 0.5s ease-in-out all
}
.head a:hover{
    color:rgb(100,255,00,0.7)
    
}
/* main Styles */
main{
    width: 100%;
    display: flex;
    flex-flow: column wrap;
    margin: 0.5em auto;
    justify-content: center;
    align-items: center;
}
/* Books View */
.booksView{
    width: 100%;
    height: 100%;
    display: flex;
    flex-flow: row wrap;
    justify-content: flex-start;
    align-items: center;
    padding: 0 0.5em;
}

.bookCard{
    width: 25%;
    min-height: 20vh;
    margin: 0.5em 0.2em;
    display: flex;
    padding: 0.5em;
    background: var(--bgSecondary);
    color: var(--TextColor);
}
.bookCard h3{
    font-size: 1.3rem;
}
.bookCard p{
    font-size: 1rem;
}
.links{
    display: flex;
    flex-flow: row wrap;
    justify-content: space-evenly;
    align-items: center;
}
/* form styles */
.container{
    display: flex;
    flex-flow: column wrap;
    justify-content: center;
    align-items: center;
}
.formContent{
    display: flex;
    flex-flow: column wrap;
    font-size: 1.2rem;
}
.formContent label{
    margin: 0.5em auto;
}
.formContent input[type='text']{
    border: none;
    border-bottom: 1px solid;
    border-radius: 0.5em;
    padding: 0.5em;
    background:var(--bgSecondary);
    font-size: 1.2rem;
    transition: 0.5s ease all;
}
.formContent textarea{
    padding: 0.5em;
    border-radius: 0.6em;
    transition: 0.5s ease all;
    background:var(--bgSecondary);
    font-size: 1.2rem;

}

.formContent input[type='text']:focus{
   background: rgba(50, 245, 190, 0.808);
}
.formContent .btn{
    border-radius: 0.5em;
    margin-top: 0.3em;
    padding: 0.2em;
    border: none;
    background: var(--bgPrimary);
    transition: 0.5s ease all;
}

.formContent .btn:hover{
    background: rgba(1, 255, 205);
}
footer{
    display: flex;
    flex-flow: column wrap;
    align-items: center;
}
footer p{
    flex: 1 1 auto;
    font-size: 1.2rem;
    font-weight: 300;
}
footer p span{
    font-weight: bold;
}
</style>
<body>
    
