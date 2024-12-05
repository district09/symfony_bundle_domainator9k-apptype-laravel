<?php

namespace DigipolisGent\Domainator9k\AppTypes\LaravelBundle\CacheClearer;

use DigipolisGent\CommandBuilder\CommandBuilder;
use DigipolisGent\Domainator9k\CoreBundle\CacheClearer\CacheClearerInterface;
use DigipolisGent\Domainator9k\CoreBundle\CLI\CliInterface;

class LaravelCacheClearer implements CacheClearerInterface
{

    /**
     * {@inheritdoc}
     */
    public function clearCache($object, CliInterface $cli)
    {
        return $cli->execute(
            CommandBuilder::create('php')
                ->addArgument('artisan')
                ->addArgument('cache:clear')
                ->addOption('env', 'prod')
        );
    }
}
