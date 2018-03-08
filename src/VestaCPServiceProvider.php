<?php

namespace MadeITBelgium\VestaCP;

use Illuminate\Support\ServiceProvider;

/**
 * VestaCP API.
 *
 * @version    0.0.1
 *
 * @copyright  Copyright (c) 2018 Made I.T. (http://www.madeit.be)
 * @author     Made I.T. <info@madeit.be>
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-3.txt    LGPL
 */
class VestaCPServiceProvider extends ServiceProvider
{
    protected $defer = false;

    protected $rules = [
        'user',
        'useravailable',
    ];

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/vestacp.php' => config_path('vestacp.php'),
        ]);

        $this->loadTranslationsFrom(__DIR__.'/lang', 'vestacp');
        $this->addNewRules();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('vestacp', function ($app) {
            $config = $app->make('config')->get('vestacp');

            return new VestaCP($config['server'], $config['hash']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['vestacp'];
    }

    protected function addNewRules()
    {
        foreach ($this->rules as $rule) {
            $this->extendValidator($rule);
        }
    }

    protected function extendValidator($rule)
    {
        $method = 'validate'.studly_case($rule);
        $translation = $this->app['translator']->get('vestacp::validation');
        $this->app['validator']->extend($rule, 'MadeITBelgium\VestaCP\Validation\ValidatorExtensions@'.$method, $translation[$rule]);
    }
}
