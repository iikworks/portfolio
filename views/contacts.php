<?php if(!defined('APP_VERSION')) die('access denied'); ?>
<?php tpl_include('layout/head', $vars); ?>
    <div class="container mx-auto mt-6 px-0 lg:px-10">
        <div class="grid grid-cols-1 mx-5 gap-4 md:grid-cols-3 md:mx-0">
            <?php foreach($contacts as $contact){ ?>
                <a href="<?=$contact['link']?>" target="_blank" class="overflow-hidden bg-opacity-50 relative bg-black shadow-lg hover:shadow-2xl transition duration-300 ring-1 ring-black/5 rounded-xl flex items-center dark:bg-slate-800 dark:highlight-white/5">
                    <img class="absolute -left-4 w-24 h-24 rounded-full" src="/assets/img/social/<?=$contact['img']?>" alt="<?=$contact['img_alt']?>">
                    <div class="flex flex-col py-5 pl-24">
                        <strong class="text-white text-sm font-medium"><?=$contact['img_alt']?></strong>
                        <span class="text-slate-300 text-sm font-medium"><?=$contact['username']?></span>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
<?php tpl_include('layout/footer', $vars); ?>