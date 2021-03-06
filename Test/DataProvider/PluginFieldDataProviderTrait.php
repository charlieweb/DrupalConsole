<?php

namespace Drupal\Console\Test\DataProvider;

/**
 * Class PluginFieldDataProviderTrait
 * @package Drupal\Console\Test\DataProvider
 */
trait PluginFieldDataProviderTrait
{
    /**
     * @return array
     */
    public function commandData()
    {
        $this->setUpTemporalDirectory();

        return [
          ['Foo',  'foo' . rand(), 'foo', 'foo-bar', 'foo-bar', 'bar', 'Foo-Bar', 'foo-bar', 'foo-bar', 'bar', 'Foo-Bar', 'foo-bar', 'foo-bar', 'bar']
        ];
    }
}
