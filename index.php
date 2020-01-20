<!-- Prima esercitazione in php: Censuratore
Nome repo: php-get-params
Creare una variabile che contiene del testo.
Leggere dal parametro in GET una badword da cercare all'interno del testo e censurarla,
ossia visualizzare a schermo un paragrafo con all'interno il testo in cui le occorrenze della badword
sono sostituite da tre "*". -->

<?php
echo '<h1>Censuratore</h1>';

// leggo la bad word dal parametro GET
$bad_word = $_GET['bad_word'];

if ($bad_word !="") {

    echo '<h3>badword letta: </h3>' . $bad_word;

    $testo="Lorem cuorum dolor sit amet, consectetur adipisicing elit.
    Voluptates quo minus blanditiis cuorum tenetur tempora delectus culpa,
     error esse quia magnam harum dicta quod quos placeat totam iste.
    Distinctio voluptates perferendis accusamus voluptatum sunt, in, id ex eum rerum quidem,
    doloribus suscipit cuorum est quam fugit ut dolore rem nemo aspernatur voluptatem laborum.
    A voluptate, placeat praesentium harum accusamus odio eligendi, labore cuorum,
    minus natus iure eveniet cuorum iusto optio cum. Quo rem cuorum
    repellendus quos minima, aliquam, aspernatur rerum maiores numquam,
    explicabo delectus! Harum deserunt, unde cupiditat
    neque cuorum omnis, ratione, nam molestias doloremque mollitia cuorum aliquam sed illo?";

    // echo '<h3> Questo è il testo completo: </h3>' . $testo;

    $testo_censurato = str_replace($bad_word, "***", $testo);
    echo '<h3> Questo è il testo censurato: </h3><p>' . $testo_censurato . '</p>';

} else{
     echo '<h3>ATTENZIONE: manca la "badword"!</h3>';
}

?>
