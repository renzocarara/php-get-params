<!-- Prima esercitazione in php: Censuratore
Nome repo: php-get-params
Creare una variabile che contiene del testo.
Leggere dal parametro in GET una badword da cercare all'interno del testo e censurarla,
ossia visualizzare a schermo un paragrafo con all'interno il testo in cui le occorrenze della badword
sono sostituite da tre "*". -->

<h1>Censuratore</h1>
<?php

// leggo la bad word dal parametro GET
$bad_word = $_GET['bad_word'];

// verifico se la badword ha un valore diverso da nullo
if ($bad_word !="") {

    echo '<h3>Badword letta: </h3>' . $bad_word;

    // testo da censurare
    $testo = "Lorem cuorum dolor sit amet, consectetur adipisicing elit.
    Voluptates quo minus blanditiis cuorum tenetur tempora delectus culpa,
     error esse quia magnam harum dicta quod quos placeat totam iste.
    Distinctio voluptates perferendis accusamus voluptatum sunt, in, id ex eum rerum quidem,
    doloribus suscipit cuorum est quam fugit ut dolore rem nemo aspernatur voluptatem laborum.
    A voluptate, placeat praesentium harum accusamus odio eligendi, labore cuorum,
    minus natus iure eveniet cuorum iusto optio cum. Quo rem cuorum
    repellendus quos minima, aliquam, aspernatur rerum maiores numquam,
    explicabo delectus! Harum deserunt, unde cupiditat
    neque cuorum omnis, ratione, nam molestias doloremque mollitia cuorum aliquam sed illo?";
    // stringa per censurare testo
    $censura = "<strong style='color: red; font-size:18px; vertical-align:middle;'>***</strong>";
    // informazioni aggiuntive sul testo
    $num_parole = str_word_count($testo);
    $num_caretteri = strlen($testo);
    $num_occorrenze = substr_count($testo, $bad_word);
    $testo_senza_spazi = str_replace(' ', '', $testo);
    $num_spazi = $num_caretteri - strlen($testo_senza_spazi);

    echo '<h3> Questo è il testo completo: </h3>' . $testo;
    echo '<h4>Informazioni aggiuntive:</h4>';
    echo 'Parole totali: <span style="color:blue;">' . $num_parole . '</span><br>';
    echo 'Caratteri totali: <span style="color:blue;">' . $num_caretteri . '</span><br>';
    echo 'Numero di caratteri "spazio" nel testo: <span style="color:blue;">' . $num_spazi . '</span><br>';
    echo 'Parole da censurare: <span style="color:red;">' . $num_occorrenze . '</span><br>';

    $testo_censurato = str_replace($bad_word, $censura, $testo);
    echo '<h3> Questo è il testo censurato: </h3><p>' . $testo_censurato . '</p><br>';

} else{
     echo '<h3>ATTENZIONE: manca la "badword"!</h3>';
}

?>
