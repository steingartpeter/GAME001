<?php

//<M>
//Ez a php lap gondoskodik az AJAX elérésől a mögöttes adatbázisnak.
//A rendsszer ugyanaz mint korábban.
//Az egész egy nagy SWITCH lesz, ami a a beküldött $_REQUEST['cmd']
//eleme szerint futtat le egy eljárást.
//</M>



if(isset($_REQUEST['cmd'])){
    $cmd = $_REQUEST['cmd'];
    switch ($cmd){
        //<nn>
        //TESZTELÉSHEZ:
        //</nn>
        case "teszt":
            echo cmdteszt(); 
        break;
        
        //<nn>
        //ISMERETLEN PARANCS ESETÉRE
        //</nn>
        default:
            echo ismrtlnCmd($cmd);
        break;
        
    }
}else{
    $retArray = array();
    $retArray['vlsz'] = "NOK";
    $retArray['data'] = "NO RESULT";
    print_r($retArray);
    echo(json_encode($retArray));
}


function cmdTeszt(){
//<SF>
//Teszteléshez...
//Tervek szerint minden funkció külön függvény lesz, ami már a visszadandó stringet
//adja eredményül, ami mehet vissza a javascripthez.
//</SF>

    $retArray = array();
    $retArray['vlsz'] = "OK";
    $retArray['data'] = "TESZT SIKERES!";
    return (json_encode($retArray));
}

function ismrtlnCmd($cmd){
// <SF>
// Ismeretlen parancs esetére, innent udjuk, hogy működik a hívás, csak még a 
// megfelelő PHP kód nincs megírva.
// </SF>

    //<nn>
    //Kell egy üres tömb az eredméynek.
    //Elméletileg két része lesz:
    //- egy flag (vlsz): OK/NOK, hogy jelezzük sikeres volt-e
    //- egy tömb (data): az adatokat tartalmazza
    //</nn>
    $retArray = array();
    
    //<nn>
    //A flag, ami jelzi, hogy az eredmény HIBA= NOK
    //</nn>
    $retArray['vlsz'] = "NOK";
    
    //<nn>
    //Az adataot tartalmazó elem ezúttal csak egy mondat, ami megmondja mi volt a probléma.
    //</nn>
    $retArray['data'] = "Sajnos a " . $cmd . " parancs ismeretlen, a PHP script nem tudja feldolgozni!";
    
    //<nn>
    //A tömböt json formátumba kódoljuk, majd stringkét visszaküldjük.
    //</nn>
    return (json_encode($retArray));    
}


?>
