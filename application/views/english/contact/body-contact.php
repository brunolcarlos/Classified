<div class="row container" style="">
    <div class="col s12 m12 l7 AnunciosCarros" style='margin-right: 75px'>
        <h1 class="h1DescCarro" style='margin-top: 30px;;margin-bottom: 20px'>Contact</h1>
        <?php if ($this->session->flashdata('erroPublish')) : ?>
            <div class="col s12 m12 l12">
                <p class="z-depth-1 flashData">
                    <?= $this->session->flashdata('erroPublish') ?>
                </p>
            </div>
        <?php endif; ?>
        <div class="modal-content">
            <div class="row z-depth-0" style="border: solid 1px #ccc;border-radius: 2px">
                <form class="col s12 m12 s12" style="padding-top: 10px" method="post">
                    <div class="row">
                        <div class="input-field col s12 m6 s6">
                            <input id="nameContact" type="text"  class="validate" >
                            <label for="nameContact">Name</label>
                        </div>
                        <div class="input-field col s12 m6 s6">
                            <input id="telContact" type="text"  class="telefone" >
                            <label for="telContact">Phone</label>
                        </div>
                        <div class="input-field col s12 m12 s12">
                            <input id="emailContact" type="email"  class="validate" >
                            <label for="emailContact" data-error="Incorrect format">Email</label>
                        </div>
                        <div class="input-field col s12 m12 s12">
						    <select name="subjectContact" id="subjectContact">
						      <option value="" disabled selected>Choose the subject</option>
						      <option value="Sponsored banner">Sponsored banner</option>
						      <option value="Suport">Suport</option>
						    </select>
						    <label>Choose the subject</label>
						</div>
                        <div class="input-field col s12 m12 s12">
                            <textarea id="message" class="materialize-textarea"></textarea>
                            <label for="message">Message</label>
                        </div>
                        <div class="input-field col s12 m12 s12">
                            <span id="retorno" class="erroEmail"></span>
                        </div>
                    </div>
                    <div class="modal-footer right-align">
                        <button style='margin-bottom: 10px' id="btnContact" class="waves-effect waves-light btn white-text #afb42b lime darken-2">Contact</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
