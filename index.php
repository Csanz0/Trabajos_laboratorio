<?php require_once('./includes/header.php');


?>
<header class="head">
    <h1>Libros añadidos</h1>
    <h2><a href="crear.php">Añadir nuevo libro</a></h2>
</header>
<main>
    <?php if(isset($_GET['message'])){?>
        <div class="modal">
            <p class="message"><?php echo $_GET['message']?></p>
            <button id="close">Cerrar</button>
        </div>
        <?php } ?>
    <?php if(isset($_GET['error'])){?>
        <div class="modal">
            <p class="error"><?php echo $_GET['error']?></p>
            <button id="close">Cerrar</button>
        </div>
        <?php } ?>
 
    <section class="booksView">
        <?php if(!empty($BOOKS)){?>

                <?php foreach($BOOKS as $bookName){?>
                    <article class="bookCard">
                        <div class="article-div">
                            <h3><?php echo $_COOKIE[$bookName]?></h3>
                            <p class="comment">
                                <?php echo $_COOKIE['value'] ?>
                            </p>
                        </div>
                    </article>

                 <?php } ?>
            <?php }else{ ?>
            <?php echo ""; }?>    
    </section>    
</main>
<?php require_once('./includes/footer.php')?>