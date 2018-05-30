<?php
function visualizzaEsercente($variabile){
    ?>
    <?php require __DIR__ . '/parcials/header.php'; ?>
    <body>
    <?php while ($row = mysqli_fetch_array($variabile, MYSQLI_ASSOC)) {

        echo ' 
<u1  style="float: left; padding: 30px"> 
<div class="myTable">
            <div class="product-item">
                <form method="post" style="text-align: center" action="" >
                    <div style="color: blue"> <strong>ID:</strong> ' . $row['id_amministratore'] . '</div>
                    <div style="color: darkviolet"><strong>Nome:</strong> ' . $row['nome'] . '</div>
                    <div style="color: red"><strong>E-Mail:</strong> ' . $row['email'] . '</div>
                </form>
            </div>
            
</div></u1>';
    } ?>

    </body>
    </html>
<?php  }
function visualizzaUtente($variabile){
    ?>
    <?php require __DIR__ . '/parcials/header.php'; ?>
    <body>
    <?php while ($row = mysqli_fetch_array($variabile, MYSQLI_ASSOC)) {

        echo ' 
<u1  style="float: left; padding: 30px"> 
<div class="myTable">
            <div class="product-item">
                <form method="get" style="text-align: center" action="" >
                    <div style="color: black"> <strong>ID Utente:</strong> ' . $row['id_utente'] . '</div>
                    <div style="color: black"><strong>E-Mail:</strong> ' . $row['email'] . '</div>
                    <div style="color: black"><strong>Punti Accumulati:</strong> ' . $row['punti_accumulati'] . '</div>
                </form>
            </div>
            
</div></u1>';
    } ?>

    </body>
    </html>
<?php  }
function visualizzaQuestionario($variabile){
    ?>
    <?php require __DIR__ . '/parcials/header.php'; ?>
    <body>
    <?php while ($row = mysqli_fetch_array($variabile, MYSQLI_ASSOC)) {

        echo ' 
<u1  style="float: left; padding: 30px"> 
<div class="myTable">
            <div class="product-item">
                <form method="get" style="text-align: center" action="" >
                    <div style="color: black"> <strong>ID Questionario:</strong> ' . $row['id_questionario'] . '</div>
                    <div style="color: black"><strong>ID Amministratore:</strong> ' . $row['id_amministratore'] . '</div>
                     <div style="color: black"><strong>Nome:</strong> ' . $row['nome'] . '</div>
                    <div style="color: black"><strong>Punti:</strong> ' . $row['punti'] . '</div>
                    <div style="color: black"><strong>Metodo di invio:</strong> ' . $row['metodo_invio'] . '</div>
                </form>
            </div>
            
</div></u1>';
    } ?>


    </body>
    </html>
<?php  }
function stampaQuery($key){


    while ( $row = mysqli_fetch_array($key, MYSQLI_ASSOC)){
        echo'<div>
 <div style="background-color: red; font-size: large">'. $row ['id_utente'].'</div>
  <div style="background-color: red; font-size: large">'. $row ['email'].'</div>
</div>';
    }

};
?>



