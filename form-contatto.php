<?php

// var_dump($_SERVER); Questo commento, se rimosso, permetterebbe di stampare tutte le informazioni contenute nell’array $_SERVER, che contiene informazioni sull’ambiente del server e sulla richiesta HTTP.

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // var_dump($_POST); se decommentati, permetterebbero di visualizzare i dati inviati tramite il form (var_dump($_POST);) o il valore specifico del campo ‘name’ (echo $_POST['name'];).
    // echo $_POST['name'];
    
    //sotto verifica se i campi ‘name’, ‘email’ e ‘message’ sono stati impostati e non sono vuoti. Questo è fatto per assicurarsi che l’utente abbia fornito tutti i dati richiesti prima di procedere.  
    //Se tutti i campi sono presenti e non vuoti, il codice assegna il valore di $_POST['name'] alla variabile $nome e stampa un messaggio di conferma.

    if((isset($_POST['name']) && !empty($_POST['name'])) && (isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['message']) && !empty($_POST['message']))) {

        $nome = $_POST['name'];
        echo "Grazie - $nome il tuo messaggio e stato inviato";
    } else {
        echo "Per inviare il messaggio devi inserire tutti i dati.";
    }
}

?>