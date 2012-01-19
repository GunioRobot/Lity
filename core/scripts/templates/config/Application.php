<?php

/**
 * Application
 *
 * Main configuration file
 *
 * @author your name <email>
 * @package Config
 */
 
/**
 * Template
 *
 * minify                Set to true to minify HTML
 * automatically_add_css Set to true to automatically add css files that matched
 *                       'public/css/<controller>/<controller>.css' and
 *                       'public/css/<controller>/<action>.css'
 * automatically_add_js  Set to true to automatically add css files that matched
 *                       'public/js/<controller>/<controller>.js' and
 *                       'public/js/<controller>/<action>.js'
 * 
 * @see <a href="http://wibeset.com/lity/views">Views</a>
 */

$config['template'] = array(
                            'minify' => true,
                            'automatically_add_css' => true,
                            'automatically_add_js' => false
                            );
                            
/**
 * 404
 *
 * Controller to route when redirect_to_404() is called.
 *
 */

$config['404'] = '404';
