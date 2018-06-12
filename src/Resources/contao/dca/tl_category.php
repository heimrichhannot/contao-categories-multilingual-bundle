<?php

$dca = &$GLOBALS['TL_DCA']['tl_category'];

/**
 * Config
 */
$dca['config']['dataContainer'] = 'Multilingual';

/**
 * Fields
 */
$dca['fields']['title']['eval']['translatableFor']         = '*';
$dca['fields']['frontendTitle']['eval']['translatableFor'] = '*';
$dca['fields']['jumpTo']['eval']['translatableFor']        = '*';
$dca['fields']['alias']['eval']['translatableFor']         = '*';
$dca['fields']['alias']['eval']['isMultilingualAlias']     = true;
$dca['fields']['alias']['eval']['generateAliasFromField']  = 'title';
unset($dca['fields']['alias']['save_callback']);

$dca['fields']['langPid']['sql']  = "int(10) unsigned NOT NULL default '0'";
$dca['fields']['language']['sql'] = "varchar(2) NOT NULL default ''";

