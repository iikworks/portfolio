<?php if(!defined('APP_VERSION')) die('access denied'); ?>
<?php tpl_include('layout/head', $vars); ?>
    <div class="container mt-3">
        <div class="row">
            <?php foreach($works as $work){ ?>
                <div class="col-3">
                    <a href="<?=url_for('works:detail', ['id' => $work['id']])?>" class="text-decoration-none">
                        <div class="card text-white bg-secondary mb-3">
                            <div class="card-header text-uppercase"><?=$work['title']?></div>
                            <img src="<?=UPLOAD_URL.'/'.$work['image']['name']?>" alt="<?=$work['title']?>" height="170px;">
                            <div class="card-body">
                                <h4 class="card-title"><?=$work['technologies']?></h4>
                                <p class="card-text">
                                    <?=$work['short']?>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
<?php tpl_include('layout/footer', $vars); ?>