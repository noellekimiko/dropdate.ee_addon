<?php

/**
 * DropDate NSM Add-on Updater information.
 *
 * @author          Stephen Lewis (http://github.com/experience/)
 * @copyright       Experience Internet
 * @package         Dropdate
 * @version         2.3.0a1
 */

if ( ! defined('DROPDATE_NAME'))
{
  define('DROPDATE_NAME', 'Dropdate');
  define('DROPDATE_TITLE', 'DropDate');
  define('DROPDATE_VERSION', '2.3.0a1');
}

$config['name']     = DROPDATE_NAME;
$config['version']  = DROPDATE_VERSION;
$config['nsm_addon_updater']['versions_xml']
  = 'http://experienceinternet.co.uk/software/feeds/dropdate';

/* End of file      : config.php */
/* File location    : third_party/dropdate/config.php */