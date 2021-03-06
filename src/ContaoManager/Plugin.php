<?php

/*
 * Copyright (c) 2017 Heimrich & Hannot GmbH
 *
 * @license LGPL-3.0+
 */

namespace HeimrichHannot\CategoriesMultilingualBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use HeimrichHannot\CategoriesBundle\CategoriesBundle;
use HeimrichHannot\CategoriesMultilingualBundle\HeimrichHannotContaoCategoriesMultilingualBundle;
use Terminal42\DcMultilingualBundle\Terminal42DcMultilingualBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(HeimrichHannotContaoCategoriesMultilingualBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class, CategoriesBundle::class, Terminal42DcMultilingualBundle::class]),
        ];
    }
}
