<!-- Prima esercitazione in php: Censuratore
Nome repo: php-get-params
Creare una variabile che contiene del testo.
Leggere dal parametro in GET una badword da cercare all'interno del testo e censurarla,
ossia visualizzare a schermo un paragrafo con all'interno il testo in cui le occorrenze della badword
sono sostituite da tre "*". -->
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" /> -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script> -->
    <link rel="stylesheet" href="style.css">
    <title>Boolean clss#8 - PHP - censuratore</title>
</head>

<body>

    <header>
        <h1>Censuratore</h1>
    </header>

    <main class="container">

        <?php

        // leggo la bad word dal parametro GET
        $bad_word = $_GET['bad_word'];
        echo $bad_word;

        // verifico se la badword ha un valore diverso da nullo
        if ($bad_word !="") {
            echo '<h3 id="badword-heading">Badword letta: </h3>  <span id="badword">' . $bad_word . '</span>';

            // testo da censurare
            $testo = "Lorem cuorum dolor sit amet, consectetur adipisicing elit. Voluptates quo minus blanditiis cuorum tenetur tempora delectus culpa, error esse quia magnam harum dicta quod quos placeat totam iste. Distinctio voluptates perferendis accusamus voluptatum sunt, in, id ex eum rerum quidem, doloribus lorem cuorum est quam fugit ut dolore rem lorem aspernatur voluptatem laborum. A lorem, placeat praesentium harum accusamus odio eligendi, labore cuorum, minus natus iur cuorum";
            // $testo_originale = $testo;
            // stringa per censurare testo
            $censura = "<strong id='asterischi'>***</strong>";
            // informazioni aggiuntive sul testo
            $num_parole = str_word_count($testo);
            $num_caratteri = strlen($testo);
            // conto tutte le occorenze, senza considerare il case sensitive
            $num_occorrenze = substr_count(strtolower($testo), $bad_word);
            echo $num_occorrenze;
            // $num_spazi = $num_caratteri - strlen($testo_senza_spazi);

            // // trasformo il testo (stringa) in un array
            // $array_testo = str_word_count($testo, 2);
            // // creo un array associativo, in cui le chiavi sono le parole del testo e il valore il numero di occorrenze di quella parola
            // $array_occorrenze = array_count_values($array_testo);
            //
            // $occorrenza_minima = 2; // minimo numero di occorrenze per considerare la parola frequente
            // foreach($array_occorrenze as $parola => $quante_volte) {
            //
            //     if ($quante_volte >= $occorrenza_minima) {
            //         // scrivo in un nuovo array solo gli elementi che hanno un valore >= a $occorrenza_minima
            //         array_push($array_parole_frequenti[]= [$parola => $quante_volte]);
            //     }
            // }


            // echo 'Parole più frequenti (almeno ' . $occorrenza_minima . ' presenze): <br>';
            // echo '<pre>';
            // print_r($array_parole_frequenti);
            // echo '</pre>';

            if ($num_occorrenze > 0) {
                // uso la versione no case sensitive per individuare tutte le occorrenze indipendetemente da maiuscole/minuscole
                $testo_censurato = str_ireplace($bad_word, $censura, $testo, $contatore);

                echo '<h3> Questo è il testo completo: </h3>' . $testo;
                echo '<h3> Questo è il testo censurato: </h3><p>' . $testo_censurato . '</p><br>';
                echo '<h4>Informazioni aggiuntive:</h4>';
                echo 'Parole totali: <span>' . $num_parole . '</span><br>';
                echo 'Parole censurate: <span id="num-parole-censurate">' . $contatore . '</span><br>';
            } else {
                echo '<h3>Non ci sono bad word da censurare</h3>';
            }
        } else {
            echo '<h3>ATTENZIONE: manca la "badword"!</h3>';
        }

        ?>

    </main>

    <!-- <script id="template-NAME" type="text/x-handlebars-template"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <!-- popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
    <!-- js bootstrap -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    <!-- <script src="public/js/main.js"></script> -->
</body>

</html>
