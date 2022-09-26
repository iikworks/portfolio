<?php if(!defined('APP_VERSION')) die('access denied'); ?>
<?php tpl_include('layout/head', $vars); ?>
    <div class="container mt-3">
        <h1 class="text-uppercase"><?=$work['title']?></h1>
        <p>
            <?=$work['description']?>
            <div class="row mt-3">
                <div class="col-6">
                    <?php if($work['link']){ ?>
                        <a href="<?=$work['link']?>" class="btn btn-success btn-sm w-100" target="_blank">Ссылка: <b><?=$work['link']?></b></a>
                    <?php } else { ?>
                        <a href="#" class="btn btn-secondary disabled btn-sm w-100">Ссылка: <span class="text-danger">недоступно</span></a>
                    <?php } ?>
                </div>
                <div class="col-6">
                    <?php if($work['github']){ ?>
                        <a href="<?=$work['github']?>" class="btn btn-success btn-sm w-100" target="_blank">Github: <b><?=$work['github']?></b></a>
                    <?php } else { ?>
                        <a href="#" class="btn btn-secondary disabled btn-sm w-100">Github: <span class="text-danger">недоступно</span></a>
                    <?php } ?>
                </div>
            </div>
        </p>
        <h1 class="text-uppercase mt-4">Изображения</h1>
        <?php
        foreach ($images as $image){
            echo sprintf('<img src="%s" class="img-fluid mt-2 rounded" alt="Изображение #%d">',
                UPLOAD_URL.'/'.$image['name'],
                $image['id']
            );
        }
        ?>
        <a href="<?=url_for('works:index')?>" class="btn btn-secondary mt-2 w-100">К списку работ</a>
    </div>
<?php tpl_include('layout/footer', $vars); ?>