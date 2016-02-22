//<M>
// JAVASCRIP kódok egy játék applikációhoz.
// Szerző: Steingart Péter
// Létrehozva: 2016-02-21
//</M>

//<nn>
// Egy saját névtér az alkalmazásnak :).
// Minden dolgot, ami már nem az incicializációs steuphoz kell, 
// ennek a namespacenek a részeként kell definiálni.
//</nn>
var SPGAME_160221 = SPGAME_160221 || {};

$(function () {
    "use strict";
    //<nn>
    //DEBUG
    //window.alert("JQuery = OK!");
    //DND OF DEBUG
    //</nn>
    
    //<nn>
    //Az $.ajaxSetup() hívással beállítjuk az alapértelmezett hívást, 
    //így nem lesz használhatatlan ajax hívásunk, valami választ mindig kapunk.
    //A konkrét ajax hívásoknál, majd módosítjuk a paramétereket, ha kell.
    //</nn>
    $.ajaxSetup({
        url: "php/PHP_AJAX.php",
        type: "POST",
        data: {
            "cmd": "teszt"
        }
    });
    
    //<nn>
    //Egy teszthívás...
    //Ez jó lesz mintának is.
    //</nn>
    $.ajax({
        complete: function (xhr, result) {
            if (result !== "success") {
                window.console.log("Az ajax teszthívás nem működött!");
                window.console.log("A válasz:" + xhr.responseText);
            } else {
                //<nn>
                //DEBUG
                //</nn>
                $("#ajax-Test-Result").html = xhr.responseText;
                window.console.log("SIKER:");
                window.console.log("A válasz:" + xhr.responseText);
                window.console.log("---------------------------------------------");
                //<nn>
                //END OF DEBUG
                //</nn>
                var htmlTxt = "", retObj = $.parseJSON(xhr.responseText);
                window.console.log("A visszadott JSON object:");
                window.console.log(retObj);
                if (retObj.vlsz === "OK") {
                    htmlTxt += "<p class=\"bg-success text-success\">AJAX hívás sikeres!</p>";
                    htmlTxt += "<p class=\"bg-primary\">Az AJAX válasz tartalma: <br/>";
                    htmlTxt += retObj.data + "</p>";
                    $("#ajax-Test-Result").append(htmlTxt);
                } else {
                    htmlTxt += "<p class=\"bg-error text-error\">AJAX hívás SIKERTELEN!</p>";
                    htmlTxt += "<p class=\"bg-primary\">Az AJAX válasz tartalma: <br/>";
                    htmlTxt += retObj.data + "</p>";
                    $("#ajax-Test-Result").append(htmlTxt);
                }
            }
        }
    });//AJAX VÉGE
    
    //<nn>
    // TESZTSZAKASZ
    //</nn>
    //SPGAME_160221.tesztFV();
    //var tstErtek = SPGAME_160221.crtRndDbl(0,100);
    //SPGAME_160221.chngPrgrBar("tantargy-prgbr", tstErtek);
    //<nn>
    // TESZTSZAKASZ VÉGE
    //</nn>
});//DOCUMENT.READY VÉGE


SPGAME_160221.tesztFV = function () {
    //<SF>
    // Ez a  függvény a JQuery elérhetőséget teszteli...
    //</SF>
    "use strict";
    window.console.log("MALO_NS tesztfüggvény meghívva...");
    window.console.log("*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*");
    window.console.log("Nagyon zsír a függvény nem a globális névtér része, és elérhető!");
    window.console.log("*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*");
};


    
SPGAME_160221.crtRndInt = function (min, max) {
//<SF>
// Ez a függvény egy véletlengenerált számot ad vissza a bemenő paraméterek között.
// IN:
// @min int a minimum érték
// @max int a maximum érték
// OUT:
// @rndNr int a generált random szám
//</SF>
    "use strict";
    var rndNr;
    min = (typeof (min) === 'undefined') ? 0 : min;
    max = (typeof (max) === 'undefined') ? 100 : max;
    rndNr = Math.floor(Math.random() * max + min);
    return rndNr;
};

SPGAME_160221.crtRndDbl = function (min, max) {
//<SF>
// Ez a függvény egy véletlengenerált számot ad vissza a bemenő paraméterek között.
// IN:
// @min int a minimum érték
// @max int a maximum érték
// OUT:
// @rndNr int a generált random szám
//</SF>
    "use strict";
    var rndNr;
    min = (typeof(min) === 'undefined') ? 0 : min;
    max = (typeof(max) === 'undefined') ? 100 : max;
    rndNr = ((Math.random() * max) + min).toPrecision(3);
    //<nn>
    // DEBUG
    //</nn>
    //console.log("A véletlengenerált dbl: " + rndNr);
    //<nn>
    // END OF DEBUG
    //</nn>
    return rndNr;  
};














