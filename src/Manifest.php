<?php

namespace Src;

use Resta\Foundation\Kernel;
use Providers\EloquentServiceProvider;
use Resta\Contracts\ApplicationContracts;
use Providers\ConsoleExceptionHandlerServiceProvider;

class Manifest extends Kernel
{
    /**
     * Changes any kernel group objects.
     *
     * @var array $revision
     */
    protected $revision = [];

    /**
     * this property adds class to the kernel loaders on the user side.
     *
     * @var array $run
     */
    protected $run = [

        /*
        |--------------------------------------------------------------------------
        | Kernel Service providers
        |--------------------------------------------------------------------------
        |
        | The kernel service providers listed here will be automatically loaded on the
        | request to your system. Feel free to add your own services to
        | this array to grant expanded functionality to your applications.
        |
        */
        'providers' => [

            'EloquentServiceProvider'                   => ['class' => EloquentServiceProvider::class,'status' => true],
            'ConsoleExceptionHandlerServiceProvider'    => ['class' => ConsoleExceptionHandlerServiceProvider::class],
        ],

    ];

    /**
     * reverts provider classes to a boolean value.
     *
     * @param ApplicationContracts $app
     * @return void|mixed
     */
    protected function providers(ApplicationContracts $app)
    {
        $this->run['providers']['ConsoleExceptionHandlerServiceProvider']['status'] = $app->console();
    }
}