<?php
defined('BASEPATH') or exit('No direct script access allowed');

$autoload['packages'] = array(FCPATH . 'vendor/autoload.php');
$autoload['libraries'] = array('database', 'upload', 'session');
$autoload['drivers'] = array();
$autoload['helper'] = array('url', 'form', 'language', 'download');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array('Crud');
