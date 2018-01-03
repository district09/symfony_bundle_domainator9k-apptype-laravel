<?php


namespace DigipolisGent\Domainator9k\AppTypes\LaravelBundle\Entity;

use DigipolisGent\Domainator9k\CoreBundle\Entity\AbstractApplication;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class LaravelApplication
 * @package DigipolisGent\Domainator9k\AppTypes\LaravelBundle\Entity
 *
 * @ORM\Entity()
 */
class LaravelApplication extends AbstractApplication
{
    const TYPE = "LARAVEL";

    public function getType()
    {
        return self::TYPE;
    }
}