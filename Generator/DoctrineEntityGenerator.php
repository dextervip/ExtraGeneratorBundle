<?php

namespace Citrax\Bundle\ExtraGeneratorBundle\Generator;

use Sensio\Bundle\GeneratorBundle\Generator\DoctrineEntityGenerator as Base;


class DoctrineEntityGenerator extends Base
{

    protected function getRepositoryGenerator()
    {
        return new EntityRepositoryGenerator();
    }
}
