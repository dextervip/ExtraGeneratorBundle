<?php
/**
 * Created by PhpStorm.
 * User: Rafael
 * Date: 03/06/2015
 * Time: 00:19
 */

namespace Citrax\Bundle\ExtraGeneratorBundle;


use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\Console\Application;
use Sensio\Bundle\GeneratorBundle\Generator\DoctrineCrudGenerator;
use Symfony\Component\Filesystem\Filesystem;

class CitraxExtraGeneratorBundle extends Bundle
{

    public function getParent()
    {
        return 'SensioGeneratorBundle';
    }

}