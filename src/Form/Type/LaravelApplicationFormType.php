<?php


namespace DigipolisGent\Domainator9k\AppTypes\LaravelBundle\Form\Type;

use DigipolisGent\Domainator9k\AppTypes\LaravelBundle\Entity\LaravelApplication;
use DigipolisGent\Domainator9k\CoreBundle\Form\Type\AbstractApplicationFormType;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class LaravelApplicationFormType
 * @package DigipolisGent\Domainator9k\AppTypes\LaravelBundle\Form\Type
 */
class LaravelApplicationFormType extends AbstractApplicationFormType
{

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);
        $resolver->setDefault('data_class', LaravelApplication::class);
    }
}
