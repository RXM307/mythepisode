<?php
/**
 * Welcome page description of the episode module.
 *
 * @url         $URL: https://mythepisode.googlecode.com/svn/trunk/tmpl/default/welcome.php $
 * @date        $Date: 2010-10-30 18:40:16 -0700 (Sat, 30 Oct 2010) $
 * @version     $Revision: 254 $
 * @author      $Author: chadopp $
 * @license     GPL
 *
/**/

// Open with a div and an image
    echo '<div id="info_episode" class="hidden">',
         '<img src="', skin_url, '/img/tv.png" class="module_icon" alt="">',

// Print a basic overview of what this module does
         t('welcome: TV Episodes'),

// Next, print a list of possible subsectons
        '<ul>';
    foreach (Modules::getModuleProperty('episode', 'links') as $link => $name) {
        echo ' <li><a href="', root_url, Modules::getModuleProperty('episode', 'path'), '/', $link, '">', html_entities($name), "</a></li>\n";
    }
    echo '</ul>',

// Close the div
         "</div>\n";
