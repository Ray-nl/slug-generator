<?php

namespace Tests\Unit;



use Raynl\GenerateSlug\Slug;
use Raynl\Generateslug\Tests\TestCase;
use Statamic\Facades\Entry;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_if_slug_is_increment()
    {
        $this->makeEntry('products', 'php');

        $slug = Slug::generateSlug('products', 'php');

        $this->assertEquals('php-1', $slug);
    }

    public function test_if_slug_is_with_custom_seperator()
    {
        $this->makeEntry('products', 'php');

        $slug = Slug::generateSlug('products', 'php', '.');

        $this->assertEquals('php.1', $slug);
    }
}
