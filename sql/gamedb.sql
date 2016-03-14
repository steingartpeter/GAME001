-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Hoszt: 127.0.0.1
-- Létrehozás ideje: 2016. Már 14. 10:23
-- Szerver verzió: 5.6.21
-- PHP verzió: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Adatbázis: `gamedb`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tblstats`
--

CREATE TABLE IF NOT EXISTS `tblstats` (
`statid` int(11) NOT NULL,
  `statname` varchar(100) COLLATE utf8_bin NOT NULL,
  `statdesc` varchar(500) COLLATE utf8_bin NOT NULL DEFAULT 'Ide kerül a jellemző rövid leírása...',
  `statintval` int(11) DEFAULT '0',
  `statdefval` int(11) DEFAULT '10',
  `statmaxval` int(11) DEFAULT '65535',
  `ststikon` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '/GAME001/pix/ui/icons/statIcon_base_128.jpg'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- A tábla adatainak kiíratása `tblstats`
--

INSERT INTO `tblstats` (`statid`, `statname`, `statdesc`, `statintval`, `statdefval`, `statmaxval`, `ststikon`) VALUES
(1, 'Életerő', 'Ennyi életerőpontod, van amit elveszíthetsz, mielőtt meghalna a karaktered.', 150, 100, 0, '/GAME001/pix/ui/icons/eletero_icon128.jpg'),
(2, 'Varázserő', 'Varázslataiadet ebből táplálhatod, ha értéke 0 nem tudsz varázsolni.', 100, 50, 0, '/GAME001/pix/ui/icons/statIcon_base_128.jpg'),
(3, 'Munkakaedv', 'Ha nincs munkakedv nincs munka. A gyártás ezt az erőforrást használja', 100, 50, 0, '/GAME001/pix/ui/icons/statIcon_base_128.jpg'),
(4, 'Vitalitás', 'Testi eddzettséges, ami nüveli az életerőpontok számát.', 10, 10, 50000, '/GAME001/pix/ui/icons/statIcon_base_128.jpg'),
(5, 'Intelligencia', 'Növeli a varászerő pontok számát, és a varázslatok hatékonyságát.', 10, 10, 50000, '/GAME001/pix/ui/icons/statIcon_base_128.jpg'),
(6, 'Kreativitás', 'A maximális munkaerőt fejleszti', 10, 10, 50000, '/GAME001/pix/ui/icons/statIcon_base_128.jpg'),
(7, 'Szerencse', 'Mindenre kis befolyással van az akciók sikerétől a ritka erőforrások megtalálásáig.', 1, 1, 50000, '/GAME001/pix/ui/icons/statIcon_base_128.jpg'),
(8, 'Védelem', 'Mennyire vagy védett az ellenfelek által okozott sérülések ellen.', 1, 1, 50000, '/GAME001/pix/ui/icons/statIcon_base_128.jpg'),
(9, 'Támadás', 'Mennyire sikeres a támadások az ellenfelek ellen.', 1, 1, 50000, '/GAME001/pix/ui/icons/statIcon_base_128.jpg'),
(10, 'Kritikus esély', 'Mekkora esélyed van a kritikus sikerre harcban, vagy gyártásban-', 1, 1, 50000, '/GAME001/pix/ui/icons/statIcon_base_128.jpg'),
(11, 'Kritikus mennyiség', 'Mennyivel nagyobb a kritikus találat/siker esetén a sérülés/haladás.', 1, 1, 50000, '/GAME001/pix/ui/icons/statIcon_base_128.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tblusers`
--

CREATE TABLE IF NOT EXISTS `tblusers` (
`usrid` int(11) NOT NULL,
  `loginname` varchar(50) COLLATE utf8_bin NOT NULL,
  `usremail` varchar(150) COLLATE utf8_bin NOT NULL,
  `password` char(128) COLLATE utf8_bin NOT NULL DEFAULT 'C70B5DD9EBFB6F51D09D4132B7170C9D20750A7852F00680F65658F0310E810056E6763C34C9A00B0E940076F54495C169FC2302CCEB312039271C43469507DC',
  `usrpicurl` varchar(155) COLLATE utf8_bin DEFAULT '/GAME001/pix/heroPrtrs/frame7.png'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- A tábla adatainak kiíratása `tblusers`
--

INSERT INTO `tblusers` (`usrid`, `loginname`, `usremail`, `password`, `usrpicurl`) VALUES
(4, 'Gamer001', 'gamer001@gmail.net', 'C70B5DD9EBFB6F51D09D4132B7170C9D20750A7852F00680F65658F0310E810056E6763C34C9A00B0E940076F54495C169FC2302CCEB312039271C43469507DC', '/GAME001/pix/heroPrtrs/frame7.png'),
(11, 'gamer002', 'gamer02@tstmail.net', 'C70B5DD9EBFB6F51D09D4132B7170C9D20750A7852F00680F65658F0310E810056E6763C34C9A00B0E940076F54495C169FC2302CCEB312039271C43469507DC', '/GAME001/pix/heroPrtrs/frame7.png'),
(12, 'jozKovacs', 'kjozsi@tstmail.net', '2AABE4B3C5CA0097DF2814B29D69E7DC301FAE94AEE64DBEC6FD240B0C6D097C72C61597FBCE56B9F55ABD7F71C2967E488CF1A46215BD690BF94E5D562075A0', '/GAME001/pix/heroPrtrs/frame7.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblstats`
--
ALTER TABLE `tblstats`
 ADD PRIMARY KEY (`statid`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
 ADD PRIMARY KEY (`usrid`), ADD UNIQUE KEY `uc_usrname` (`loginname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblstats`
--
ALTER TABLE `tblstats`
MODIFY `statid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
MODIFY `usrid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
