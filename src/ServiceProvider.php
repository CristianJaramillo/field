<?php namespace CristianJaramillo\Field;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {
    
	/**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app['field'] = $this->app->share(function($app)
        {
            $fieldBuilder = new FieldBuilder($app['form'], $app['view'], $app['session.store']);
            return $fieldBuilder;
        });
    }

	/**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return array();
    }

}