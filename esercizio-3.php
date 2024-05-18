<?php
                                       // Esercizi sugli Array
/* 1. Costruire un array di 5 elementi inserendo in ogni elemento il valore del suo
indice. (array associativo ??) */

//$elementi = ['primo', 'secondo', 'terzo', 'quarto', 'quinto'];
//$trovo = array_search('quarto', $elementi);
//echo $elementi[1]; 
//var_dump($trovo);
//print_r($trovo);

/* $array = [
    "elemento1" => "primo",
    "elemento2" => "secondo",
    "elemento3" => "terzo",
    "elemento4" => "quarto",
    "elemento5" => "quinto"
];

echo $array["elemento3"]; */

$numeri = [];

for($i = 0; $i < 10; $i++){
    echo "inserisci un numero: ";
    $numeri[] = intval(trim(fgets(STDIN)));
}

print_r($numeri);

echo "\n"; 

/* 2. Create un array che contiene 10 numeri a piacere e sommate solo i numeri
pari.  (non fatto in classe foreach!!)*/


$numbers = [20, 55, 45, 70, 42, 25, 59, 47, 74, 46];
$sum = 0; // Inizializza la somma a 0

foreach ($numbers as $number) {
    if ($number % 2 == 0) { // Controlla se il numero è pari
        $sum += $number; // Aggiunge il numero alla somma se è pari
    }
}

echo "La somma dei numeri pari è: $sum"; // Stampa la somma dei numeri pari

echo "\n"; 

/* 3. Dato un array popolato con della frutta, cercate un frutto specifico e se è presente:
           stampate “Che bello posso fare la macedonia!” 
altrimenti stampante “Niente macedonia oggi!”. */ 

$frutta = ['arancia', 'mela', 'banana', 'fragola', 'lampone'];

if (in_array("lampone", $frutta)) {
    echo "Che bello posso fare la macedonia.";
} else {
    echo "Niente macedonia oggi!";
}
                                      
echo "\n"; 
                                // Esercizi sui dati presi da terminale

/* 1. Dato un array inizialmente vuoto inserite in esso 10 numeri da terminale. inserisco solo 3 x semplificare e provare la soluzione */

$array3 = [];
echo "Inserisci dopo il cursore 3 numeri da terminale";
$array3 = fgets(STDIN);

echo "hai inserito i seguenti dati da terminale $array3";
echo "\n"; 

/*soluzione 2 
$array4 = [];

for($i = 0; $i < 10; $i++){
    echo "Inserisci dopo il cursore 10 numeri da terminale";
        $array4[] = intval(trim(fgets(STDIN))); // trim toglie spazi vuoti 
    echo "hai inserito i seguenti dati da terminale $array4";  
    }
print_r(array4); */

echo "\n"; 

// empty - dà true per 0, per 0.0, false, array vuoto ($array[]); stringa vuota (""), null(è una variabile speciale), 

$var = [];
if(empty($var)){
    echo "variabile vuota";
}

echo "\n"; 

// isset - verifica se una variabile è definita e non è null

$variabile = ""; // ""; qui la variabile non contiene nulla è vuota, però è settata.
if(isset($variabile)){
    echo "la variabile è stata settata"; // anche se vuota
}

echo "\n"; 

$variabile1;  //qui la variabile non contiene alcun valore non è settata come sopra.

if(isset($variabile1)){
    echo "la variabile non è stata settata"; // perché non ho nulla di valore nella variabile 
}

echo "\n"; 

$variabile3 = null; // qui la variabile è settata in valore null 

if(is_null($variabile3)) {
    echo "la variabile è nulla";
} else {
    echo "la variabile non è nulla";
}
echo "\n"; 

/* 2. Inserite da terminale due numeri e calcolare la loro somma, la sottrazione,
la moltiplicazione o la divisione (per la divisione controllate che il divisore
sia diverso da zero, prima di effettuare l’operazione). 

fatto in classe */

echo "Inserisci il primo numero"; 
$numero1 = intval(trim(fgets(STDIN)));

echo "Inserisci il secondo numero"; 
$numero2 = intval(trim(fgets(STDIN)));

echo "inserisci l'operatore: ";
$operatore = trim(fgets(STDIN));

switch($operatore) {
    case '+':
        echo "somma: " .($numero1 + $numero2);
        break; //causa l'uscita immediata dallo switch
    case '-':
        echo "differenza: " .($numero1 - $numero2);
        break;
    case '*':
        echo "prodotto: " .($numero1 * $numero2);
        break;
    case '/':
        if($numero2 != 0) {
            echo "divisione: " .($numero1 / $numero2);
        } else {
            echo "non possiamo dividere";
        }        
        break;
    default:
        echo "hai inserito un carattere non valido!";
}


echo "\n"; 

// 3. Inserite una parola da terminale e verificate se è un palindromo.

$parola = trim(fgets(STDIN));

$palindromo = strrev($parola); 
 
if($parola == $palindromo ) {
    echo "E un palindromo!\n";
} else {
    echo "Non è un palindromo!\n";
 
}

echo "\n"; 

                                          //Esercizi con i form*

/* 1. Create un form di contatto che deve includere tre campi di input: nome, email e messaggio. Gli utenti devono compilare tutti e tre i campi e una volta inviato il form, verrà visualizzato un messaggio di conferma con il nome dell’utente. */ 

// vedi file form-contatto.html + form-contatto.php 

echo "\n"; 

/* 2. Create un form dove inserire un campo di input che corrisponde all’importo 
in dollari. Una volta inviato il form dovrà apparire l’importo convertito in euro. */

// vedi file form-conversione.html + conversione-valuta.php che non funzionano :) hahaha try again

echo "\n"; 

                                    // Esercizi per incentivare il problem solving

/* 1. Verificare se una stringa è vuota o meno utilizzando un istruzione condizionale. */

$stringa = "";

if(empty($stringa)) {
    echo "la stringa è vuota!";
}   else {
    echo "la tua stringa contiene $stringa.";
}

echo "\n"; 

/* 2. Dato un array di numeri ciclare su di esso usando il costrutto foreach! */

$array_num = [15, 12, 89, 55];

foreach($array_num as $num) {
    echo "i numeri array sono $num \n";
}

echo "\n"; 

/* 3. Sommare gli elementi di un array numerico usando il foreach. */

$array_numerico = [10, 22, 55];
$sum_array = 0;

foreach($array_numerico as $numeri){
    echo $sum_array += $numeri ."\n";
}

echo "La somma dei valori dell'array è: " . $sum_array ;


echo "\n"; 

/* 4. C’è una funzione PHP che consente di fare la somma degli elementi di un array?  si array_sum($numbers)*/ 

$array_numerico1 = [101, 225, 556];
$somma = array_sum($array_numerico1);
echo "La somma numeri array è $somma \n";

echo "\n"; 



?>