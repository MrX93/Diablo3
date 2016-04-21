-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2016 at 04:07 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diablophp2`
--

-- --------------------------------------------------------

--
-- Table structure for table `anketa`
--

CREATE TABLE IF NOT EXISTS `anketa` (
`idAnketa` int(11) NOT NULL,
  `Naziv` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `Aktivna` int(11) NOT NULL,
  `vreme_unosa` int(11) DEFAULT NULL,
  `korisnik_id` int(11) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `anketa`
--

INSERT INTO `anketa` (`idAnketa`, `Naziv`, `Aktivna`, `vreme_unosa`, `korisnik_id`) VALUES
(1, 'Koji vam je omiljeni lik?', 1, 1458053620, 1);

-- --------------------------------------------------------

--
-- Table structure for table `anketaodgovori`
--

CREATE TABLE IF NOT EXISTS `anketaodgovori` (
`idAnketaOdgovori` int(11) NOT NULL,
  `Odgovor` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `Rezultat` int(11) NOT NULL,
  `idAnketa` int(11) NOT NULL,
  `vreme_unosa` int(11) DEFAULT NULL,
  `korisnik_id` int(11) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `anketaodgovori`
--

INSERT INTO `anketaodgovori` (`idAnketaOdgovori`, `Odgovor`, `Rezultat`, `idAnketa`, `vreme_unosa`, `korisnik_id`) VALUES
(1, 'Varvarin', 31, 1, NULL, NULL),
(2, 'Monah', 51, 1, 1458051354, 1),
(3, 'Lovac na Demone', 68, 1, NULL, NULL),
(4, 'Carobnjak', 50, 1, 1458052407, 1),
(5, 'Vrac', 31, 1, 1458054113, 1);

-- --------------------------------------------------------

--
-- Table structure for table `galerija`
--

CREATE TABLE IF NOT EXISTS `galerija` (
`id_slike` int(11) NOT NULL,
  `veca_slika` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `id_lika` int(11) NOT NULL,
  `vreme_unosa` int(11) DEFAULT NULL,
  `korisnik_id` int(11) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=77 ;

--
-- Dumping data for table `galerija`
--

INSERT INTO `galerija` (`id_slike`, `veca_slika`, `id_lika`, `vreme_unosa`, `korisnik_id`) VALUES
(1, 'monah1.jpg', 2, 1458052423, 1),
(52, 'monah2.jpg', 2, NULL, NULL),
(53, 'monah3.jpg', 2, NULL, NULL),
(5, 'monah5.jpg', 2, NULL, NULL),
(6, 'monah6.jpg', 2, NULL, NULL),
(7, 'monah7.jpg', 2, NULL, NULL),
(8, 'monah8.jpg', 2, NULL, NULL),
(9, 'monah9.jpg', 2, NULL, NULL),
(10, 'vrac1.jpg', 3, NULL, NULL),
(11, 'vrac2.jpg', 3, NULL, NULL),
(12, 'vrac3.jpg', 3, NULL, NULL),
(13, 'vrac4.jpg', 3, NULL, NULL),
(14, 'vrac5.jpg', 3, NULL, NULL),
(15, 'vrac6.jpg', 3, NULL, NULL),
(16, 'vrac7.jpg', 3, NULL, NULL),
(17, 'vrac8.jpg', 3, NULL, NULL),
(18, 'vrac9.jpg', 3, NULL, NULL),
(19, 'lovac-na-demone1.jpg', 4, NULL, NULL),
(20, 'lovac-na-demone2.jpg', 4, NULL, NULL),
(21, 'lovac-na-demone3.jpg', 4, NULL, NULL),
(22, 'lovac-na-demone4.jpg', 4, NULL, NULL),
(23, 'lovac-na-demone5.jpg', 4, NULL, NULL),
(24, 'lovac-na-demone6.jpg', 4, NULL, NULL),
(25, 'lovac-na-demone7.jpg', 4, NULL, NULL),
(26, 'lovac-na-demone8.jpg', 4, NULL, NULL),
(27, 'lovac-na-demone9.jpg', 4, NULL, NULL),
(28, 'carobnjak1.jpg', 5, NULL, NULL),
(29, 'carobnjak2.jpg', 5, NULL, NULL),
(30, 'carobnjak3.jpg', 5, NULL, NULL),
(31, 'carobnjak4.jpg', 5, NULL, NULL),
(32, 'carobnjak5.jpg', 5, NULL, NULL),
(33, 'carobnjak6.jpg', 5, NULL, NULL),
(34, 'carobnjak7.jpg', 5, NULL, NULL),
(35, 'carobnjak8.jpg', 5, NULL, NULL),
(36, 'carobnjak9.jpg', 5, NULL, NULL),
(37, 'varvarin1.jpg', 6, NULL, NULL),
(38, 'varvarin2.jpg', 6, NULL, NULL),
(39, 'varvarin3.jpg', 6, NULL, NULL),
(40, 'varvarin4.jpg', 6, NULL, NULL),
(41, 'varvarin5.jpg', 6, 1458051746, 1),
(42, 'varvarin6.jpg', 6, NULL, NULL),
(43, 'varvarin7.jpg', 6, NULL, NULL),
(44, 'varvarin8.jpg', 6, NULL, NULL),
(45, 'varvarin9.jpg', 6, 1457722604, 1),
(68, 'monah4.jpg', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE IF NOT EXISTS `korisnici` (
`id_korisnik` int(11) NOT NULL,
  `nadimak` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `meil` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sifra` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_uloga` int(11) NOT NULL,
  `vreme_unosa` int(11) DEFAULT NULL,
  `korisnik_id` int(11) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id_korisnik`, `nadimak`, `meil`, `sifra`, `id_uloga`, `vreme_unosa`, `korisnik_id`) VALUES
(1, 'admin', 'dzoniva@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, 1458056033, 1),
(2, 'mrka', 'yupica11@yahoo.com', '716b64c0f6bad9ac405aab3f00958dd1', 2, 1458052947, 1),
(3, 'Ribac', 'ribac@gmail.com', '006d8df1789b5e80419258a3bf98b09d', 2, NULL, NULL),
(4, 'Caca', 'caca@gmail.com', 'd2104a400c7f629a197f33bb33fe80c0', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `likovi`
--

CREATE TABLE IF NOT EXISTS `likovi` (
`id_lika` int(11) NOT NULL,
  `ime_lika` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tekst_pocetna` text COLLATE utf8_unicode_ci NOT NULL,
  `tekst` text COLLATE utf8_unicode_ci NOT NULL,
  `slika_lik_pocetna` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `dir_za_smestanje_slika` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_diva` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `vreme_unosa` int(11) DEFAULT NULL,
  `korisnik_id` int(11) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `likovi`
--

INSERT INTO `likovi` (`id_lika`, `ime_lika`, `tekst_pocetna`, `tekst`, `slika_lik_pocetna`, `video`, `dir_za_smestanje_slika`, `id_diva`, `vreme_unosa`, `korisnik_id`) VALUES
(1, 'pocetna', '', '<h2>Diablo III</h2>\n						<p> Diablo III je akciona role-playing video igrica, koju je osmislila i izdala kompanija Blizzard Entertainment.\n						<br/>Na po?etku va?eg putovanja treba da izaberete jednog od pet klasa mo?nih heroja, od kojih svaka ima svoju misterioznu pri?u kako je nastala, \n						i razli?ite sposobnosti i mogu?nosti. Koju god klasu da izaberete va? heroj ?e tokom vremena pobolj?ati svoje sposobnosti i dodatno oja?ati.\n						<br/>U toku igre nai?i ?ete na veliki broj mo?nih predmeta, koji ?e vam pomo?i da pre?ivite i budete ja?i. DiabloIII nudi do sada nevi?enu dubinu, u vidu svojih nasumi?no generisanih svetova. Svaki put kada u?ete u uto?ista, nedirnute divljine ili drevne pe?ine nai?i ?ete na mnogo razli?itih i jedinstvenih vrsta neprijatelja,nasumi?ne dogadjaje, i razne dragocene predmete.</p>', '', 'WcMbMQVfLwM', 'slideshow', '', NULL, NULL),
(2, 'monah', '<h3>Monah</h3>\n							<p>Sa nadljudskim refleksima Monah ve?to izbegava opasne napade neprijatelja i zadaje niz smrtonosnih udaraca neverovatnom brzinom.<br/>', '<h2>Monah</h2>\n\n						<p> Monasi koji veruju u boginju Saptev treniraju svoje telo kako bi prevenstveno postali  sveti ratnici  zemlje Ivgoroda. Unutar svetili?ta Patriarha, monasi su podvrgnuti  surovim fizi?kim i duhovnim treninzima, putem kojih dokazuju svoju posve?enost i dobijaju neverovatan fokus.Dnevne ritualne molitve poma?u monasima da pro?iste svoje du?e i nadvladaju zlo koje le?i u srcima svih ljudi. U potrazi za savr?enstvom borila?kih ve?tina, oni tako?e  unapre?uju  njihovu legendarnu ranvnote?u  i  bistrinu uma, sposobnosti koje  im omogu?avaju da usavr?e i borbu bez oru?ja i upotrebu razli?itih vrsta oru?ja.\n\n						Posle  pripreme koja traje skoro ceo ?ivot, miropomazani monasi imaju dozvolu da  napuste manastirske odaje da bi slu?ili pod okriljem Patriarha. Grb na njihovim ?elima isti?e da su oni borci do poslednjeg atoma snage, da su uspe?ni i da kao takvi predstavljaju stubove svog dru?tva.Monasi implementiraju volju hilajdu i jednog Boga Ivgoroda u svaki korak i svaki udarac.</p>\n\n						<h2>IZVOR MO?I:DUH</h2> <p>Da bi porazili nadljudska zla sa kojim se susre?u, monasi se oslanjaju na unutra?nje rezerve Duha, izvora  snage koji oslikava  njihovu li?nu vestinu i obuku. \n\n						Duh se polako obnavlja. Regenri?e se na dva na?ina ? posebnim ve?tinama i napadima, ili izvodjenjem uspe?nih kombinacija napada odjednom. Monasi koji oprezno pove?u nekoliko  uspe?nih napada za redom, mogu da nastave skoro beskrajni niz udaraca koriste?i Duh. \n\n						Duh je dragocen izvor snage, ali prevelika potro?nja ove sile dozvoljava monku da izvede lukava izbegavanja udaraca i odbrambene pokrete, kao i veoma mo?ne zavr?ne udarce kojima ubija ?udovista.  Zahvaljujuci fizi?kom savr?enstvu moanha i njegovom velikom talentu za borila?ke ve?tine, oni mogu da zadaju koliko god hoce poja?anih udaraca sve dok im rezerve Duha to dozvoljavaju- bez ?ekanja da im se sposobnost regeneri?e. </p>\n\n						<h2>OPREMA </h2> <p> Mona?ko kori??enje borila?kih ve?tina ukulju?uje i  upotrebu posebnog oru?ja. ?ak su i mona?ke gole ruke  smrtonosne, ali one mogu biti potpomognute sa oru?ejm kao ?to je ?katar?, bode? koji se dr?i sa jednom ili obe ?ake i zabija se direktno u neprijatelja. Monasi su takodje jedni heroji koji su obu?eni da koriste daibo ? savijeno duga?ko drvo koje se krositi za razbijanje lobanja i odbijanje napada.</p>', 'pocetna_monah.png', 'Te8t3UPv7yI', 'monah', 'first', NULL, NULL),
(3, 'vrac', '<h3>Vra?</h3>\n							<p>Vra? izvodi rituale pomo?u kojih terori?e neprijatelje,i priziva zastra?uju?e pratioce koji sluze da rastrgnu neprijatelja.<br/>', '<h2>Vra?</h2>\n\n						<p>Samo odabranih nekoliko mu?akraca i ?ena iz plemena Umbaru mogu da da se uzdignu do blagoslovenog statusa vra?a, zato ?to moraju da poseduju i iskustvo u borbi i talenat za komuniciranje sa duhovima. Drugopomenutu sposobnost  imaju samo oni koji su se rodili u dodiru sa Neoformljenom Zemljom ? nevidljivim svetom za koji  ?lanovi plmena Umbaru veruju da  je nastanjen duhovima mrtvih posle napu?tanja Uto?i?ta. \n\n						Kada ?ovek umre, vra?evi ose?aju ne?to za ?ta smatraju da je ?in u kojem du?a napu?ta njegovo mrtvo telo.  I kada nesre?a ili genocid po?alje u  smrt stotine ljudi odjednom, vra?evi osete njihvo drhtanje  i vrisak sa onog sveta. \n\n						Vra?evi ne mogu da prikriju u?i kako ne bi ?uli glasove duhova. Kako zvukovi nemira rastu, oni odlu?uju ?ta ?e izabrati. Ili ce vratiti ravnote?u izmedju njihvog sveta i Neoformljene Zemlje ili ce gledati mu?enje i smrt svog pokolenja  do kraja svog ?ivota?i posle.</p>\n\n						<h2>IZVOR MO?I:MANA</h2> <p> Uro?ena veza vra?eva sa Neoformljenom Zemljom omogu?ava im da zarone u dubok bunar duhovne energije koji se zove Mana.\n\n						Mana je veliki izvor mo?i ali se sporo regeneri?e. Vra?evi moraju biti izbirljivi pri odabiru ?ini za napad i kletvi da ne bi do?li u situaciju da im ponestane Mane i tako  postanu  izlo?eni neprijateljskim  napadima.\n\n						Po?to im se Mana vra?a polako, vra?evi je ?tede tako ?to se oslanjaju na polu dugoro?ne dodatke njihovom arsenalu poput prizvanih mongrela ili zastra?ujucih gargantuana, koji mogu za?titi vra?a i ubijati neprijatelje bez dodatnog tro?enja mane.</p>\n\n						<h2>OPREMA</h2> <p> Iako vra?evi korsite razna oru?ja , oni su ponsoni na nekoliko svojih  jednistvenih delova opreme, Mojos su lomljivi talismani koji se dr?e na sebi; umesto kori??enja poput oru?ja za udarac, oni poma?u vra?evima da otkriju zle mra?ne sile i da ih razlikuju od isprvnih . vra?evi su tako?e poznati po tome da nose magi?ne ceremonijalne bode?e. Nasuprot obi?nim no?evima, ovi bode?i su stvoreni samo za jednu svrhu ? ljudsko ?rtvovanje ? stoga su prili?no korisni za ubijanje.</p>', 'pocetna_vrac.png', 'jPwHNaMBqFE ', 'vrac', 'second', 1458051364, 1),
(4, 'lovac_na_demone', '<h3>Lovac na Demone</h3>\n							<p>Lovac na Demone je majstor rukovanja dalekometnim oru?jem neprikosnoven u ubijanju neprijatelja samostrelom,zamkama,i razaraju?im eksplozivom.<br/>', '<h2>Lovac na Demone</h2>\n\n						\n\n					<p>Oni koji sebe nazivaju lovcimma na demone ne pripadaju ni jednom narodu ili naciji.  Oni ne duguju vernost ni jednom kralju. Oni su ustvari ostatak- eho- svih onih koji su izgubili ?ivote u borbi sa ?udovi?tima iz Pakla,  Kada su demoni spalili ku?e o poklali porodice, ve?ina prepla?enih izgnanika se pomirila sa sudbinom, ali nekolicina njih je sahranila svoje najmilije, dr?ala se zajedno i zarekla na osvetu.  Iako ih nema mnogo,  Lovci prate i progone demone u nadi da ?e svet biti bolji  ako  spasu bar jedan ?ivot  vi?e. Posle dnevnog lova  na demone, ve?ina jo? uvek sklopi o?i i do?ivljava  no?ne more u kojim vide slike u?asa  zbog kojih su se i okupili: kandze koje probadaju , i  ljudi i zene koji se dave u sopstvenoj krvi. Kad su budni, lovci na demone vide maltene iste scene. Ali, ipak , u ovom trenutku oni kona?no imaju sange da uzvrate udarac. Oni se ne usudjuju da sanjaju o kona?noj pobedi , ili ?ak miru. Ali opet oni love demone. Ni?ta drugo im ne preostaje.\n\n					</p>\n\n					<h2>IZVOR MO?I:MR?NJA/DISCIPLINA</h2> <p> Lovci na demone  su u stalnom sukobu sa samim sobom. Nemaju nadu da ?e se vratiti pre?a?njem ?ivotu, ali se opet bore i progone demone sa stra?cu, Lovci na demone koji obu?avaju druge,  postanu  pa?ljiviji  i oprezniji, a opet njihovi nagoni vape da odgovore na demonsko nasilje sa jo? vi?e nasilja. Svaka strela koju lovci na demone ispale je opto?ena prezirom.  Skoro svi njihovi napadi su izvr?eni pomocu Mr?nje,taj hladni , pravedni bes koji ih ?ini totalno nemislosrdnim prema svojim neprijateljima. Njihova Mr?nja je neprestanaVeoma brzo se obnavlja  i ?ak kad odmaraju, lovci na demone su ispunjeni ?eljom za osvetom.  Oni lovci koji se nadaju da sprovedu bilo kakvu vrstu ozbilljnog  napada moraju da balansiraju svoju Mr?nju sa drugim izvorom moci: Disciplinom, briga i oprez koji osigurava da ?e do?iveti sledeci dan da ponovo ubijaju. Disciplina je od velike vaznosti za lovce na demone.  Ne samo da se sporo obnavlja, zahtevajuci vi?e razmi?ljanja i strepljena nego napadi zasnovani na Mrznji, vec se lovci na demone moraju oslanjati na nju prilikom izvodjenja savakog odbrambenog pokreta- zarobljavanje neprijatelja u zamku,  odbranu od napada zubima i kandzama i izbegavanje ki?e bodlji i strela. Lovcima na demone je lako da stoje u mestu, prepuni Mrznje,  i  da salju ki?e projektila na gomile neprijatelja. Ali ako ne uspeju da se odbrane pomocu Discipline,  lovci se izla?u velikom riziku da budu ubijeni. Oprezno balansiranje izmedju Discipline i Mr?nje je najsigurniji na?in za lovece da obezbede svoj opstanak.</p>\n\n					<h2>OPREMA</h2> <p> Lovci na demone u borbi protiv tame koriste nekonvencionalne kombinacije oru?ja  i stilova borbe koje samo oni mogu da izvedu i koriste. Oni su majstori u kori?cenju ru?nog samostrela ?  dalekometno oru?je sa brzim ponovnim  punjenjem  tobolca  i  brzim ispaljivanjem strela koje oni koriste da pretvore demone u njihvov privremeni tobolac. Lovci na demone su toliko ve?ti sa ru?nim samostrelom da mogu da ih koriste dvoru?no: dva samostrela koje koriste odjednom  duplira broj ispaljenih strela i brzinu kojom neprijatelji lovaca na demone umiru.</p>', 'pocetna_lovac.png', 'H6_eZgxWU24', 'lovac_na_demone', 'third', NULL, NULL),
(5, 'carobnjak', '<h3>?arobnjak</h3>\n							<p>Kao nosilac magijskih sila u sebi ?arobnjak koristi mo?nu magiju kako bi zbrisala cele grupe demona iz jednog udarca,i odbranu od napada.<br/>', '<h2>?arobnjak</h2>\n\n						<p>Oni koji koriste magiju poti?u sa akademija ?irom Uto?i?ta ? od Hiansaia do Kaldeuma-  nose?i nadimke poput ?madjioni?ara: ili ? maga?, ali oni koji bi sebe nazvali  uvredljivimim epitetom ? ?arobnjak? su sli?ni sa svojim kolegama koji bacaju ?ini koliko i lav sa ma?etom. I ?arobnjaci i Magovi koriste skrivene misterije arkane: I tu svaka sli?nost prestaje.\n\n						?arobnjaci su ponzati po velikom broju kvaliteta: poznati su ne samo po nepokolebljivosti i prirodnom daru,ve? i po preziranju beskrajnih ?asova i brbljanja o oprezu i bezbednosti koje dolaze sa akademskih ?kola magije.  Superiorni stav ?arobnjaka se zasniva na njihovom prirodnom daru ? njihovoj sposobnosti da voljom i instinktom ovladaju magi?nim silama i stave ih pod svoju kontrolu. Nezgode koje se dese usled njihovog nedostatka  finesa su  nesre?ni slu?ajevi? ali to retko kad sprecava ?arobnjake da se upuste u kori??enje svoje nestabilne mo?i.\n\n						Kad bi samo mogli da usavr?e kori??enje svog dara koji je ma? sa dve o?trice i izbgenu samouni?tenje, ovi novokomponovani magijski geniji bi mo?da bili u stanju da ispune sudbinu koja im se pomalja na horizontu.</p>\n\n						<h2>IZVOR MO?I:ARKANA</h2> <p> Nasuprot pa?ljivijim i opreznijim korisnicima magije, ?arobnjaci su  poput  provodnika za Mo? Arkane. Sna?na energija proti?e njihoviim venama, i oni upravljaju njom kao da je to neki dodatak njihvom telu. \n\n						?arobnjaci  pucaju od Mo?i Arkane ? veoma brzo se regeneri?e, tako da oni mogu da bacaju slabije magije u nedogled. Jedino mogu da dodju u opasnost da izgube sve zalihe energije kada poku?aju da sprovedu vi?e invokacija odjednom.\n\n						Medjutim, Mo? Arkane mo?e da o?teti tela ?arobnjaka , ako je oni ne koriste umereno, tako da ?arobnjaci moraju da sa?ekaju odredjen vremenski period kako bi mogi da iznova i iznova bacaju odredjene veoma mo?ne ?ini. Ove ?ini -  prizvani meteoiri koji padaju sa neba, struje sile koja obara desetine neprijatelja sa nogu, ili energetski balon?i?i koju zasutavljaju tok vremena ? su toliko mocni da su vredni ?ekanja.</p>\n\n						<h2>OPREMA</h2> <p> Iako ve?ina materijalnih predmeta slu?i kao medijum za sprvodjenje ?arbnjakove neverovatne mo?i, neki imaju specijalne upotrebe. ?arobnjaci nose orbove koju nisu ba? vrsta oru?ja ? naprotiv to su dodaci koji im omogu?avaju vizije i znanje koje im poma?e pri bacanju ?ini, ili slu?e kao zalihe mo?i. ?arobnjaci se takodje opremaju sa tradicionalnim ( i ?esto ?arobnim)  ?tapovima, tanki ?tapovi koji se koriste kako bi se ogromne sile Arkane usmerile ka pravim metama.</p>', 'pocetna_carobnjak.png', 'MbsODnb1VYo', 'carobnjak', 'fourth', 1458054605, 1),
(6, 'varvarin', '<h3>Varvarin</h3>\n							<p>Varavarin je oli?enje sirove snage koji je u stanju da uni?ti sve svoje neprijatelje koriste?i masivna oru?ja.<br/>', '<h2>Varvarin</h2>\n					<p>Vekovima su varvari koji ?ive u podno?ju planine Areat bili obu?avani da budu jaki i nepokolebljivi poput kamena.  Neverovatno veliki  i neprikosnoveno okrutni od rodjenja su u?eni du?nosti koja se prenosila sa kolena na koleno: da ?tite svetu planinu. Kada su im raspar?ali  domovinu, veliki broj varvara je izgubio veru. Postali su beznade?ni, pro?lost ih je progonila, putovali su od mesta do mesta bez ponosa  i cilja. Ali nisu se svi varvari odrekli svog zadatka. Neki do njih jo? uvek veoma po?tuju snegove na vrhu Areata i vrebaju sa ivica planinskog  grotla.  Se?aju se vremena kad su nosili sekire i koplja dok su se gradska deca igrala igra?kama?i umiru od stida  zbog nesupeha svog naroda. Ovi varvari streme ka tome da prona?u sebi novu svrhu u ovom promenjenom svetu i uni?ti?e svakoga ko im se nadje na tom putu. </p>\n					<h2>IZVOR MO?I:BES</h2> <p> Bes koji ispunjava prave varvare ne mo?e se ugasiti dok su ?ivi. Gnev,  resurs koij predstavlja ?ist bes I ?e? za borbom,  poja?ava svaki njihov zastra?ujuci udarac. Gnev raste u varvarima ?im ih neko povredi, i kada prospu krv svom neprijatelju. ?to je ve?i nivo povrede koju zadobiju od svojih neprijatelja ( a proporcionalno raste i broj onih koje su varvari ubili)  tim pre gnev dostigne vrhunac.  Gnev se mo?e iskrosititi u vi?e navrata ? varvari mogu da razore i uni?te bojno polje, da se vinu u vazduh i preseku neprijatelje na pola. Izvan borbe Gnev brzo splasne, stoga ve?ti varvari ule?u iz borbe u borbu kako bi bili sigurni da ce u kontinuitetu zadavati  razorne udarce. </p>\n					<h2>OPREMA</h2> <p> Varvari znaju na?ine kako da koriste  oru?je koji su ostalima potpuno nepoznati. Oni koriste  ogromno oru?je ? prevelike sprave za ubijanje koje i neki mnogo otmeniji heroji jedva da mogu da podignu , a kamoli da zamahnu njima, Mi?i?avi varvari tako?e mogu da dr?e sa obe ruke obi?na oru?ja kao sto su ma?evi i sekire, zaustavljaju?i neprijatelje sa vi?e razli?itih magi?nih  trikova  i vrsta oru?ja odjednom.</p>', 'pocetna_varvarin.png', 'lxOUxwkoLyw', 'varvarin', 'fifth', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `meni`
--

CREATE TABLE IF NOT EXISTS `meni` (
`id_meni` int(11) NOT NULL,
  `naziv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `podmeni` int(11) NOT NULL,
  `vreme_unosa` int(11) DEFAULT NULL,
  `korisnik_id` int(11) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `meni`
--

INSERT INTO `meni` (`id_meni`, `naziv`, `link`, `podmeni`, `vreme_unosa`, `korisnik_id`) VALUES
(1, 'Pocetna', '', 0, 1458054863, 1),
(2, 'Likovi', '', 1, NULL, NULL),
(3, 'Dokumentacija', 'dokumentacija.pdf', 0, NULL, NULL),
(4, 'O Autoru', 'o_autoru/autor', 0, NULL, NULL),
(5, 'Kontakt', 'kontakt/kontaktiraj', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `podmeni`
--

CREATE TABLE IF NOT EXISTS `podmeni` (
`id_podmeni` int(11) NOT NULL,
  `podmeni_naziv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_lika` int(11) NOT NULL,
  `id_meni` int(11) NOT NULL,
  `vreme_unosa` int(11) DEFAULT NULL,
  `korisnik_id` int(11) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `podmeni`
--

INSERT INTO `podmeni` (`id_podmeni`, `podmeni_naziv`, `id_lika`, `id_meni`, `vreme_unosa`, `korisnik_id`) VALUES
(1, 'Varvarin', 6, 1, 1458055043, 1),
(2, 'Monah', 2, 1, NULL, NULL),
(3, 'Lovac na Demone', 4, 1, NULL, NULL),
(4, 'Carobnjak', 5, 1, NULL, NULL),
(5, 'Vrac', 3, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slajd`
--

CREATE TABLE IF NOT EXISTS `slajd` (
`id_slajda` int(11) NOT NULL,
  `putanja` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `id_lika` int(11) NOT NULL,
  `vreme_unosa` int(11) DEFAULT NULL,
  `korisnik_id` int(11) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `slajd`
--

INSERT INTO `slajd` (`id_slajda`, `putanja`, `id_lika`, `vreme_unosa`, `korisnik_id`) VALUES
(1, 'I1.jpg', 1, 1458055232, 1),
(2, 'I2.jpg', 1, NULL, NULL),
(3, 'I3.jpg', 1, NULL, NULL),
(4, 'I4.jpg', 1, NULL, NULL),
(5, 'I5.jpg', 1, NULL, NULL),
(6, 'I6.jpg', 1, NULL, NULL),
(7, 'M1.jpg', 2, NULL, NULL),
(8, 'M2.jpg', 2, NULL, NULL),
(9, 'M3.jpg', 2, NULL, NULL),
(10, 'M4.jpg', 2, NULL, NULL),
(11, 'V1.jpg', 3, NULL, NULL),
(12, 'V2.jpg', 3, NULL, NULL),
(13, 'V3.jpg', 3, NULL, NULL),
(14, 'V4.jpg', 3, NULL, NULL),
(15, 'V5.jpg', 3, NULL, NULL),
(16, 'L1.jpg', 4, NULL, NULL),
(17, 'L2.jpg', 4, NULL, NULL),
(18, 'L3.jpg', 4, NULL, NULL),
(19, 'L4.jpg', 4, NULL, NULL),
(20, 'L5.jpg', 4, NULL, NULL),
(21, 'C1.jpg', 5, NULL, NULL),
(22, 'C2.jpg', 5, NULL, NULL),
(23, 'C3.jpg', 5, NULL, NULL),
(24, 'C4.jpg', 5, NULL, NULL),
(25, 'C5.jpg', 5, NULL, NULL),
(26, 'B1.jpg', 6, NULL, NULL),
(27, 'B2.jpg', 6, NULL, NULL),
(28, 'B3.jpg', 6, NULL, NULL),
(29, 'B4.jpg', 6, NULL, NULL),
(30, 'B5.jpg', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uloga`
--

CREATE TABLE IF NOT EXISTS `uloga` (
`id_uloga` int(11) NOT NULL,
  `naziv_uloge` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `vreme_unosa` int(11) DEFAULT NULL,
  `korisnik_id` int(11) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `uloga`
--

INSERT INTO `uloga` (`id_uloga`, `naziv_uloge`, `vreme_unosa`, `korisnik_id`) VALUES
(1, 'admin', NULL, NULL),
(2, 'korisnik', 1458055492, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anketa`
--
ALTER TABLE `anketa`
 ADD PRIMARY KEY (`idAnketa`);

--
-- Indexes for table `anketaodgovori`
--
ALTER TABLE `anketaodgovori`
 ADD PRIMARY KEY (`idAnketaOdgovori`);

--
-- Indexes for table `galerija`
--
ALTER TABLE `galerija`
 ADD PRIMARY KEY (`id_slike`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
 ADD PRIMARY KEY (`id_korisnik`);

--
-- Indexes for table `likovi`
--
ALTER TABLE `likovi`
 ADD PRIMARY KEY (`id_lika`);

--
-- Indexes for table `meni`
--
ALTER TABLE `meni`
 ADD PRIMARY KEY (`id_meni`);

--
-- Indexes for table `podmeni`
--
ALTER TABLE `podmeni`
 ADD PRIMARY KEY (`id_podmeni`);

--
-- Indexes for table `slajd`
--
ALTER TABLE `slajd`
 ADD PRIMARY KEY (`id_slajda`);

--
-- Indexes for table `uloga`
--
ALTER TABLE `uloga`
 ADD PRIMARY KEY (`id_uloga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anketa`
--
ALTER TABLE `anketa`
MODIFY `idAnketa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `anketaodgovori`
--
ALTER TABLE `anketaodgovori`
MODIFY `idAnketaOdgovori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `galerija`
--
ALTER TABLE `galerija`
MODIFY `id_slike` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
MODIFY `id_korisnik` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `likovi`
--
ALTER TABLE `likovi`
MODIFY `id_lika` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `meni`
--
ALTER TABLE `meni`
MODIFY `id_meni` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `podmeni`
--
ALTER TABLE `podmeni`
MODIFY `id_podmeni` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `slajd`
--
ALTER TABLE `slajd`
MODIFY `id_slajda` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `uloga`
--
ALTER TABLE `uloga`
MODIFY `id_uloga` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
