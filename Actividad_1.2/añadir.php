<?php require_once('./includes/header.php'); ?>
<?php require_once('./includes/vars.php') ; 

    ?>
<header class="head">
<h2>Libros añadidos recientemente</h2>
    <div class="container">
      <a href="vendidos.php" class="link">Libros vendidos</a>
    </div>
    
    <div class="container">
      <a href="index.php" class="link">Regresar</a>
    </div>
</header>
<main>
    <h2>Libros añadidos recientemente</h2>
    <table>
        <thead>
            <th>Nombre del libro</th>

            <th>Genero</th>

            <th>Precio del libro</th>
        </thead>
        <tbody>

            <?php foreach($BOOKS as $libro => $value) {  ?>
                <tr>
                    <td><?php print $value->setName()?></td>
                    <td><?php echo $value->setGender()?></td>
                    <td><?php echo $value->setPrice() ."$"?></td>
                </tr>
                <?php }?>

        </tbody>
    </table>
</main>
<?php require_once('./includes/footer.php'); ?>