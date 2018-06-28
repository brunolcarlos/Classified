<div class="row container">
    <div class="col s12 m12 l12 AnunciosCarros">
        <h2 class="h1DescCarro">CAR SALE NEW IN UNITED STATES</h2>
        <div class="modal-content">
            <div class="row z-depth-0" style="padding: 10px">
                <?php foreach ($links as $dado): ?>

                    <!-- <?php //if($this->carroshome->contaPostsEstados($dado['state_code']) > 0) : ?> -->
                    <div class="chip" style='padding: 0 !important;border-radius: 0;border: none !important'>
                        <a class="chip" href="<?= base_url("state/$dado[state_code]") ?>" 
                            style='text-transform: uppercase !important ;font-size: 0.8em !important' alt='Classified - Car Sale New in <?= html_escape($dado['state']) ?>' title='Classified - Car Sale New in <?= html_escape($dado['state']) ?>' >
                            <?= html_escape($dado['state']) ?> 
                                <!-- ( <?= 
                                    $this->carroshome->contaPostsEstados($dado['state_code']); 
                                    ?> ) -->
                                </a>
                            </div>
                            <!-- <?php //endif; ?> -->
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .chip a{
                border:solid 1px #ccc !important;
                background: #eeeeee !important;

            }
            .chip a{
                color: #666 !important;
                border-radius:0;
                background: #eeeeee;
                border:solid 1px #e0e0e0;
                margin: 0px !important;
            }
            .chip a:hover{
                color: #fff !important;
                background: #c62828 !important;

            }


        </style>