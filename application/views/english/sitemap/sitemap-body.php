<div class="result"></div>
<div class="row container">
    <div class="col s12 m12 l8 AnunciosCarros">
        <h1 class="h1DescCarro">Sitemap - Last Cars</h1>
        <div class="modal-content">
            <div class="row z-depth-0" style="padding: 10px">
                <?php foreach ($links as $dado): ?>
                    <?php 
                    $fotos = $this->carroshome->puxaThumb($dado['id']);
                    ?>
                    <div class="chip" style='border-radius:0;background: #eeeeee;border:solid 1px #e0e0e0;padding-top:-3px !important'>
                        <a href="<?= base_url("car/$dado[id]-".str_replace(" ","-",removehtml($dado['modelo']))) ?>" style=' !important; color: #666 !important;text-transform: uppercase !important ;font-size: 0.8em !important' alt='<?= base_url("car/$dado[id]-".str_replace(" ","-",$dado['modelo'])) ?>' title='<?= html_escape($dado['modelo']) ?>' >
                            <?= html_escape($dado['modelo'])." - ".html_escape($dado['stateAuto']) ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
