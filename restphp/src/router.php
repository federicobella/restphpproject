<?php
include ('../model/object.php');
//-----------------------------------------Functions to define method behavior---------------------------------//
function get($uri){
    $headers = apache_request_headers();
    switch ($uri) {
        case '/':
            index();
            break;
        case '/listaEsercenti':
            getListaEsercenti($headers);
            break;
        case '/utenti':
            getUtenti($headers);
            break;
        case '/questionari':
            getQuestionari($headers);
            break;
        case '/stampaQuery':
            getQuery($headers);
        default:
            notFound();
            break;

    }
}

function post($uri){
    $headers = apache_request_headers();
    switch ($uri) {
        case '/qualcosa':
            postQualcosa($headers);
            break;

        default:
            notFound();
            break;
    }
}

function notFound(){
    http_response_code(404);
    echo "404 Classico Not Found";
}

function badRequest(){
    http_response_code(400);
    echo "400 Method not implemented";
}

//-----------------------------------------Functions to get the work done---------------------------------//

function getListaEsercenti($headers){

    $r = esercenti();
    if(strpos($headers["Accept"], 'html') !== false){
        require __DIR__ . '/../view/visualizza.php';
        visualizzaEsercente($r);
    }else{
        echo $r;
    }
}
function getUtenti($headers){

    $r = utenti();
    if(strpos($headers["Accept"], 'html') !== false){
        require __DIR__ . '/../view/visualizza.php';
        visualizzaUtente($r);
    }else{
        echo $r;
    }
}
function getQuestionari($headers){

    $r = questionari();
    if(strpos($headers["Accept"], 'html') !== false){
        require __DIR__ . '/../view/visualizza.php';
        visualizzaQuestionario($r);
    }else{
        echo $r;
    }
}


function postQualcosa(){
    var_dump($_POST);
    //Qui faccio qualcosa con il coso del post
    echo "<br/>ho fatto la post\n";
}
 function getQuery ($headers)
 {
     $k = utenti();
     if (strpos($headers["Accept"], 'html') !== false) {
         require __DIR__ . '/../view/visualizza.php';
         stampaQuery($k);

     }
 }

?>