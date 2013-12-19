<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

function load_template(\M\Template $template){
    
    echo $template->display();
}

function load_layout(){
    global $template;
    
    require_once(DIR_TEMPLATE.\M\Config::get('layout').'.php');
    load_template($template);
}