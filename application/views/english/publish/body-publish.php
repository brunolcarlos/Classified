<?php
$dados = $this->session->userdata('logado'); 
$usuario = $this->cadastro_model->verificaEmail($dados['email']); 
?>

<?php 
if(vipVencido(date("Y-m-d"),$usuario['validadeVip'],$usuario['userVip'])) : $this->cadastro_model->resetaVipVencido($usuario);
redirect(base_url("publish"),'refresh'); 
endif;
?>
<div class="row container">
    <div class="col s12 m12 l8 AnunciosCarros" style='margin-right: 10px'>
        <h2 class="h1DescCarro">Publish / Required *</h2>
        <?php if ($this->session->flashdata('erroUpload')) : ?>
            <div class="col s12 m12 l12">
                <p class="z-depth-1 flashData">
                    <i class="material-icons alinhaIcone margenIcone">announcement</i>
                    <?= $this->session->flashdata('erroUpload') ?>
                </p>
            </div>
        <?php endif; ?>
        <?php if (totalCarros($usuario['idUsuario']) >= $usuario['limitCars'] or vipVencido(date("Y-m-d"),$usuario['validadeVip'],$usuario['userVip'])): ?>

            <p class='pLimiteCars'>
                You have <?= totalCarros($usuario["idUsuario"]) ?>/<?= $usuario["limitCars"] ?> cars<br>
                Your current plan is <?= planoVip($usuario['userVip'])?>, you have a limit of <?= $usuario['limitCars'] ?> cars to post. <br>
                Please delete some automobile or make an update for some VIP plan.<br><br>
                <a href='<?= base_url("admin/vip") ?>' class='color: #fff'>Update or Delete Cars</a>
                <br><br>
                Thanks<br>
                <br>
                Regards<br>
                <br>
                Carsalenew.com<br>
            </p> 

        <?php else: ?>
            <p style='padding: 5px;background: #e65100 ;color: #fff;border-radius: 2px;text-align: center;text-transform: uppercase;'>
                You have <?= totalCarros($usuario["idUsuario"]) ?>/<?= $usuario["limitCars"] ?> cars<br>
            </p>
            <form class="col s11 m11 s11 alinharDiv" id="formPostar" method="post" action="postcar" enctype="multipart/form-data">
                <div class="row">
                    <div class="input-field col s12 m6 l6 makes">
                        <input id="make" name="make" type="text" required=""  class="validate">
                        <label for="make">Make - Fabricante *</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <input id="model" name="model" type="text" required=""  class="validate">
                        <label for="model">Model - Ex : Murano *</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <input id="price" name="price" type="number" required="" class="validate">
                        <label for="price">Price - Ex: 15000*</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <input id="youtube" name="youtube" type="text" required="" class="validate">
                        <label for="youtube">Link Youtube</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <input id="vin" name="vin" type="text" class="validate">
                        <label for="vin">VIN</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <input id="odometer" name="odometer" type="number" required=""  class="validate">
                        <label for="odometer">Odometer - Miles Ex: 23500*</label>
                    </div>


                        <input name="idUsuario" value="<?= $usuario["idUsuario"] ?>" type="hidden">


                    <div class="col s12 m6 l6">
                        <select name="condition">
                            <option value="Uninformed">Select condition</option>
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
                        <select name="year" required="" >
                            <option value="Uninformed">Select Year</option>
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
                        <select name="cylinders">
                            <option value="Uninformed">Select cylinders</option>
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
                        <select name="drive">
                            <option value="Uninformed">Select drive</option>
                            <option value="fwd">fwd</option>
                            <option value="rwd">rwd</option>
                            <option value="4wd">4wd</option>
                        </select>
                        <label>Drive</label>
                    </div>
                    <div class="col s12 m6 l6">
                        <select name="fuel" required="" >
                            <option value="Uninformed">Select fuel *</option>
                            <option value="gas">gas</option>
                            <option value="diesel">diesel</option>
                            <option value="hybrid">hybrid</option>
                            <option value="electric">electric</option>
                            <option value="other">other</option>
                        </select>
                        <label>Fuel *</label>
                    </div>
                    <div class="col s12 m6 l6">
                        <select name="color">
                            <option value="Uninformed">Select color *</option>
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
                        <select name="size">
                            <option value="Uninformed">Select size</option>
                            <option value="compact">compact</option>
                            <option value="full-size">full-size</option>
                            <option value="mid-size">mid-size</option>
                            <option value="sub-compact">sub-compact</option>
                        </select>
                        <label>Size</label>
                    </div>
                    <div class="col s12 m6 l6">
                        <select name="status">
                            <option value="Uninformed">Select status</option>
                            <option value="clean">clean</option>
                            <option value="salvage">salvage</option>
                            <option value="rebuilt">rebuilt</option>
                            <option value="lien">lien</option>
                            <option value="missing">missing</option>
                        </select>
                        <label>Status</label>
                    </div>
                    <div class="col s12 m6 l6">
                        <select name="transmission" required=""  >
                            <option value="">Select Transmission *</option>
                            <option value="manual">manual</option>
                            <option value="automatic">automatic</option>
                            <option value="other">other</option>
                        </select>
                        <label>Transmission *</label>
                    </div>
                    <div class="col s12 m6 l6">
                        <select name="bodytype" required="" >
                            <option value="Uninformed">Select Type *</option>
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
                        <select name="state" required="" >
                            <option value="all">Select state *</option>
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
                        <input id="city" name="city" type="text" required=""  class="validate">
                        <label for="city">Insert City *</label>
                    </div>
                    <form class="col s12">
                        <div class="input-field col s12">
                            <textarea id="info" name="info" class="materialize-textarea"></textarea>
                            <label for="info">Complementary information</label>
                        </div>
                    </form>
                    <div class="progress #01579b light-blue darken-4" style="height: 25px;">
                        Wait, sending images.
                        <div class="indeterminate #f57c00 orange darken-2"></div>
                    </div>
                    <div class="col s12 m12 l12" id="inputHide">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>
                                    <i class="material-icons alinhaIcone margenIcone">perm_media</i>File * max 10 photos
                                </span>
                                <input type="file" id="upload" name="media[]"  multiple="" >

                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" placeholder="Only images | JPG | PNG and GIF" id="uploads" type="text">
                            </div>
                            <div style='padding: 15px;background: #f5f5f5 ;color: #424242;border-radius: 5px;margin-bottom: 20px;border:solid 1px #eeeeee '>
                                <h5>English</h5>
                                *The sending of images will follow the alphabetical order or numeral in which the images are named.<br>
                                *Select up to 10 images
                                <br>
                                <br>
                                <h5>Português</h5>
                                *O envio de imagens obedecerá a ordem alfabética ou numeral em que as imagens estiverem nomeadas.<br>
                                *Selecione até 10 imagens
                                <br>
                                <br>
                                <h5>Spanish</h5>
                                *El envío de imágenes seguirá el orden alfabético o el número en el que se nombran las imágenes.<br>
                                *Seleccione un máximo de 10 imágenes
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m12 l12" id="btnHide">
                        <button id="btnPostar" name="btnPostar" class="btn waves-effect waves-light right #afb42b lime darken-2" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        <?php endif ?>
    </div>
