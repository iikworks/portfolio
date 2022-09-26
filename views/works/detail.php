<?php if(!defined('APP_VERSION')) die('access denied'); ?>
<?php tpl_include('layout/head', $vars); ?>
    <div class="container mx-auto mt-5 px-0 lg:px-10">
        <div class="bg-black bg-opacity-70 mx-3 lg:mx-0 rounded-2xl shadow-lg text-white p-4 lg:p-10">
            <h1 class="text-4xl uppercase font-bold"><?=$work['title']?></h1>
            <p class="mt-2">
                <?=$work['description']?>
                <div class="mt-4 grid grid-cols-1 gap-4 lg:grid-cols-2 lg:mx-0">
                    <div>
                        <?php if($work['link']){ ?>
                            <a href="<?=$work['link']?>" class="bg-fuchsia-500 hover:bg-fuchsia-800 bg-opacity-50 rounded-xl py-2 flex flex-col w-full transition duration-300" target="_blank">
                                <div class="text-center opacity-50">Ссылка:</div>
                                <div class="text-center font-medium -mt-1"><?=$work['link']?></div>
                            </a>
                        <?php } else { ?>
                            <div class="bg-fuchsia-800 bg-opacity-50 rounded-xl py-2 flex flex-col w-full">
                                <div class="text-center opacity-50">Ссылка:</div>
                                <div class="text-center font-medium text-red-400 -mt-1"><?=$work['link_message']?></div>
                            </div>
                        <?php } ?>
                    </div>
                    <div>
                        <?php if($work['github']){ ?>
                            <a href="<?=$work['github']?>" class="bg-fuchsia-500 hover:bg-fuchsia-800 bg-opacity-50 rounded-xl py-2 flex flex-col w-full transition duration-300" target="_blank">
                                <div class="text-center opacity-50">Github:</div>
                                <div class="text-center font-medium -mt-1"><?=$work['github']?></div>
                            </a>
                        <?php } else { ?>
                            <div class="bg-fuchsia-800 bg-opacity-50 rounded-xl py-2 flex flex-col w-full">
                                <div class="text-center opacity-50">Github:</div>
                                <div class="text-center font-medium text-red-400 -mt-1"><?=$work['github_message']?></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </p>
            <h1 class="text-3xl mt-4 uppercase font-bold">Изображения</h1>
            <?php
            foreach ($images as $image){
                echo sprintf('<img src="%s" class="img-fluid mt-2 rounded-xl" alt="Изображение #%d">',
                    UPLOAD_URL.'/'.$image['name'],
                    $image['id']
                );
            }
            ?>
            <a href="<?=url_for('works:index')?>" class="text-white bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 mt-10 justify-center font-medium text-md rounded-xl py-2 relative flex w-full hover:from-pink-500 hover:to-indigo-500">К списку работ</a>
        </div>
    </div>
<?php tpl_include('layout/footer', $vars); ?>