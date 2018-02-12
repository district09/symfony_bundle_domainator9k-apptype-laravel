<?php


namespace DigipolisGent\Domainator9k\AppTypes\LaravelBundle\Entity;

use DigipolisGent\Domainator9k\AppTypes\LaravelBundle\Form\Type\LaravelApplicationFormType;
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

    /**
     * @return string
     */
    public static function getApplicationType(): string
    {
        return self::TYPE;
    }

    /**
     * @return string
     */
    public static function getFormType(): string
    {
        return LaravelApplicationFormType::class;
    }
}
