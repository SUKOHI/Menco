<?php namespace Sukohi\Menco\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class Menco extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'menco'; }
 
}