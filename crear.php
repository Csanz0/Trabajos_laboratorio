<?php require_once('./includes/header.php') ?>
<?php 


      if(isset($_POST['btnCreate']) && !empty($_POST['name']) && !empty($_POST['commet'])){
        $BOOK->getBook($_POST['name'],$_POST['commet']); 
        
        $BOOK->saveBook();
        header("Location:index.php");
        die();
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
                <input type="text" minlength="3" placeholder='El principito'>
            </div> 
            <div class="formContent">
                <label for="comment">ingrese una pequeña descripción del libro</label>
                <textarea name="comment" id="comment" cols="40" rows="10" placeholder="Ingrese la descripción del libro" minlength="10" maxlength="100"></textarea>
            </div>
            <div class="formContent">
                <input type="submit" name="btnCreate">
            </div>
         </form>
    </section>
</main>
<?php require_once('./includes/footer.php') ?>