<?php

/*
 * Copyright (c) 2017 Heimrich & Hannot GmbH
 *
 * @license LGPL-3.0+
 */

namespace HeimrichHannot\CategoriesMultilingualBundle;

use HeimrichHannot\CategoriesMultilingualBundle\DependencyInjection\HeimrichHannotContaoCategoriesMultilingualExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class HeimrichHannotContaoCategoriesMultilingualBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getContainerExtension()
    {
        return new HeimrichHannotContaoCategoriesMultilingualExtension();
    }
}
