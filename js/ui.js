//<M>
//Ez a file a felhasználói felület maniupulálásához szükséges JAVAScript kódot tartalmazza.
//Az itteni kódot (függvények, változók egy UI elemhez adjuk a SPGAME_160221 namspecben.
//</M>

//<nn>
//A biztonság kedvéért az alkalmazás névterét újradeklaráljuk.
//</nn>
var SPGAME_160221 = SPGAME_160221 || {};

//<nn>
//Létrehozunk egy ojektumot a view-hoz kapcsolódó fv.-ek tárolására.
//</nn>
var ui = ui || {};

//<nn>
//Létrhozunk egy ojektumot a view-hoz kapcsolódó fv.-ek tárolására.
//</nn>
SPGAME_160221.UI = ui || {};


ui.uiTesztFV = function () {
//<SF>
// Ez a  függvény a JQuery elérhetőséget teszteli...
//</SF>
    "use strict";
    window.console.log("Az UI tesztfüggvénye is OK...");
    window.console.log("*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*");
    window.console.log("Ez a függvény a SPGAME_160221 névtér UI névterének a része :) része, és elérhető!");
    window.console.log("*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*");
};

SPGAME_160221.chngPrgrBar = function (prgBrID, aktErtek) {
//<SF>
// Ez a  függvény egy adott id-jű progressbar aktuális értékét állítja be az aktErtek értékre.
// IN:
// @prgBrID string a progress bar id-je
// @aktErtek double a p.b. aktuális értéke
// OUT:
// -
//</SF>
    "use strict";
    prgBrID = (typeof prgBrID === 'undefined') ? 'tantargy-prgbr' : prgBrID;
    aktErtek = (typeof aktErtek === 'undefined') ? 19.5 : aktErtek;
    var pb = $("#" + prgBrID);
    //<nn>
    // DEBUG
    //</nn>
    window.console.log(pb);
    //<nn>
    // Ahhoz hogy változást lássunk a követkeő tulajdonságokat kell megváltoztatni:
    // - aria-valuenow="33.1"
    // - style="width:33.1%"
    // - text
    //</nn>
    $(pb).text(aktErtek + "%");
    $(pb).css({
       "width": aktErtek
    });
    $(pb).attr({
        "aria-valuenow": aktErtek
    });
};

SPGAME_160221.crtPrgrBar = function (cntnr,type,curVal,id) {
//<SF>
// Ez a függvény a cntnr elemben kapott HTML elembe szír be egy divet, 
// ami egy progress bar, ha van jelen bootstrap...
// IN:
// @cntnr a konténer HTML elem, amibe betesszük a proressbart
// @type a progress bar tipusa, alapértelmezett: -/success/info/warning/danger
// @curVal a progressbar jelenlegi értéke
// @ id érdemes egy id-t is beküldeni a progress bar-nak, hogy később el tudjuk érni a frissítéshez
// OUT:
// - 
//</SF>
        "use strict";
	id = id || "basePrgBar";
	curVal = curVal || 0;
	var inr_cntnr = $("#" + cntnr);
	var prgDiv = $(document.createElement("div"));
	prgDiv.addClass("progress");
	var barDiv = $(document.createElement("div"));
	$(barDiv).addClass("progress-bar progress-bar-" + type +" progress-bar-striped");
	$(barDiv).attr({
		"id":id,
		"role":"progressbar",
		"aria-valuenow":curVal + "%",
		"aria-valuemin":"0",
		"aria-valuemax":"100",
		"style":"width:"+curVal+"%"
	});
	$(barDiv).text(curVal+"%");
	prgDiv.append(barDiv);
	$(inr_cntnr).append(prgDiv);
};

SPGAME_160221.updtPrgrBar = function (barID,newVal) {
//<SF>
//Egy inputban kapott id-vel azonosított progress bar értékét álítja be a
// newVal értékben kapott értékte.
// IN:
// @barID a frisstíendő progress bar ID-je
// @newVal az új megjelenítendő érték.
//</SF>
	var prgBar = $("#" + barID);
	$(prgBar).attr({
		"aria-valuenow":newVal+"%",
		"style":"width:"+newVal+"%"
	});
	prgBar.text(newVal.toPrecision(4) + "%");
};

SPGAME_160221.Tester001 = function (id){
//<SF>
//A szokásos tesztelő függvények egyike...
//</SF>

	var curVal = $("#" + id).attr("aria-valuenow");
	curVal = Number(curVal.substr(0,curVal.length-1));
	console.log("curVal = " + curVal);
	curVal = curVal+1;
	var iv_id = setInterval(updt, 1000);
	function updt() {
		if(curVal < 90 && curVal > 10){
			curVal = curVal + Number(SPGAME_160221.crtRndDbl(-3,6));
			console.log("CURVAL: " + curVal);
			SPGAME_160221.updtPrgrBar(id,curVal);
		}else{
			clearTimeout(iv_id);
		}
	};
	//SPGAME_160221.updtPrgrBar(id,curVal);
};

SPGAME_160221.moveMsgDiv = function(msg, cls){
    //var b = $("body");
    
    var in_msg = msg || "+ 120 HP";
    var in_cls = cls || "flyBLUE";
    var dv =  $("<div id='flyinDiv001'>" + in_msg + "</div>");
    $("body").append(dv);
    dv.addClass("flyinDiv");
    dv.addClass(in_cls);
    dv.animate({opacity:0,top:0},1800,function(){console.log("ready");});
};
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	