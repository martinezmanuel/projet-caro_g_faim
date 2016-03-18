<?php
/**
 * Created by PhpStorm.
 * User: rod
 * Date: 18/03/16
 * Time: 08:50
 */
namespace CaroGFaimBundle\Command;

use Sensio\Bundle\GeneratorBundle\Generator\DoctrineCrudGenerator;
use Sensio\Bundle\GeneratorBundle\Command;

class CustomDoctrineCrudCommand extends \Sensio\Bundle\GeneratorBundle\Command\GenerateDoctrineCrudCommand
{
    protected function configure()
    {
        parent::configure();
        $this->setName('customdoctrine:generate:crud');
    }

    protected function getFormGenerator($bundle = null)
    {
        $generator = new DoctrineFormGenerator($this->getContainer()->get('filesystem'), __DIR__.'/../Resources/skeleton/crud');
        $this->setFormGenerator($generator);
        return parent::getFormGenerator($bundle);
    }
}