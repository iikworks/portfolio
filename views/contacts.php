<?php if(!defined('APP_VERSION')) die('access denied'); ?>
<?php tpl_include('layout/head', $vars); ?>
    <div class="container mt-3">
        <ul class="list-group">
            <li class="list-group-item px-2">
                <div class="table-responsive">
                    <table class="table table-borderless mb-0 pb-0">
                        <tbody>
                            <?php foreach($contacts as $contact){ ?>
                                <tr style="vertical-align: middle;">
                                    <td style="width: 50px;">
                                        <a href="<?=$contact['link']?>" class="text-decoration-none" target="_blank">
                                            <img src="/assets/img/social/<?=$contact['img']?>" width="32" alt="<?=$contact['img_alt']?>">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?=$contact['link']?>" class="text-decoration-none" target="_blank"><?=$contact['username']?></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </li>
        </ul>
    </div>
<?php tpl_include('layout/footer', $vars); ?>