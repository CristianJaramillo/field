<?php namespace CristianJaramillo\Field;

class Facade extends \Illuminate\Support\Facades\Facade 
{

	/**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor() { return 'field'; }

}