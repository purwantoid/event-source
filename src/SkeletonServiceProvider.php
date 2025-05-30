<?php

declare(strict_types=1);

namespace VendorName\Skeleton;

use Purwantoid\LaravelPackage\Package;
use Purwantoid\LaravelPackage\PackageServiceProvider;
use VendorName\Skeleton\Commands\SkeletonCommand;

class SkeletonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/purwantoid/laravel-package
         */
        $package
            ->name('skeleton')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_migration_table_name_table')
            ->hasCommand(SkeletonCommand::class);
    }
}
