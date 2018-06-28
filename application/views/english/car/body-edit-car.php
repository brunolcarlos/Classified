<div class="row container">
  <div class="col s12 m12 l8 AnunciosCarros">
    <h2 class="h1DescCarro">Edit ad / Required *</h2>
    <a id="btnEditImagesPost" class="waves-effect waves-teal btn-flat" style='font-size: 1em !important;
    '>Edit images</a>
    <a id="btnEditAds" class="waves-effect waves-teal btn-flat" style='font-size: 1em !important;
    '>Edit Ads</a>
    <form class="col s11 m11 s11 alinharDiv" id="formText" method="post">
      <div class="row">
        <div class="input-field col s12 m6 l6">
          <select name="make" id="make" required="">
            <option selected="" value="<?= html_escape($dadosCarro[0]['make']) ?>" value="">Make : <?= html_escape($dadosCarro[0]['make']) ?></option>
            <option value="Acura">Acura</option>
            <option value="Alfa Romeo">Alfa Romeo</option>
            <option value="Alpenlite">Alpenlite</option>
            <option value="Aluma">Aluma</option>
            <option value="Alumacraft">Alumacraft</option>
            <option value="AM General">AM General</option>
            <option value="AMC">AMC</option>
            <option value="American Hauler">American Hauler</option>
            <option value="American Motors">American Motors</option>
            <option value="Amphicar">Amphicar</option>
            <option value="Anderson">Anderson</option>
            <option value="Aprilia">Aprilia</option>
            <option value="Arctic Cat">Arctic Cat</option>
            <option value="Aston Martin">Aston Martin</option>
            <option value="Attitude">Attitude</option>
            <option value="Audi">Audi</option>
            <option value="Austin">Austin</option>
            <option value="Austin-Healey">Austin-Healey</option>
            <option value="Bad Boy">Bad Boy</option>
            <option value="Baja">Baja</option>
            <option value="BassCat">BassCat</option>
            <option value="Bayliner">Bayliner</option>
            <option value="Belmont">Belmont</option>
            <option value="Bentley">Bentley</option>
            <option value="Big Dog">Big Dog</option>
            <option value="Big Tex">Big Tex</option>
            <option value="Blue Bird">Blue Bird</option>
            <option value="BMW">BMW</option>
            <option value="Bobcat">Bobcat</option>
            <option value="Bombardier">Bombardier</option>
            <option value="Bravo">Bravo</option>
            <option value="Bronc">Bronc</option>
            <option value="Buell">Buell</option>
            <option value="Bugatti">Bugatti</option>
            <option value="Buick">Buick</option>
            <option value="Cadillac">Cadillac</option>
            <option value="Calico">Calico</option>
            <option value="Can-Am">Can-Am</option>
            <option value="Cargo Mate">Cargo Mate</option>
            <option value="Cargo South">Cargo South</option>
            <option value="Carriage">Carriage</option>
            <option value="Carry-On">Carry-On</option>
            <option value="Case IH ">Case IH </option>
            <option value="Caterpillar">Caterpillar</option>
            <option value="CF Moto">CF Moto</option>
            <option value="Chevrolet">Chevrolet</option>
            <option value="Chris-Craft">Chris-Craft</option>
            <option value="Chrysler">Chrysler</option>
            <option value="Cimarron">Cimarron</option>
            <option value="Club Car">Club Car</option>
            <option value="Coachmen">Coachmen</option>
            <option value="Coleman">Coleman</option>
            <option value="Continental Cargo">Continental Cargo</option>
            <option value="Crossroads">Crossroads</option>
            <option value="Cruiser RV">Cruiser RV</option>
            <option value="Cruiser Yachts">Cruiser Yachts</option>
            <option value="Cub Cadet">Cub Cadet</option>
            <option value="Cube Van">Cube Van</option>
            <option value="Cushman">Cushman</option>
            <option value="Daewoo">Daewoo</option>
            <option value="Daihatsu">Daihatsu</option>
            <option value="Damon">Damon</option>
            <option value="Datsun">Datsun</option>
            <option value="De Tomaso">De Tomaso</option>
            <option value="DeLorean">DeLorean</option>
            <option value="Desoto">Desoto</option>
            <option value="Diamo">Diamo</option>
            <option value="Diamond C">Diamond C</option>
            <option value="Diamond-T">Diamond-T</option>
            <option value="Dixie Chopper">Dixie Chopper</option>
            <option value="Dodge">Dodge</option>
            <option value="Doolittle">Doolittle</option>
            <option value="Ducati">Ducati</option>
            <option value="Dutchmen">Dutchmen</option>
            <option value="Eagle">Eagle</option>
            <option value="Eclipse">Eclipse</option>
            <option value="Edsel">Edsel</option>
            <option value="El Dorado">El Dorado</option>
            <option value="Excalibur">Excalibur</option>
            <option value="E-Z-GO">E-Z-GO</option>
            <option value="Featherlite">Featherlite</option>
            <option value="Ferrari">Ferrari</option>
            <option value="FIAT">FIAT</option>
            <option value="Fisher">Fisher</option>
            <option value="Fisker">Fisker</option>
            <option value="Flagstaff">Flagstaff</option>
            <option value="Fleetwood">Fleetwood</option>
            <option value="Ford">Ford</option>
            <option value="Forest River">Forest River</option>
            <option value="Four Winns">Four Winns</option>
            <option value="Freedom">Freedom</option>
            <option value="Freightliner">Freightliner</option>
            <option value="GEM">GEM</option>
            <option value="Genesis">Genesis</option>
            <option value="GEO">GEO</option>
            <option value="Georgie Boy">Georgie Boy</option>
            <option value="Glastron">Glastron</option>
            <option value="GMC">GMC</option>
            <option value="Great Dane">Great Dane</option>
            <option value="Gulf Stream">Gulf Stream</option>
            <option value="H&amp;H">H&amp;H</option>
            <option value="Harley-Davidson">Harley-Davidson</option>
            <option value="Haulmark">Haulmark</option>
            <option value="Heartland">Heartland</option>
            <option value="Hino">Hino</option>
            <option value="Holiday Rambler">Holiday Rambler</option>
            <option value="Homesteader">Homesteader</option>
            <option value="Honda">Honda</option>
            <option value="Hudson">Hudson</option>
            <option value="HUMMER">HUMMER</option>
            <option value="Husqvarna">Husqvarna</option>
            <option value="Hyosung">Hyosung</option>
            <option value="Hyundai">Hyundai</option>
            <option value="IHC">IHC</option>
            <option value="Indian">Indian</option>
            <option value="Infiniti">Infiniti</option>
            <option value="International">International</option>
            <option value="Interstate">Interstate</option>
            <option value="Isuzu">Isuzu</option>
            <option value="Itasca">Itasca</option>
            <option value="Jaguar">Jaguar</option>
            <option value="Jay Feather">Jay Feather</option>
            <option value="Jay Flight">Jay Flight</option>
            <option value="Jayco">Jayco</option>
            <option value="Jeep">Jeep</option>
            <option value="John Deere">John Deere</option>
            <option value="Jonway">Jonway</option>
            <option value="Joyner">Joyner</option>
            <option value="Kaiser">Kaiser</option>
            <option value="Kaufman">Kaufman</option>
            <option value="Kawasaki">Kawasaki</option>
            <option value="Kenworth">Kenworth</option>
            <option value="Keystone">Keystone</option>
            <option value="Kia">Kia</option>
            <option value="Kioti">Kioti</option>
            <option value="Kodiak">Kodiak</option>
            <option value="Komfort">Komfort</option>
            <option value="KTM">KTM</option>
            <option value="Kubota">Kubota</option>
            <option value="Kymco">Kymco</option>
            <option value="Lamborghini">Lamborghini</option>
            <option value="Lance">Lance</option>
            <option value="Lancia">Lancia</option>
            <option value="Land Rover">Land Rover</option>
            <option value="Lark">Lark</option>
            <option value="Larson">Larson</option>
            <option value="Lawrimore">Lawrimore</option>
            <option value="Leer">Leer</option>
            <option value="Lexus">Lexus</option>
            <option value="Liberty">Liberty</option>
            <option value="Lincoln">Lincoln</option>
            <option value="Linhai">Linhai</option>
            <option value="Little Guy">Little Guy</option>
            <option value="Livin Lite">Livin Lite</option>
            <option value="Load Trail">Load Trail</option>
            <option value="Look Trailers">Look Trailers</option>
            <option value="Lotus">Lotus</option>
            <option value="Mack">Mack</option>
            <option value="Maserati">Maserati</option>
            <option value="Maxum">Maxum</option>
            <option value="Maybach">Maybach</option>
            <option value="Mazda">Mazda</option>
            <option value="McLaren">McLaren</option>
            <option value="Mercedes-Benz">Mercedes-Benz</option>
            <option value="Mercruiser">Mercruiser</option>
            <option value="Mercury">Mercury</option>
            <option value="Merkur">Merkur</option>
            <option value="MG">MG</option>
            <option value="Midsota">Midsota</option>
            <option value="MINI">MINI</option>
            <option value="Mitsubishi">Mitsubishi</option>
            <option value="Monaco">Monaco</option>
            <option value="Monterey">Monterey</option>
            <option value="Morgan">Morgan</option>
            <option value="Nash">Nash</option>
            <option value="New Holland">New Holland</option>
            <option value="Newmar">Newmar</option>
            <option value="Nissan">Nissan</option>
            <option value="Nomad">Nomad</option>
            <option value="Oldsmobile">Oldsmobile</option>
            <option value="Opel">Opel</option>
            <option value="Pace">Pace</option>
            <option value="Pace American">Pace American</option>
            <option value="Packard">Packard</option>
            <option value="Packer Brothers">Packer Brothers</option>
            <option value="Palomino">Palomino</option>
            <option value="Panoz">Panoz</option>
            <option value="Peace Sports">Peace Sports</option>
            <option value="Peterbilt">Peterbilt</option>
            <option value="Peugeot">Peugeot</option>
            <option value="Phoenix">Phoenix</option>
            <option value="Piaggio">Piaggio</option>
            <option value="Pleasure-Way">Pleasure-Way</option>
            <option value="Plymouth">Plymouth</option>
            <option value="Polaris">Polaris</option>
            <option value="Pontiac">Pontiac</option>
            <option value="Porsche">Porsche</option>
            <option value="Pro-Line">Pro-Line</option>
            <option value="Propel">Propel</option>
            <option value="Quality Steel">Quality Steel</option>
            <option value="Raider">Raider</option>
            <option value="RAM">RAM</option>
            <option value="Regal">Regal</option>
            <option value="Reiser">Reiser</option>
            <option value="Renault">Renault</option>
            <option value="Rice Trailers">Rice Trailers</option>
            <option value="Ridley">Ridley</option>
            <option value="Riverside RV">Riverside RV</option>
            <option value="Rockwood">Rockwood</option>
            <option value="Roketa">Roketa</option>
            <option value="Rolls-Royce">Rolls-Royce</option>
            <option value="Royal Cargo">Royal Cargo</option>
            <option value="Rugged Road">Rugged Road</option>
            <option value="R-Vision">R-Vision</option>
            <option value="Saab">Saab</option>
            <option value="Salem">Salem</option>
            <option value="Saturn">Saturn</option>
            <option value="Scion">Scion</option>
            <option value="Sea Ray">Sea Ray</option>
            <option value="Sea-Doo">Sea-Doo</option>
            <option value="Shelby">Shelby</option>
            <option value="Skeeter">Skeeter</option>
            <option value="Ski-Doo">Ski-Doo</option>
            <option value="Skyline">Skyline</option>
            <option value="Smart">Smart</option>
            <option value="Snake River Trailer">Snake River Trailer</option>
            <option value="Snapper">Snapper</option>
            <option value="Starcraft">Starcraft</option>
            <option value="Sterling">Sterling</option>
            <option value="Studebaker">Studebaker</option>
            <option value="Subaru">Subaru</option>
            <option value="Sun Tracher">Sun Tracher</option>
            <option value="Sunbeam">Sunbeam</option>
            <option value="Sunny Brook">Sunny Brook</option>
            <option value="Sure-Trac">Sure-Trac</option>
            <option value="Suzuki">Suzuki</option>
            <option value="Tesla">Tesla</option>
            <option value="Thor Industries">Thor Industries</option>
            <option value="Tiffin">Tiffin</option>
            <option value="Toro">Toro</option>
            <option value="Toyota">Toyota</option>
            <option value="Tracker">Tracker</option>
            <option value="Triton">Triton</option>
            <option value="Triumph">Triumph</option>
            <option value="UD Trucks">UD Trucks</option>
            <option value="US Cargo">US Cargo</option>
            <option value="V-Cross">V-Cross</option>
            <option value="Vespa">Vespa</option>
            <option value="Victory">Victory</option>
            <option value="Volkswagen">Volkswagen</option>
            <option value="Volvo">Volvo</option>
            <option value="Wabash">Wabash</option>
            <option value="Weekend Warrior">Weekend Warrior</option>
            <option value="Wellcraft">Wellcraft</option>
            <option value="Wells Cargo">Wells Cargo</option>
            <option value="Wildwood">Wildwood</option>
            <option value="Willys">Willys</option>
            <option value="Winnebago">Winnebago</option>
            <option value="Xpress">Xpress</option>
            <option value="Yamaha">Yamaha</option>
            <option value="Yetti">Yetti</option>
            <option value="Yugo">Yugo</option>
      </select>
</div>
<div class="input-field col s12 m6 l6">
    <input id="model" name="model" type="text" required="" value="<?= html_escape($dadosCarro[0]['modelo']) ?>"  class="validate">
    <label for="model">Model - Ex : Murano *</label>
</div>
<div class="input-field col s12 m6 l6">
    <input id="price" name="price" type="number" required="" value="<?= html_escape($dadosCarro[0]['price']) ?>" class="validate">
    <label for="price">Price - Ex: 15000*</label>
</div>
<div class="input-field col s12 m6 l6">
    <input id="youtube" name="youtube" type="text" required="" value="<?= html_escape($dadosCarro[0]['youtube']) ?>" class="validate">
    <label for="youtube">Link Youtube</label>
</div>
<div class="input-field col s12 m6 l6">
    <input id="vin" name="vin" type="text" value="<?= html_escape($dadosCarro[0]['vin']) ?>" class="validate">
    <label for="vin">VIN</label>
</div>
<div class="input-field col s12 m6 l6">
    <input id="odometer" name="odometer" type="number" required="" value="<?= html_escape($dadosCarro[0]['odometer']) ?>"  class="validate">
    <label for="odometer">Odometer - Miles Ex: 23500*</label>
</div>
<input type="number" id="idpost" hidden="" name="idpost" value="<?= html_escape($dadosCarro[0]['id']) ?>">

<div class="col s12 m6 l6">
    <select name="condition" id="condition">
      <option value="<?= html_escape($dadosCarro[0]['condition']) ?>">Condition : <?= html_escape($dadosCarro[0]['condition']) ?></option>
      <option value="new">new</option>
      <option value="like new">like new</option>
      <option value="excellent">excellent</option>
      <option value="good">good</option>
      <option value="fair">fair</option>
      <option value="salvage">salvage</option>
</select>
<label>Condition</label>
</div>
<div class="col s12 m6 l6">
    <select name="year" required=""  id="year">
      <option value="<?= html_escape($dadosCarro[0]['year']) ?>">Year : <?= html_escape($dadosCarro[0]['year']) ?></option>
      <option value="2017">2017</option>
      <option value="2016">2016</option>
      <option value="2015">2015</option>
      <option value="2014">2014</option>
      <option value="2013">2013</option>
      <option value="2012">2012</option>
      <option value="2011">2011</option>
      <option value="2010">2010</option>
      <option value="2009">2009</option>
      <option value="2008">2008</option>
      <option value="2007">2007</option>
      <option value="2006">2006</option>
      <option value="2005">2005</option>
      <option value="2004">2004</option>
      <option value="2003">2003</option>
      <option value="2002">2002</option>
      <option value="2001">2001</option>
      <option value="2000">2000</option>
      <option value="1999">1999</option>
      <option value="1998">1998</option>
      <option value="1997">1997</option>
      <option value="1996">1996</option>
      <option value="1995">1995</option>
      <option value="1994">1994</option>
      <option value="1993">1993</option>
      <option value="1992">1992</option>
      <option value="1991">1991</option>
      <option value="1990">1990</option>
      <option value="1989">1989</option>
      <option value="1988">1988</option>
      <option value="1987">1987</option>
      <option value="1986">1986</option>
      <option value="1985">1985</option>
      <option value="1984">1984</option>
      <option value="1983">1983</option>
      <option value="1982">1982</option>
      <option value="1981">1981</option>
      <option value="1980">1980</option>
      <option value="1979">1979</option>
      <option value="1978">1978</option>
      <option value="1977">1977</option>
      <option value="1976">1976</option>
      <option value="1975">1975</option>
      <option value="1974">1974</option>
      <option value="1973">1973</option>
      <option value="1972">1972</option>
      <option value="1971">1971</option>
      <option value="1970">1970</option>
      <option value="1969">1969</option>
      <option value="1968">1968</option>
      <option value="1967">1967</option>
      <option value="1966">1966</option>
      <option value="1965">1965</option>
      <option value="1964">1964</option>
      <option value="1963">1963</option>
      <option value="1962">1962</option>
      <option value="1961">1961</option>
      <option value="1960">1960</option>
      <option value="1959">1959</option>
      <option value="1958">1958</option>
      <option value="1957">1957</option>
      <option value="1956">1956</option>
      <option value="1955">1955</option>
      <option value="1954">1954</option>
      <option value="1953">1953</option>
      <option value="1952">1952</option>
      <option value="1951">1951</option>
      <option value="1950">1950</option>
      <option value="1949">1949</option>
      <option value="1948">1948</option>
      <option value="1947">1947</option>
      <option value="1946">1946</option>
      <option value="1945">1945</option>
      <option value="1944">1944</option>
      <option value="1943">1943</option>
      <option value="1942">1942</option>
      <option value="1941">1941</option>
      <option value="1940">1940</option>
      <option value="1939">1939</option>
      <option value="1938">1938</option>
      <option value="1937">1937</option>
      <option value="1936">1936</option>
      <option value="1935">1935</option>
      <option value="1934">1934</option>
      <option value="1933">1933</option>
      <option value="1932">1932</option>
      <option value="1931">1931</option>
      <option value="1930">1930</option>
      <option value="1929">1929</option>
      <option value="1928">1928</option>
      <option value="1927">1927</option>
      <option value="1926">1926</option>
      <option value="1925">1925</option>
      <option value="1924">1924</option>
      <option value="1923">1923</option>
      <option value="1922">1922</option>
      <option value="1921">1921</option>
      <option value="1920">1920</option>
      <option value="1919">1919</option>
      <option value="1918">1918</option>
      <option value="1917">1917</option>
      <option value="1916">1916</option>
      <option value="1915">1915</option>
      <option value="1914">1914</option>
      <option value="1913">1913</option>
      <option value="1912">1912</option>
      <option value="1911">1911</option>
      <option value="1910">1910</option>
      <option value="1909">1909</option>
      <option value="1908">1908</option>
      <option value="1907">1907</option>
      <option value="1906">1906</option>
      <option value="1905">1905</option>
      <option value="1904">1904</option>
      <option value="1903">1903</option>
      <option value="1902">1902</option>
      <option value="1901">1901</option>
      <option value="1900">1900</option>
</select>
<label>Year *</label>
</div>
<div class="col s12 m6 l6">
    <select name="cylinders" id="cylinders">
      <option value="<?= html_escape($dadosCarro[0]['cylinders']) ?>">Cylinders : <?= html_escape($dadosCarro[0]['cylinders']) ?></option>
      <option value="4 cylinders">4 cylinders</option>
      <option value="5 cylinders">5 cylinders</option>
      <option value="6 cylinders">6 cylinders</option>
      <option value="8 cylinders">8 cylinders</option>
      <option value="10 cylinders">10 cylinders</option>
      <option value="12 cylinders">12 cylinders</option>
      <option value="other">other</option>
</select>
<label>Cylinders</label>
</div>
<div class="col s12 m6 l6">
    <select name="drive" id="drive">
      <option value="<?= html_escape($dadosCarro[0]['drive']) ?>">Drive : <?= html_escape($dadosCarro[0]['drive']) ?></option>
      <option value="fwd">fwd</option>
      <option value="rwd">rwd</option>
      <option value="4wd">4wd</option>
</select>
<label>Drive</label>
</div>
<div class="col s12 m6 l6">
    <select name="fuel" required="" id="fuel" >
      <option value="<?= html_escape($dadosCarro[0]['fuel']) ?>">Fuel : <?= html_escape($dadosCarro[0]['fuel']) ?></option>
      <option value="gas">gas</option>
      <option value="diesel">diesel</option>
      <option value="hybrid">hybrid</option>
      <option value="electric">electric</option>
      <option value="other">other</option>
</select>
<label>Fuel *</label>
</div>
<div class="col s12 m6 l6">
    <select name="color" id="color">
      <option value="<?= html_escape($dadosCarro[0]['color']) ?>">Color : <?= html_escape($dadosCarro[0]['color']) ?></option>
      <option value="black">black</option>
      <option value="blue">blue</option>
      <option value="green">green</option>
      <option value="gray">gray</option>
      <option value="orange">orange</option>
      <option value="purple">purple</option>
      <option value="red">red</option>
      <option value="silver">silver</option>
      <option value="white">white</option>
      <option value="yellow">yellow</option>
      <option value="custom">custom</option>
      <option value="brown">brown</option>
</select>
<label>Color *</label>
</div>
<div class="col s12 m6 l6">
    <select name="size" id="size">
      <option value="<?= html_escape($dadosCarro[0]['size']) ?>">Size : <?= html_escape($dadosCarro[0]['size']) ?></option>
      <option value="compact">compact</option>
      <option value="full-size">full-size</option>
      <option value="mid-size">mid-size</option>
      <option value="sub-compact">sub-compact</option>
</select>
<label>Size</label>
</div>
<div class="col s12 m6 l6">
    <select name="status" id="status">
      <option value="<?= html_escape($dadosCarro[0]['status']) ?>">Status : <?= html_escape($dadosCarro[0]['status']) ?></option>
      <option value="clean">clean</option>
      <option value="salvage">salvage</option>
      <option value="rebuilt">rebuilt</option>
      <option value="lien">lien</option>
      <option value="missing">missing</option>
</select>
<label>Status</label>
</div>
<div class="col s12 m6 l6">
    <select name="transmission" required="" id="transmission" >
      <option value="<?= html_escape($dadosCarro[0]['transmission']) ?>">Transmission : <?= html_escape($dadosCarro[0]['transmission']) ?></option>
      <option value="manual">manual</option>
      <option value="automatic">automatic</option>
      <option value="other">other</option>
</select>
<label>Transmission *</label>
</div>
<div class="col s12 m6 l6">
    <select name="bodytype" required="" id="type">
      <option value="<?= html_escape($dadosCarro[0]['bodytype']) ?>">Type : <?= html_escape($dadosCarro[0]['bodytype']) ?></option>
      <option value="bus">bus</option>
      <option value="convertible">convertible</option>
      <option value="coupe">coupe</option>
      <option value="hatchback">hatchback</option>
      <option value="mini-van">mini-van</option>
      <option value="offroad">offroad</option>
      <option value="pickup">pickup</option>
      <option value="sedan">sedan</option>
      <option value="truck">truck</option>
      <option value="SUV">SUV</option>
      <option value="wagon">wagon</option>
      <option value="van">van</option>
      <option value="other">other</option>
</select>
</div>
<div class="col s12 m12 l12">
    <select name="state" required="" id="state">
      <option value="<?= html_escape($dadosCarro[0]['stateAuto']) ?>">State : <?= html_escape($dadosCarro[0]['stateAuto']) ?></option>
      <option value="AK">AK</option>
      <option value="AL">AL</option>
      <option value="AR">AR</option>
      <option value="AZ">AZ</option>
      <option value="CA">CA</option>
      <option value="CO">CO</option>
      <option value="CT">CT</option>
      <option value="DC">DC</option>
      <option value="DE">DE</option>
      <option value="FL">FL</option>
      <option value="GA">GA</option>
      <option value="HI">HI</option>
      <option value="IA">IA</option>
      <option value="ID">ID</option>
      <option value="IL">IL</option>
      <option value="IN">IN</option>
      <option value="KS">KS</option>
      <option value="KY">KY</option>
      <option value="LA">LA</option>
      <option value="MA">MA</option>
      <option value="MD">MD</option>
      <option value="ME">ME</option>
      <option value="MI">MI</option>
      <option value="MN">MN</option>
      <option value="MO">MO</option>
      <option value="MS">MS</option>
      <option value="MT">MT</option>
      <option value="NC">NC</option>
      <option value="ND">ND</option>
      <option value="NE">NE</option>
      <option value="NH">NH</option>
      <option value="NJ">NJ</option>
      <option value="NM">NM</option>
      <option value="NV">NV</option>
      <option value="NY">NY</option>
      <option value="OH">OH</option>
      <option value="OK">OK</option>
      <option value="OR">OR</option>
      <option value="PA">PA</option>
      <option value="RI">RI</option>
      <option value="SC">SC</option>
      <option value="SD">SD</option>
      <option value="TN">TN</option>
      <option value="TX">TX</option>
      <option value="UT">UT</option>
      <option value="VA">VA</option>
      <option value="VT">VT</option>
      <option value="WA">WA</option>
      <option value="WI">WI</option>
      <option value="WV">WV</option>
      <option value="WY">WY</option>
</select>
<label>State</label>
</div>
<div class="input-field col s12 m12 l12">
    <input id="city" name="city" type="text" required="" value="<?= html_escape($dadosCarro[0]['city']) ?>"  class="validate">
    <label for="city">Insert City *</label>
</div>
<form class="col s12">
    <div class="input-field col s12">
      <textarea id="info" name="info" class="materialize-textarea"><?= html_escape($dadosCarro[0]['detalhes']) ?></textarea>
      <label for="info">Complementary information</label>
</div>
</form>
<br>
<div class="col s12 m12 l12" id="btnHide">
    <button id="btneditPost" name="btnPostar" class="btn waves-effect waves-light right #afb42b lime darken-2" type="submit" name="action">Edit ad
      <i class="material-icons right">send</i>
</button> <br>
<span hidden="" id="retorno" style='border-radius:3px;padding: 5px;background: red;color: #fff;text-transform: uppercase;'>

</span>
</div>
</div>
</form>
<form method="post" action="<?= base_url('alteraimagens'); ?>  " id="formImages" enctype="multipart/form-data">
      <span>
            <label>Select new images:</label> <br>
            <label>Max 10 images:</label> <br>
            <label>Post : <?= html_escape($dadosCarro[0]['id']) ?></label>
            <br>
            <br>
            <label for="fotos_file">
                  <img style='width: 150px;margin-left: 5px;cursor: pointer;' src="<?= base_url('img/photo-icon-23.jpg') ?> " alt="">
            </label>
            <input hidden="" type="file" name="media[]" multiple="multiple" accept="image/x-png, image/gif, image/jpeg" id="fotos_file" class="file-path validate"/>
      </span>
      <br/>
      <div style="display:none;width:100%;height:200px;min-height:200px !important;height:auto;" id="prev_file"></div>
      <input hidden="" type="hidden" name="id" value="<?= html_escape($dadosCarro[0]['id']) ?>">
      <div class="col s12 file-field input-field" style='padding: 0'>
            <input name="media"  id="submitBtn" type="submit" style='margin-left:5px;float: left;' class="btn waves-effect waves-light left #afb42b lime darken-2"/>
      </div>
      <span class="col s12 m12 l12" style='float: left;margin-bottom:30px;height: 30px;padding-top: 30px' id="recebeload"></span>
</form>
</div>

<script>

    jQuery(document).ready(function() {

      $("#btneditPost").click(function(event) {
        event.preventDefault();

        var make =$("#make").val();
        var model =$("#model").val();
        var price =$("#price").val();
        var vin =$("#vin").val();
        var odometer =$("#odometer").val();
        var condition =$("#condition").val();
        var year =$("#year").val();
        var cylinders =$("#cylinders").val();
        var drive =$("#drive").val();
        var fuel =$("#fuel").val();
        var color =$("#color").val();
        var size =$("#size").val();
        var status =$("#status").val();
        var transmission =$("#transmission").val();
        var type =$("#type").val();
        var state =$("#state").val();
        var city =$("#city").val();
        var info =$("#info").val();
        var idpost =$("#idpost").val();
        var youtube =$("#youtube").val();

        var url = "<?= base_url('editarcarro/editarcarros') ?>";

        $.post(url, {
          make: make,
          model: model,
          price: price,
          vin: vin,
          odometer: odometer,
          condition: condition,
          youtube: youtube,
          year: year,
          cylinders: cylinders,
          drive: drive,
          fuel: fuel,
          color: color,
          size: size,
          status: status,
          transmission: transmission,
          type: type,
          state: state,
          city: city,
          info: info,
          idpost: idpost

    }, function(data) {

          $("#retorno").show();
          $("#retorno").html(data);

          setTimeout(function(){
            $("#retorno").fadeOut(1000);
      },3000);

    });
  });
});
    $('#submitBtn').prop('disabled',true);

    $('#formImages').hide();

    $('#btnEditImagesPost').click(function(event) {
      $('#btnEditImagesPost').hide();
      $('#formText').hide();
      $('#formImages').show();
      $('#btnEditAds').show();
});
    $('#btnEditAds').click(function(event) {
      $('#btnEditAds').hide();
      $('#formImages').hide();
      $('#formText').show();
      $('#btnEditImagesPost').show();
});



</script>


<script type="text/javascript">
      $('#fotos_file').change(function(){
            $('#prev_file').css({'display':'block'});
            $('#prev_file').empty();

//limite de fotos
if(this.files.length<=10){
      $('#submitBtn').prop('disabled',false);
      $('#submitBtn').click(function(event) {

            $('#recebeload').html("<img src='<?= base_url('img/barra_loading.gif') ?>'>");

      });

      $('<img/>').attr({'src':'<?= base_url('img/barra_loading.gif') ?>','class':'loader','style':'width:100px;float:left;'}).appendTo('#prev_file');
      for(i=0; i<this.files.length; i++){
//coloque uma imagem tipo preloader na mesma pasta do arquivo

var reader = new FileReader();
reader.onload = function(e){
      $('img.loader').delay(3000).remove();
      $('<img/>').attr({'src':e.target.result,'alt':'Preview','style':'width:90px;height:75px;float:left;margin:05px;','title':'Preview', 'class':'imgpreview'}).appendTo($('#prev_file'));
};
reader.readAsDataURL(this.files[i]);
}}else{
      Materialize.toast('The maximum allowed and 10!', 4000); // 4000 is the duration of the toast

      return false;
}});
</script>

<style>
      #fotos_file{
            padding: 5px;
            color: #fff;
            background: orange;
            margin-top: 15px;
            margin-bottom: 15px;
      }
      .imgpreview{
            border: solid 2px orange;
      }

      #formImages{
            height: auto;
            background: #fafafa  ;
            /* border: solid 1px #eee ; */
            padding: 10px !important;
            padding-bottom: 20px;
            float: left;
      }
      #btnEditImagesPost{
        float: right;
        padding: 5px;
        padding-top: 0;
        font-size: 1em !important;
        margin-right: 30px;
        background: #f5f5f5;
        color: #1e88e5 !important;
        margin-top: 10px;
        box-shadow: none;
        text-decoration: true;
        border: solid 1px #e0e0e0;
  }
  #btnEditAds{
        float: right;
        padding: 5px;
        padding-top: 0;
        font-size: 1em !important;
        margin-right: 30px;
        background: #f5f5f5;
        color: #1e88e5 !important;
        margin-top: 10px;
        box-shadow: none;
        border: solid 1px #e0e0e0;
        display: none;
  }
</style>