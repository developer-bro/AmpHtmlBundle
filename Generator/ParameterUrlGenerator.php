<?php

/*
 * This file is part of the takeit/AmpHtmlBundle package.
 *
 * (c) Rafał Muszyński <rmuszynski1@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Takeit\Bundle\AmpHtmlBundle\Generator;

final class ParameterUrlGenerator implements AmpUrlGeneratorInterface
{
    /**
     * {@inheritdoc}
     */
    public function generate($url)
    {
        if (strpos($url, '?') !== false) {
            return $url.'&amp';
        }

        return $url.'?amp';
    }
}
