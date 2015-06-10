<?php
/**
 * Created by PhpStorm.
 * User: Rafael
 * Date: 10/06/2015
 * Time: 00:29
 */

namespace Citrax\Bundle\ExtraGeneratorBundle\Generator;

use Doctrine\ORM\Mapping\ClassMetadataInfo;
use Doctrine\ORM\Tools\EntityGenerator as Base;

class EntityGenerator extends Base {

    /**
     * @param ClassMetadataInfo $metadata
     *
     * @return string
     */
    protected function generateEntityDocBlock(ClassMetadataInfo $metadata)
    {
        $metadata->table['name'] = strtolower(preg_replace('/([a-z])([A-Z])/', '$1_$2', $this->getClassName($metadata)));
        return parent::generateEntityDocBlock($metadata);
    }

}