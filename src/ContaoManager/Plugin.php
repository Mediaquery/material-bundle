<?php

/*
 * This file is part of [package name].
 *
 * (c) Jérôme Lewis Metz
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\MaterialBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\MaterialBundle\ContaoMaterialBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoMaterialBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
