<?php
$_title = _e("Histórico Rank criptomoedas");

$_meta_description = _e('Histórico Rank criptomoedas');

$compare_coin = isset($_GET['compare']) ? $_GET['compare'] : 'bitcoin';
$current_moeda = isset($_COOKIE['moeda']) ? $_COOKIE['moeda'] : 'USD';

if (!DEBUG) {
    require __DIR__ . '/../inc/ads.inc.php';
}

$listLangs = [
    'USD' => '$',
    'BTC' => 'BTC'
];
if(!isset($listLangs[$current_moeda])){
    $current_moeda='USD';
}
?>
<input type="hidden" id="order_name" value="rank"/>
<input type="hidden" id="order_type" value="asc"/>

<div class="row">
    <div class="col-md-12">
        <h1 style="padding: 3px;margin-top:20px;font-size:25px"><?= _e($_title) ?></h1>
    </div>
    <div class="col-md-10">
        <div class="card" style="  margin-top: 0px;">
            <div class="card-body" style="padding:0;margin-left: 10px;margin-right: 10px">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title">
                            <!--<span  class="h4">Filtrar por Rank</span>-->
                        </div>
                        <div class="row">
                            <div class="form-group col-4" style="padding-top: 0px!important;margin-top: 15px; max-width: 110px">
                                <?= _e('Rank início') ?>
                                <input id="min_rank" type="number" class="form-control text-center" >
                            </div>
                            <div class="form-group col-4" style="padding-top: 0px!important;margin-top: 15px;max-width: 110px">
                                <?= _e('Rank fim') ?>                                
                                <input id="max_rank" type="number" class="form-control text-center" >
                            </div>
                        </div>
                        <!--<div id="sliderLimit" class="slider" style=""></div>-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 ml-auto">
                        <form method="POST" id="formBusca">
                            <div  class="form-group input-group has-default bmd-form-group">
                                <input type="text" name="input_busca" id="input_busca"  class="form-control" placeholder="<?= _e('Pesquisar moeda'); ?>"  value="<?= isset($_GET['busca']) ? $_GET['busca'] : '' ?>">
                                <button type="submit" class="btn btn-sm btn-primary btn-raised btn-fab btn-round">
                                    <i class="material-icons">search</i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="tableContent" >

                </div>

            </div>
        </div>
    </div> 
    <?php
    if (!DEBUG) {
        require __DIR__ . '/../inc/ads_lado.inc.php';
    }
    ?>
</div>
<div class="text-center">
    <?= _e('Fonte dos dados:') ?> <a href="https://coinmarketcap.com" target="_blank">CoinMarketCap</a>
</div>