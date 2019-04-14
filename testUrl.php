<?php
require 'vendor/autoload.php';

$Parser = new \buibr\xmlepg\EpgParser();
// $Parser->setFile( $argv[1] );
$Parser->setUrl( $argv[1] );
$Parser->setTargetTimeZone('Europe/Berlin');
//$Parser->setChannelfilter('prosiebenmaxx.de'); //optional
$Parser->setIgnoreDescr('Keine Details verfügbar.'); //optional

try 
{
	$Parser->parseUrl();
} 
catch (Exception $e) 
{
	throw new \RuntimeException($e);
}

/** @noinspection ForgottenDebugOutputInspection */
print_r($Parser->getEpgdata());