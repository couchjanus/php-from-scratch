<?php

    // define('ROOT', realpath(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR));
    
    define('ROOT', dirname(__DIR__));
    const CONFIG = ROOT.'/config';
    const VENDOR = ROOT.DIRECTORY_SEPARATOR.'vendor';
    const APP = ROOT.'/app';
    const CONTROLLERS = ROOT.'/app/Controllers';
    const VIEWS = ROOT.'/app/Views';
    
    const EXT = '.php';
    const APPNAME = 'Great Site';
    const SLOGAN = 'Lets Build Cool Site';

    define('LOGS', ROOT.'/logs');
