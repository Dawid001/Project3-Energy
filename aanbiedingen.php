<?php
//Verbinding met database

$servername = "localhost";
$username = "root";
$password = "root";
$database = "energy";

//Maakt Connectie met Database
$conn = new mysqli($servername, $username, $password, $database);


//Checkt connectie

if ($conn->connect_error) {
    die("Connectie mislukt " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>aanbidingen</title>
  <link rel='stylesheet' ><link rel="stylesheet" href="./aanbidingen.css">
  <link rel="stylesheet" href="./css/hamburger.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  

</head>
<body>
  <header>
    <div class="menu-wrap">
        <input type="checkbox" class="toggler">
        <div class="hamburger">
            <div></div>
        </div>
        <div class="menu">
            <div>
                <div>
                <ul>
                <li><a href="hades-home.php">Home</a></li>
                <li><a href="Producten.html">Producten</a></li>
                <li><a href="aanbiedingen.php">Aanbiedingen</a></li>
                <li><a href="event-pagina.php">Evenementen</a></li>
                <li><a href="artiesten.php">Artiesten</a></li>
                <li><a href="OverOns.html">Over Ons</a></li>
                <li><a href="faq.html">F.A.Q</a></li>
              </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<?php
$sql = "SELECT * FROM aanbiedingen";
if ($result = $conn->query($sql)) {
  //Pak elke keer een rij uit het resultaat en maak er een array van
  $a = 1;
  while($row = $result->fetch_row()) {
    $titel = $row[1];
    $begindatum = $row[2];
    $einddatum = $row[3];
    $omschrijving = $row[4];
    ?>
<hr>
<h2><?php echo $titel; ?>!<br>Van
<?php echo $begindatum; ?><br>Tot
<?php echo $einddatum; ?></h2>
<hr>
<section class="grid">
  <div class="item">
  <?php echo $omschrijving; ?>
  <br>
  <br>
  <?php echo "<img src='images/".$row[5]."'/>"; ?>
 </div>
</section>
      <?php

  }
  $result->close();
}
?>


  <!-- partial -->
  <div class="main"></div>
<div class="footer">
  <div class="bubbles">
    <div class="bubble" style="--size:5.329620140430791rem; --distance:7.011088991825698rem; --position:66.62554406668767%; --time:3.9664459505017917s; --delay:-2.7739470583225994s;"></div>
    <div class="bubble" style="--size:4.8636423049143875rem; --distance:8.25459206871206rem; --position:39.36016393220153%; --time:2.2925784851576467s; --delay:-3.2848622558874534s;"></div>
    <div class="bubble" style="--size:3.262389573849503rem; --distance:9.165018674360464rem; --position:99.02630267680486%; --time:3.2856737636310793s; --delay:-2.077118247133146s;"></div>
    <div class="bubble" style="--size:4.429982764264175rem; --distance:8.511238192933824rem; --position:33.90944862096491%; --time:3.488550250174841s; --delay:-2.1690461501944682s;"></div>
    <div class="bubble" style="--size:2.202514007441712rem; --distance:7.080876045828936rem; --position:15.374808803472977%; --time:3.5133375338731985s; --delay:-2.9593042322302368s;"></div>
    <div class="bubble" style="--size:5.131789898616808rem; --distance:8.791485786457333rem; --position:103.4462711650105%; --time:2.796289722584561s; --delay:-3.1228563992446774s;"></div>
    <div class="bubble" style="--size:5.1715460432458595rem; --distance:7.840645880542769rem; --position:10.773465254363416%; --time:2.9539101527816127s; --delay:-2.6612913702016985s;"></div>
    <div class="bubble" style="--size:3.899363203350436rem; --distance:7.753829652594065rem; --position:0.6311907775929111%; --time:2.7930896511807086s; --delay:-3.783865821360499s;"></div>
    <div class="bubble" style="--size:5.605898572256001rem; --distance:6.859816651016467rem; --position:85.96220029004918%; --time:3.364208767338064s; --delay:-3.6489650441752053s;"></div>
    <div class="bubble" style="--size:5.679950039916493rem; --distance:7.398390952338694rem; --position:87.70353597557168%; --time:3.453377057595122s; --delay:-2.192960371283515s;"></div>
    <div class="bubble" style="--size:3.4671912181405027rem; --distance:8.774694898632397rem; --position:-3.711974322326179%; --time:3.244978469042818s; --delay:-2.898743613326085s;"></div>
    <div class="bubble" style="--size:5.448692412860675rem; --distance:8.393871408945422rem; --position:74.00089432408005%; --time:2.1160440744893743s; --delay:-3.160640043724093s;"></div>
    <div class="bubble" style="--size:5.397766238312203rem; --distance:9.848465792309053rem; --position:34.11211132383385%; --time:3.6760173996913443s; --delay:-3.668861709640401s;"></div>
    <div class="bubble" style="--size:5.507093853191868rem; --distance:6.194793331655995rem; --position:79.26602449890557%; --time:3.2037344746960414s; --delay:-2.45481548106399s;"></div>
    <div class="bubble" style="--size:2.354136807020981rem; --distance:8.527512288164822rem; --position:65.36671177390132%; --time:2.8234451817381796s; --delay:-3.3390787558277033s;"></div>
    <div class="bubble" style="--size:3.561001602380954rem; --distance:6.113808542092393rem; --position:26.929187791781356%; --time:3.1593689558808773s; --delay:-2.7073189063299568s;"></div>
    <div class="bubble" style="--size:2.9927458491155283rem; --distance:7.822478804060786rem; --position:50.795774126097534%; --time:2.744360843899478s; --delay:-3.3364504478433537s;"></div>
    <div class="bubble" style="--size:4.240818253238651rem; --distance:7.821083219648603rem; --position:88.78690415039284%; --time:2.738118634278469s; --delay:-2.8398074947788023s;"></div>
    <div class="bubble" style="--size:3.6461154750834934rem; --distance:8.83883558126584rem; --position:3.328379297111967%; --time:3.5763188442583282s; --delay:-2.646974929103794s;"></div>
    <div class="bubble" style="--size:4.966800285419597rem; --distance:8.521551754918177rem; --position:98.07029182585003%; --time:2.904586372399171s; --delay:-2.8963703947741566s;"></div>
    <div class="bubble" style="--size:4.316484252372679rem; --distance:9.724920765674533rem; --position:25.61787323737764%; --time:2.1934065091385198s; --delay:-3.1463572506177577s;"></div>
    <div class="bubble" style="--size:3.11663379715874rem; --distance:6.1729678490425295rem; --position:47.75981348705068%; --time:2.7258725587232315s; --delay:-2.9442852428127186s;"></div>
    <div class="bubble" style="--size:2.0489674342491258rem; --distance:7.132932282037172rem; --position:34.63763715580592%; --time:2.633930032701763s; --delay:-3.8365745302840812s;"></div>
    <div class="bubble" style="--size:3.8379048398940077rem; --distance:6.633066993559637rem; --position:43.50479479659342%; --time:3.0884236872342217s; --delay:-2.1851098351285407s;"></div>
    <div class="bubble" style="--size:4.206631693711647rem; --distance:9.935370626550377rem; --position:98.05525968388612%; --time:2.8882428162999787s; --delay:-3.8114379586004095s;"></div>
    <div class="bubble" style="--size:3.0768760787832594rem; --distance:8.161854344283498rem; --position:-1.3441055819672698%; --time:3.616393160294907s; --delay:-2.730618860468626s;"></div>
    <div class="bubble" style="--size:4.744483584107128rem; --distance:6.5315884652411516rem; --position:26.080389626075362%; --time:2.8340466027824087s; --delay:-2.7353261676910297s;"></div>
    <div class="bubble" style="--size:2.6401105635332467rem; --distance:8.572807582793832rem; --position:70.58062736419919%; --time:3.273806967079277s; --delay:-2.3271663533854934s;"></div>
    <div class="bubble" style="--size:3.255750586649805rem; --distance:7.81451084766329rem; --position:20.335998907043415%; --time:2.9299672188909254s; --delay:-2.8354206449026673s;"></div>
    <div class="bubble" style="--size:2.4619903573144715rem; --distance:7.075999356131648rem; --position:23.378062453434694%; --time:2.522904221174196s; --delay:-2.4290898349492904s;"></div>
    <div class="bubble" style="--size:2.9000484004551037rem; --distance:9.226465584771198rem; --position:27.12648049174802%; --time:2.7715716124246152s; --delay:-2.0597885098603532s;"></div>
    <div class="bubble" style="--size:3.0597368007835657rem; --distance:6.805352434511258rem; --position:95.82668859953803%; --time:2.6839369671907094s; --delay:-3.0029459570554993s;"></div>
    <div class="bubble" style="--size:2.256240739588157rem; --distance:6.928328356583865rem; --position:91.45281641802201%; --time:2.2410208636748474s; --delay:-2.6444863498905997s;"></div>
    <div class="bubble" style="--size:4.620376547939351rem; --distance:9.562081855168014rem; --position:80.46979142848156%; --time:2.362644683086863s; --delay:-3.147600287944807s;"></div>
    <div class="bubble" style="--size:5.1306326181193755rem; --distance:9.746344427555815rem; --position:-4.1073553403969925%; --time:2.8257535736991706s; --delay:-3.606876527947147s;"></div>
    <div class="bubble" style="--size:2.9359806179646526rem; --distance:8.48430509998876rem; --position:43.26159616063592%; --time:2.736389801771243s; --delay:-3.761970236531145s;"></div>
    <div class="bubble" style="--size:2.2141226278492994rem; --distance:8.954917581993705rem; --position:12.344641175656637%; --time:3.2634041802655434s; --delay:-3.2563667681324917s;"></div>
    <div class="bubble" style="--size:2.4315238501407226rem; --distance:7.388402409076605rem; --position:71.36890106340174%; --time:3.024435619126598s; --delay:-2.4568681799617917s;"></div>
    <div class="bubble" style="--size:5.11397480604582rem; --distance:9.590765522782489rem; --position:104.06481694764057%; --time:2.9583784068887478s; --delay:-2.6905944041058003s;"></div>
    <div class="bubble" style="--size:3.2291142575022267rem; --distance:7.153096375993887rem; --position:35.51614741344564%; --time:3.099261905248723s; --delay:-2.6520369928382315s;"></div>
    <div class="bubble" style="--size:5.331643661364537rem; --distance:6.448662569709676rem; --position:36.998919519168844%; --time:2.459074087244921s; --delay:-3.5114866737441353s;"></div>
    <div class="bubble" style="--size:5.059762106115503rem; --distance:9.406595633706546rem; --position:35.516238304403714%; --time:3.308215412531912s; --delay:-3.1115928808635056s;"></div>
    <div class="bubble" style="--size:5.2934746666827515rem; --distance:7.852672178435717rem; --position:54.84926345676382%; --time:3.8614218417509516s; --delay:-2.502506052464533s;"></div>
    <div class="bubble" style="--size:3.5103591954749307rem; --distance:6.320459940426129rem; --position:3.3938210644097015%; --time:2.022423749630479s; --delay:-2.5986147800332846s;"></div>
    <div class="bubble" style="--size:4.0531319624789175rem; --distance:7.350703525417935rem; --position:7.975922499903012%; --time:2.5944087545742396s; --delay:-2.268879041358765s;"></div>
    <div class="bubble" style="--size:2.2639701340513945rem; --distance:9.178893554931353rem; --position:35.378594131929596%; --time:2.178392768255217s; --delay:-3.900516681756058s;"></div>
    <div class="bubble" style="--size:2.4066982261617644rem; --distance:7.3634012900508115rem; --position:50.39375524219865%; --time:2.0488273665139713s; --delay:-2.6862074891124754s;"></div>
    <div class="bubble" style="--size:3.6184850754159052rem; --distance:6.996037513017083rem; --position:66.14789951221363%; --time:2.4066979122778136s; --delay:-3.231284152719162s;"></div>
    <div class="bubble" style="--size:2.5090687442631383rem; --distance:9.737981472552892rem; --position:1.4698699439395764%; --time:3.2039409821717837s; --delay:-3.0707712435228114s;"></div>
    <div class="bubble" style="--size:4.6350024858719525rem; --distance:7.868586223995041rem; --position:31.209781159759167%; --time:3.925650795602961s; --delay:-2.6067123260234872s;"></div>
    <div class="bubble" style="--size:4.010466209555545rem; --distance:6.852987758036618rem; --position:68.81422434720002%; --time:3.911709168856214s; --delay:-2.519437101695236s;"></div>
    <div class="bubble" style="--size:3.7889546243270633rem; --distance:6.743989526521988rem; --position:86.7052827690611%; --time:2.326727586927884s; --delay:-2.748100194613068s;"></div>
    <div class="bubble" style="--size:4.495331722545932rem; --distance:6.309486306714551rem; --position:7.567383338903218%; --time:2.8635841534682984s; --delay:-2.9237714536188815s;"></div>
    <div class="bubble" style="--size:4.101076898745733rem; --distance:7.651775170008266rem; --position:26.598483496606057%; --time:3.1187650403472156s; --delay:-2.298871965130966s;"></div>
    <div class="bubble" style="--size:3.581184290819399rem; --distance:9.895021785482427rem; --position:2.269748497058637%; --time:3.7582004151186745s; --delay:-3.3071771475605005s;"></div>
    <div class="bubble" style="--size:3.4740171880352344rem; --distance:7.684407984451899rem; --position:68.61024478048581%; --time:2.4354302801611936s; --delay:-2.716451830490643s;"></div>
    <div class="bubble" style="--size:3.483636951039502rem; --distance:7.484284571793066rem; --position:65.8725346201735%; --time:3.311711875635473s; --delay:-2.014772894743719s;"></div>
    <div class="bubble" style="--size:5.154078215113298rem; --distance:6.021622555987772rem; --position:17.91124214024691%; --time:3.633089279033153s; --delay:-2.575182838150531s;"></div>
    <div class="bubble" style="--size:5.823667250808173rem; --distance:8.926954758310021rem; --position:92.47900062001402%; --time:2.927790209006928s; --delay:-2.949501020443091s;"></div>
    <div class="bubble" style="--size:4.077630780164644rem; --distance:6.251362765971565rem; --position:56.599129666608675%; --time:2.9919960216648414s; --delay:-2.376198710426745s;"></div>
    <div class="bubble" style="--size:3.2287507066285777rem; --distance:6.930163512031366rem; --position:81.84511448922872%; --time:2.6676677809342983s; --delay:-2.051415825255768s;"></div>
    <div class="bubble" style="--size:2.1674830193718213rem; --distance:6.301937638768938rem; --position:98.79352687079945%; --time:3.0369001388532473s; --delay:-3.660790832377172s;"></div>
    <div class="bubble" style="--size:5.779329124468885rem; --distance:9.09934658405789rem; --position:43.17607888999039%; --time:3.5970221703709697s; --delay:-3.8267913662176176s;"></div>
    <div class="bubble" style="--size:5.0695480737785905rem; --distance:9.719113714315142rem; --position:94.75925129819488%; --time:3.546238604716289s; --delay:-2.9511745758412995s;"></div>
    <div class="bubble" style="--size:4.570835159422048rem; --distance:9.52802097148334rem; --position:13.41184234085392%; --time:3.668479947849123s; --delay:-3.4384189316472766s;"></div>
    <div class="bubble" style="--size:4.528755568621243rem; --distance:8.697493414238428rem; --position:44.97854001286307%; --time:3.907214086437625s; --delay:-2.7818798761408443s;"></div>
    <div class="bubble" style="--size:5.9931728534527435rem; --distance:8.366979146320686rem; --position:77.11262617054128%; --time:2.2768807514417477s; --delay:-3.79229795282179s;"></div>
    <div class="bubble" style="--size:2.023578538741172rem; --distance:6.5859617021077534rem; --position:66.77179769355796%; --time:3.5444317526689897s; --delay:-2.89088393811802s;"></div>
    <div class="bubble" style="--size:2.4498999927672624rem; --distance:8.704305059860177rem; --position:101.29144433786057%; --time:3.597061058628316s; --delay:-2.9666917925294247s;"></div>
    <div class="bubble" style="--size:5.335328762700914rem; --distance:9.227941692546887rem; --position:3.1310837136092537%; --time:2.7587684964746524s; --delay:-2.02847467394256s;"></div>
    <div class="bubble" style="--size:5.569075835532709rem; --distance:8.278691511781883rem; --position:33.4672223336848%; --time:2.2822141463983217s; --delay:-2.0953575239294597s;"></div>
    <div class="bubble" style="--size:4.518467681524164rem; --distance:7.991731081877701rem; --position:39.41197866380963%; --time:2.4080982619189015s; --delay:-3.410429932117372s;"></div>
    <div class="bubble" style="--size:5.888707861920496rem; --distance:6.780532594046059rem; --position:76.72056808859737%; --time:2.6980454535308307s; --delay:-3.055905908643384s;"></div>
    <div class="bubble" style="--size:3.6974814885581697rem; --distance:7.389162874635846rem; --position:56.36732580428982%; --time:2.851565535391051s; --delay:-2.231140135103914s;"></div>
    <div class="bubble" style="--size:2.6492764225140615rem; --distance:7.392181599526213rem; --position:6.206708641412577%; --time:3.679627319752038s; --delay:-3.0195444360535806s;"></div>
    <div class="bubble" style="--size:4.949191526988627rem; --distance:9.01425647519089rem; --position:24.28084304991989%; --time:2.3103484245523407s; --delay:-3.4210869879302286s;"></div>
    <div class="bubble" style="--size:3.271524793000549rem; --distance:7.7334945396825505rem; --position:6.181213396553698%; --time:3.463159993046854s; --delay:-2.8476945886371077s;"></div>
    <div class="bubble" style="--size:3.6492365566441123rem; --distance:6.0700120953206484rem; --position:7.251711935017733%; --time:2.408786815283303s; --delay:-2.5288146542165753s;"></div>
    <div class="bubble" style="--size:3.330477302469352rem; --distance:6.625492592480812rem; --position:58.41726586549285%; --time:2.748250697129047s; --delay:-3.468912229252077s;"></div>
    <div class="bubble" style="--size:5.3427825983647645rem; --distance:9.19653255753471rem; --position:30.635243947893052%; --time:2.580222804309803s; --delay:-2.6359163018053366s;"></div>
    <div class="bubble" style="--size:4.767293770290618rem; --distance:9.559054858466817rem; --position:7.852116112225113%; --time:2.663791577193036s; --delay:-2.0699878352876597s;"></div>
    <div class="bubble" style="--size:3.314375415654233rem; --distance:9.722907399175414rem; --position:-2.8274116263023052%; --time:3.3816877264223284s; --delay:-3.1680312457867967s;"></div>
    <div class="bubble" style="--size:2.809866470385723rem; --distance:7.745345491721106rem; --position:88.00806126021972%; --time:3.590433713354993s; --delay:-3.750061500722464s;"></div>
    <div class="bubble" style="--size:4.657948735247143rem; --distance:8.781506523706417rem; --position:68.60884273651426%; --time:2.0607312010141943s; --delay:-3.072480475353946s;"></div>
    <div class="bubble" style="--size:4.3481750949997355rem; --distance:9.055388861371977rem; --position:71.75640337728568%; --time:3.0639758045765464s; --delay:-2.0139923648415436s;"></div>
    <div class="bubble" style="--size:2.1849234144853673rem; --distance:9.942301732152588rem; --position:49.71714601284861%; --time:3.1068687575914486s; --delay:-2.463305661190983s;"></div>
    <div class="bubble" style="--size:2.348672689291723rem; --distance:7.693547370830767rem; --position:84.28880431672725%; --time:3.836643286721491s; --delay:-3.6275467765841007s;"></div>
    <div class="bubble" style="--size:5.327194183518747rem; --distance:6.979757417164993rem; --position:43.92960987842959%; --time:2.72686507030009s; --delay:-2.95719941549444s;"></div>
    <div class="bubble" style="--size:2.943661741741817rem; --distance:6.95853351750546rem; --position:93.38486418008995%; --time:3.269427414821637s; --delay:-3.2373454206755223s;"></div>
    <div class="bubble" style="--size:3.28591271921845rem; --distance:9.843792070037328rem; --position:81.67044487625066%; --time:2.131989761550487s; --delay:-3.7610323952695857s;"></div>
    <div class="bubble" style="--size:2.010693999267607rem; --distance:8.45435737971978rem; --position:8.651855715776096%; --time:2.558047478785498s; --delay:-2.3408776400986278s;"></div>
    <div class="bubble" style="--size:5.988051832511245rem; --distance:8.585446456309525rem; --position:21.162778629210553%; --time:2.888641335223066s; --delay:-2.9930954447494256s;"></div>
    <div class="bubble" style="--size:2.3908920728670413rem; --distance:7.5611877552224565rem; --position:46.52948207738336%; --time:3.384439145402485s; --delay:-2.019014064886386s;"></div>
    <div class="bubble" style="--size:3.521623526178666rem; --distance:6.34551785340265rem; --position:19.148905763164837%; --time:2.059587755760862s; --delay:-3.004558264302126s;"></div>
    <div class="bubble" style="--size:3.122581841292602rem; --distance:9.440019181726527rem; --position:93.58207874327687%; --time:2.917474817644273s; --delay:-3.328863674872139s;"></div>
    <div class="bubble" style="--size:5.505246280012187rem; --distance:8.284951613177345rem; --position:25.08895904186343%; --time:3.8575854841616266s; --delay:-2.448657649274095s;"></div>
    <div class="bubble" style="--size:4.8262092476377285rem; --distance:8.377502481717077rem; --position:14.163789765348525%; --time:2.669926614908231s; --delay:-2.5153816273720655s;"></div>
    <div class="bubble" style="--size:2.2122278691754085rem; --distance:8.13253010080632rem; --position:21.398279581081642%; --time:2.338319210665123s; --delay:-2.6614683294151833s;"></div>
    <div class="bubble" style="--size:2.6927458414664036rem; --distance:6.801757953473064rem; --position:5.188883988743401%; --time:2.6639224142895737s; --delay:-3.8645221422401916s;"></div>
    <div class="bubble" style="--size:3.2105240657303185rem; --distance:9.770426427242793rem; --position:42.13857055013311%; --time:2.786364071410312s; --delay:-2.1810114665157836s;"></div>
    <div class="bubble" style="--size:4.19696950743622rem; --distance:7.756040058702635rem; --position:64.77040775655186%; --time:3.780979679702003s; --delay:-2.382180557832709s;"></div>
    <div class="bubble" style="--size:5.721960181665948rem; --distance:9.927352021492013rem; --position:85.0919776619832%; --time:2.713981734185842s; --delay:-2.272730507074716s;"></div>
    <div class="bubble" style="--size:5.129033419836449rem; --distance:6.735620390149587rem; --position:36.09758370765252%; --time:3.928803330587154s; --delay:-2.1357235238865764s;"></div>
    <div class="bubble" style="--size:5.246901110638133rem; --distance:6.553690906596717rem; --position:87.64862960022529%; --time:3.914224626455958s; --delay:-2.822292361218213s;"></div>
    <div class="bubble" style="--size:2.0582362213970686rem; --distance:7.040048674526389rem; --position:96.79967578157037%; --time:2.275307310073445s; --delay:-2.959596802492666s;"></div>
    <div class="bubble" style="--size:4.967214055473429rem; --distance:7.416901405174149rem; --position:102.09318555419317%; --time:3.3522846833996724s; --delay:-3.7199100330969803s;"></div>
    <div class="bubble" style="--size:2.9070288152239296rem; --distance:6.671886826243366rem; --position:78.8147485543018%; --time:3.045405251675658s; --delay:-3.2034880787081974s;"></div>
    <div class="bubble" style="--size:3.69878647381001rem; --distance:6.170159809877585rem; --position:89.62489963826782%; --time:3.9039972176630555s; --delay:-3.0315355467925196s;"></div>
    <div class="bubble" style="--size:5.408668364578765rem; --distance:8.254847434127461rem; --position:42.260748983529304%; --time:2.683514038855467s; --delay:-2.3517453889566067s;"></div>
    <div class="bubble" style="--size:2.4522845270883664rem; --distance:6.932715911929393rem; --position:97.25388611677513%; --time:2.3364267324539494s; --delay:-3.531757834344732s;"></div>
    <div class="bubble" style="--size:3.83998899676014rem; --distance:9.973179965469438rem; --position:100.38093143473853%; --time:3.545650436423845s; --delay:-2.8043993323854535s;"></div>
    <div class="bubble" style="--size:5.5908185372752595rem; --distance:8.351872007800171rem; --position:78.54718877281505%; --time:3.8247968530928977s; --delay:-2.505674700503548s;"></div>
    <div class="bubble" style="--size:4.269988165092722rem; --distance:8.747623201750017rem; --position:79.04999836915583%; --time:2.008974892452383s; --delay:-3.491061803324989s;"></div>
    <div class="bubble" style="--size:3.2372321799892365rem; --distance:8.80089056995625rem; --position:69.11882929861407%; --time:3.6573161586331366s; --delay:-2.7408659817038963s;"></div>
    <div class="bubble" style="--size:4.818384287110825rem; --distance:9.840317784717044rem; --position:9.9593666480607%; --time:3.584160594105658s; --delay:-3.6302216581468185s;"></div>
    <div class="bubble" style="--size:5.257835766174618rem; --distance:7.630682662990724rem; --position:36.00427383833823%; --time:2.164911301964037s; --delay:-3.3219239444101936s;"></div>
    <div class="bubble" style="--size:4.187033757269996rem; --distance:7.780688917688573rem; --position:42.5452153535547%; --time:2.955019038464988s; --delay:-3.3122815930863907s;"></div>
    <div class="bubble" style="--size:5.6467867877972004rem; --distance:7.046939398373378rem; --position:2.088253494093193%; --time:2.1318615112649626s; --delay:-3.1609555669344127s;"></div>
    <div class="bubble" style="--size:5.0763608228425365rem; --distance:7.147391366014675rem; --position:90.30313903011562%; --time:3.2545633802110188s; --delay:-2.095906362959776s;"></div>
    <div class="bubble" style="--size:3.323889718230392rem; --distance:8.961594055340319rem; --position:82.56712258223392%; --time:3.732366722070506s; --delay:-2.8502646634647832s;"></div>
    <div class="bubble" style="--size:4.629818963162655rem; --distance:6.504248091707024rem; --position:-0.5110125466491189%; --time:3.6895649306982277s; --delay:-2.126678409081397s;"></div>
    <div class="bubble" style="--size:5.692634649815377rem; --distance:9.824114816008143rem; --position:0.7190751195804808%; --time:2.870221039811524s; --delay:-3.070308427165768s;"></div>
    <div class="bubble" style="--size:2.7911023297175097rem; --distance:8.476679393781554rem; --position:73.59418290947151%; --time:2.0078561691640884s; --delay:-2.0984124498829555s;"></div>
    <div class="bubble" style="--size:4.47021082705944rem; --distance:9.336448324896985rem; --position:24.41882930228325%; --time:3.968910796547428s; --delay:-3.303892402530877s;"></div>
    <div class="bubble" style="--size:3.7267423651822416rem; --distance:9.926838493369079rem; --position:-1.3503232297686463%; --time:3.8227243669108897s; --delay:-3.152353631977395s;"></div>
    <div class="bubble" style="--size:2.405136293052445rem; --distance:7.867145532877456rem; --position:39.52880668093323%; --time:2.010183112301515s; --delay:-2.312755181354843s;"></div>
    <div class="bubble" style="--size:2.4356842984536353rem; --distance:6.179297552586646rem; --position:4.084793623640156%; --time:3.8816103772461266s; --delay:-2.3929955583945843s;"></div>
    <div class="bubble" style="--size:2.305001171425504rem; --distance:9.094116165865703rem; --position:16.178866422966568%; --time:2.332856146471273s; --delay:-2.4202118349328683s;"></div>
  </div>
  <div class="content">
    <div>
      <div><b>ContactUS</b><a href="#"></a><a href="#">0687388575</a><a href="#"><b>E-mail</b></a><a href="#">hadesenergy@aol.com</a></div>
      <div><b>Address</b><a href="#">Buitenhof 46 Den Haag</a><a href="#">Netherlands</a></div>
      <div><b>SocialMedia</b><a href="#">Twitter: @haderenergy</a><a href="#">Insta:@hadesssenergy</a><a href="#">Twitter:@energyhadess</a></div>
      <div><b>Gemaakt Door</b><a href="#">Safa</a><a href="#">Dawid</a><a href="#">Omer</a><a href="#">Samsour</a></div>
    </div>
    <div><a class="image" href="#" target="_blank" style="background-image: url(&quot;https://i.imgur.com/UHXFCfL.png&quot;);"></a>
      <p>©2020 Groep 4</p>
    </div>
  </div>
</div>
<svg style="position:fixed; top:100vh;">
  <defs>
    <filter id="blob">
      <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"></feGaussianBlur>
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="blob"></feColorMatrix>
      <feComposite in="SourceGraphic" in2="blob" operator="atop"></feComposite>
    </filter>
  </defs>
</svg>

</body>
</html>
