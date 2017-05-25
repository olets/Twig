<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * For Twig 1.x compatibility.
 */
require __DIR__.'/Test.php';

if (false) {
    final class Twig_SimpleTest extends Twig_Test
    {
    }
}

class_alias('Twig_SimpleTest', 'Twig\TwigTest', false);
