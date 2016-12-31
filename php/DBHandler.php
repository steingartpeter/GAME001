<?php
//<M>
//Ez a PHP file tartalmazza a MySQL adatbázoskapcsolta létrehozásának,
//kezelésének kódját.
//</M>
		
	define("DBSERVER", "localhost");
	define("DBUSER", "gamer01");
	define("DBPWRUSER", "root");
	define("DBPWRPWD", "an003722");
	//define("DBPWD", "abc123");
	define("DBPWD", "Abc123456!");
	define("DBNAME", "gamedb");
	//<nn>
	//Az Osztály ami magvalósítja a funkciók gyűjtőhelyét.
	//</nn>	
	class DBHandler{
		
		private $con = "";
		
		public function __construct($typ = "norm"){
		//<SF>
		//Az alap konstruktor függvény.
		//</SF>
			if($typ == "norm"){
				$this->con = mysqli_connect(DBSERVER, DBUSER,DBPWD);
				if(!$this->con){
					$msg = "";
					$msg = "<p>A csatlakozás sikertelen a következő paraméterekkel: <br/>";
					$msg .= "<ol><li>SERVER: " . DBSERVER . "</li>";
					$msg .= "<li>USER: " . DBUSER . "</li>";
					$msg .= "<li>PWD: " . DBPWD . "</li></ol>";
					$msg .= "A mySQL szerver hibaüzenete: <br/>";
					$msg .= mysqli_error($this->con);
					die($msg);
				}else{
					mysqli_select_db($this->con, DBNAME);
				}
			}elseif($typ == "super"){
				$this->con = mysqli_connect(DBSERVER, DBPWRUSER,DBPWRPWD);
				if(!$this->con){
					$msg = "";
					$msg = "<p>A csatlakozás sikertelen a következő paraméterekkel: <br/>";
					$msg .= "<ol><li>SERVER: " . DBSERVER . "</li>";
					$msg .= "<li>USER: " . DBUSER . "</li>";
					$msg .= "<li>PWD: " . DBPWD . "</li></ol>";
					$msg .= "A mySQL szerver hibaüzenete: <br/>";
					$msg .= mysqli_error($this->con);
					die($msg);
				}else{
					if(!mysqli_select_db($this->con, DBNAME)){
						$msg = "<p>A ".DBNAME." adatbázis kiválasztása siketelen!<p/>";
					}
				}
			}else{
				die("Az adatbázis csatlakozáshoz meg kell adni annak típusát!");
			}
		}
	
		public function getConn(){
		//<SF>
		//Egy lehetőség egy adatbáziskapcsolat lekérésére a szerverről. 
		//</SF>
			return $this->con;
		}
		
		public function insertUser($mail="defmail@xmail.net",$usr="",$pwd=""){
		//<SF>
		//Ez a függvény beszúr egy játékost a gamedb->tblusers táblájába.
		//</SF>
			$retArr = array();
			$msg = "";
			if($usr == "" || $pwd == ""){
				$retArr['FLG'] = "NOK";
				$msg = "<p class=\"ERRMsg\">";
				$msg .= "Vagy a felhsználó, vagy a jelszó nem volt megadva, így nem lehet létrehozni a felhasználót!";
				$msg .= "</p>";
				$retArr['DATA'] = $msg;
			}else{
				$pwd = strtoupper(hash("SHA512", $pwd));
				$qury = "INSERT INTO tblusers (loginname,usremail,password) ";
				$qury .= "VALUES ('". $usr . "','" . $mail . "','" . $pwd . "');";
				$res = mysqli_query($this->con, $qury);
				if(!$res){
					$retArr['FLG'] = "NOK";
					$msg = "Sajnos a felhasználó létrehozása nem volt sikeres: <br/>";
					$msg .= "Az adatbázisszerver hibaüzenete: <br/>";
					$msg .= mysqli_error($this->con) . "<br/>";
					$retArr['DATA'] = $msg;
				}else{
					$retArr['FLG'] = "OK";
					$msg = "A " . $usr .  " felhasználó sikeresen létrehozva az adatbázisban!<br/>";
					$retArr['DATA'] = $msg;				
				}
			}
			
			return $retArr;
		}
   	
}
?>