<?php
/**
 * menu.php
 *
 * @url         $URL: https://mythepisode.googlecode.com/svn/trunk/tmpl/default/menu.php $
 * @date        $Date: 2010-12-19 19:39:02 -0700 (Sun, 19 Dec 2010) $
 * @version     $Revision: 346 $
 * @author      Author: Alec Christie
 * @license     GPL
 *
/**/

$url = "http".((!empty($_SERVER['HTTPS'])) ? "s" : "")."://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$url_data = explode("/",parse_url($url,PHP_URL_PATH));
foreach($url_data as $url_part) {
    if ($url_part != "")
        $section = $url_part;
}

?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td align="center">
        <table id="display_options" class="commandbox commands" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td class="x-title">mythepisode:</td>
                <td class="<?php echo ($section=="show")?("x-active"):("x-check") ?>">
                    <a onclick="ajax_add_request()" href="episode/show"><?php echo t('TV Shows') ?></a>
                </td>
                <td class="<?php echo ($section=="episodes")?("x-active"):("x-check") ?>">
                    <a onclick="ajax_add_request()" href="episode/episodes/?allepisodes=all"><?php echo t('Episode') ?></a>
                </td>
                <td class="<?php echo ($section=="previous_recordings")?("x-active"):("x-check") ?>">
                    <a onclick="ajax_add_request()" href="episode/previous_recordings"><?php echo t('Previous Recordings') ?></a>
                </td>
                <?php if(!$tvwishHide) { ?>
                <td class="<?php echo ($section=="tvwish_list")?("x-active"):("x-check") ?>">
                    <a onclick="ajax_add_request()" href="episode/tvwish_list"><?php echo t('TVwish') ?></a>
                </td>
                <?php } ?>
            </tr>
        </table>
        </td>
    </tr>
</table>
