<div class="result"></div>
<div class="row container">
    <div class="col s12 m12 l7 AnunciosCarros" style='margin-right: 75px'>
        <h1 class="h1DescCarro" style='margin-top: 30px;;margin-bottom: 20px'>Register, it's free</h1>
        <?php if ($this->session->flashdata('erroPublish')) : ?>
            <p class="z-depth-1 flashData" style='font-size: 1em'>
                <?= $this->session->flashdata('erroPublish') ?>
            </p>
        <?php endif; ?>
        <div class="modal-content">
            <div class="row z-depth-0" style="border: solid 1px #ccc">
                <form class="col s12 m12 s12 " id="formCadastro" method="post">
                    <div class="row">
                        <div class="input-field col s12 m6 s6">
                            <input id="name" type="text" name="name" class="validate" >
                            <label for="name">Name</label>
                        </div>
                        <div class="input-field col s12 m6 s6">
                            <input id="phone" type="text" name="phone" required="" class="telefone">
                            <label for="phone">Phone</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input id="email" type="email" name="email" required="">
                            <label for="email" id="emailErro" data-error="Incorrect format">Email</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <select name="state" required="" id="state">
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
                        <div class="input-field col s12 m12 s12">
                            <input id="password" type="password" required="" name="password" class="validate" autocomplete="off">
                            <label for="password">Password</label>
                        </div>

                    </div>
                    <div class="modal-footer right-align">
                        <button type="submit" class="waves-effect waves-light  btn white-text #fb8c00 orange darken-1" id="cadastrarP" style="margin-bottom: 10px;">Register</button>
                    </div>
                    <span id="spanload"></span>
                    <hr>
                    <div style='padding: 10px;background: #eeeeee;margin-bottom: 12px;margin-top: 10px;border:solid 1px #ccc'>
                        <h5 style='text-transform: uppercase;font-size:1.3em;border-bottom: 1px solid #ccc;padding-bottom: 10px'>Important information</h5>
                        <p>
                            You can keep up to 10 ads on our website totally free, if you are a Dealer or a private seller know that you can advertise for free. <br>
                            All free users are entitled to a private page where they will be displayed their last 10 activities that are active in our website, you can create this page by filling in the Custon Url field on the user edit page.<br>
                            Our website has VIP plans that are used to maintain our online portal at a very low cost, a part of this income is used in advertising that ends up reverting customers to your ads.<br>

                            Come and advertise with us right now.<br><br>

                            Regards<br><br>

                            Carsalenew.com<br>
                        </p>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- </div> -->
