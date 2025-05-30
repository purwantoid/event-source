<?php

declare(strict_types=1);

namespace PurwantoId\EventSource;

use Purwantoid\LaravelPackage\Package;
use Purwantoid\LaravelPackage\PackageServiceProvider;
use PurwantoId\EventSource\Commands\EventSourceCommand;

class EventSourceServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/purwantoid/laravel-package
         */
        $package
            ->name('event-source')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_event_source_table')
            ->hasCommand(EventSourceCommand::class);
    }
}
