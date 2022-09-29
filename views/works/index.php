<?php use IIKWorks\Portfolio\Controllers\WorksController;

view('layout/head', $vars); ?>
    <div class="container mx-auto mt-6 px-0 lg:px-10">
        <div class="grid grid-cols-1 mx-5 gap-4 lg:grid-cols-4 lg:mx-0">
            <?php foreach($works as $work){ ?>
                <a href="<?=url_for(WorksController::class, 'detail', ['id' => $work['id']])?>" class="text-white bg-black bg-opacity-40 rounded-lg shadow-md hover:shadow-2xl transition duration-300">
                    <div class="opacity-75 font-medium text-lg text-center my-2">
                        <?=$work['title']?>
                    </div>
                    <img src="<?=UPLOAD_URL.'/'.$work['image']['name']?>" alt="<?=$work['title']?>">
                    <div class="mt-3">
                        <div class="font-medium text-lg opacity-50 mx-5"><?=$work['technologies']?></div>
                        <div class="mx-5 mb-3">
                            <?=$work['short']?>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
<?php view('layout/footer', $vars); ?>