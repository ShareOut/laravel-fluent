<?php

namespace Based\Fluent\Tests;

use Orchestra\Testbench\TestCase as TestbenchTestCase;
use Based\Fluent\FluentServiceProvider;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TestCase extends TestbenchTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            FluentServiceProvider::class,
        ];
    }

    protected function defineDatabaseMigrations()
    {
        Schema::create('fluent_models', function (Blueprint $table) {
            $table->id();
            $table->string('string')->nullable();
            $table->integer('integer')->nullable();
            $table->float('float')->nullable();
            $table->json('object')->nullable();
            $table->json('array')->nullable();
            $table->json('collection')->nullable();
            $table->timestamp('carbon')->nullable();
            $table->boolean('boolean')->nullable();
            $table->decimal('decimal')->nullable();
            $table->decimal('as_decimal')->nullable();
            $table->timestamp('as_date')->nullable();
            $table->string('withoutCast')->nullable();
            $table->timestamps();
        });
    }
}