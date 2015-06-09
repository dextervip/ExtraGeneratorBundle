<?php

namespace Citrax\Bundle\ExtraGeneratorBundle\Command;

use Citrax\Bundle\ExtraGeneratorBundle\Generator\DoctrineEntityGenerator;
use Sensio\Bundle\GeneratorBundle\Command\GenerateDoctrineEntityCommand as Base;


class GenerateDoctrineEntityCommand extends Base
{
    protected function createGenerator()
    {
        return new DoctrineEntityGenerator($this->getContainer()->get('filesystem'), $this->getContainer()->get('doctrine'));
    }
}
