<?php require_once('./includes/header.php') ?>
<?php 

    if(isset($_GET['name'])){
        $name = $_GET['name'];
        $query = "SELECT * FROM libros WHERE nombre = :nombre";

        $stmt = $dataBase->prepare($query);

        $stmt->bindParam(":nombre", $name, PDO::PARAM_STR);

        $result = $stmt->execute();

        $book = $stmt->fetch(PDO::FETCH_OBJ);
    }

    if(isset($_POST['btnMod'])){
        $queryMod = "UPDATE libros set nombre = :nombre, comentario = :comentario WHERE nombre = :nombre2";

        $stmt = $dataBase->prepare($queryMod);

        $stmt->bindParam(":nombre", $_POST['name'], PDO::PARAM_STR);
        $stmt->bindParam(":comentario", $_POST['comment'], PDO::PARAM_STR);
        $stmt->bindParam(":nombre2", $name, PDO::PARAM_STR);

        $result = $stmt->execute();

        if($result){
            $message = "Libro modificado satisfactoriamente";

            header("Location: index.php?message=". $message);
            exit();
        }else{
             $message = "Ha ocurrido un error al intentar modificar el libro";

            header("Location: index.php?message=". $message);
            exit();
        }
     
    }


?>
<header class="head">
    <h1>Modificar</h1>
    <a href="index.php">Regresar</a>
</header>
<main>
    <div class="mod">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
         <div class="formContent">
                <label for="name">Ingrese el nombre del libro</label>
                <input type="text" minlength="3" name="name" value='<?php isset($_GET['name'])? print $book->nombre : "";?>' id='name'>
            </div> 
            <div class="formContent">
                <label for="comment">ingrese una pequeña descripción del libro</label>
                <textarea name="comment" id="comment" cols="40" rows="10" minlength="10" maxlength="100"> <?php isset($_GET['name'])? print $book->comentario : "";?></textarea>
            </div>
            <div class="formContent">
             <button type="submit" name="btnMod" class="btn">Modificar</button>
            </div>    
        </form>
    </div>    

</main>
<?php require_once('./includes/footer.php') ?>