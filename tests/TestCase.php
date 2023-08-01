<?php

namespace TmrwLife\NtakGuru\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use PHPUnit\Framework\TestCase as BaseTestCase;
use TmrwLife\NtakGuru\NtakGuruServiceProvider;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'TmrwLife\\NtakGuru\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            NtakGuruServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_ntak-guru-laravel_table.php.stub';
        $migration->up();
        */
    }
}
