<?php require_once('./includes/header.php') ?>
<?php 
    $BOOK = new Books();
      if(isset($_POST['btnCreate']) && !empty($_POST['name']) && !empty($_POST['comment'])){
         
        $BOOK->setBook($_POST['name'],$_POST['comment']); 
        
        $query = "INSERT INTO libros(nombre, comentario) VALUES(:nombre, :comentario)";

        $stmt = $dataBase->prepare($query);

        $stmt->bindParam(":nombre",$BOOK->getBookName(),PDO::PARAM_STR);     

        $stmt->bindParam(":comentario",$BOOK->getBookComment(),PDO::PARAM_STR);

        $result = $stmt->execute();

        if ($result) {
            $message = "Libro añadido correctamente";
            header("Location: index.php?message=" .$message);
            exit();
        }else{
            $message = "Ha ocurrido un error. Por favor intente nuevamente";
            header("Location: index.php?message=" .$message);
            exit();
        }
      }


?>
<header class="head">
    <h2>Añade un nuevo libro!!!</h2>
    <a href="./index.php">Regresar</a>
</header>
<main>
    <section class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <div class="formContent">
                <label for="name">Ingrese el nombre del libro</label>
                <input type="text" minlength="3" placeholder='Ejem: El principito' name="name" id='name'>
            </div> 
            <div class="formContent">
                <label for="comment">Ingrese una pequeña descripción del libro</label>
                <textarea name="comment" id="comment" cols="40" rows="10" placeholder="Ingrese la descripción del libro" minlength="10" maxlength="100"></textarea>
            </div>
            <div class="formContent">
             <button type="submit" name="btnCreate" class="btn">Añadir</button>
            </div>
         </form>
    </section>
</main>
<?php require_once('./includes/footer.php') ?>