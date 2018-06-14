<?php

$dca = &$GLOBALS['TL_DCA']['tl_category'];

/**
 * Config
 */
$dca['config']['dataContainer'] = 'Multilingual';

// unset alias index...
unset($dca['config']['sql']['keys']['alias']);

// ... and set a concatenated one
$dca['config']['sql']['keys']['alias,language'] = 'index';

/**
 * Fields
 */
$dca['fields']['title']['eval']['translatableFor']          = '*';
$dca['fields']['frontendTitle']['eval']['translatableFor']  = '*';
$dca['fields']['overrideJumpTo']['eval']['translatableFor'] = '*';
$dca['fields']['jumpTo']['eval']['translatableFor']         = '*';
$dca['fields']['alias']['eval']['translatableFor']          = '*';
$dca['fields']['alias']['eval']['isMultilingualAlias']      = true;
$dca['fields']['alias']['eval']['generateAliasFromField']   = 'title';
$dca['fields']['alias']['eval']['unique']                   = false;
unset($dca['fields']['alias']['save_callback']);

$dca['fields']['langPid']['sql']  = "int(10) unsigned NOT NULL default '0'";
$dca['fields']['language']['sql'] = "varchar(2) NOT NULL default ''";

