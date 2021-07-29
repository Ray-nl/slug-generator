<?php

namespace Tests\Unit;

use Raynl\GenerateSlug\Slug;
use Raynl\Generateslug\Tests\TestCase;

class SlugGeneratorTest extends TestCase
{
    /**
     * Slug generator with standard separator and start number
     */
    public function test_if_slug_is_increment(): void
    {
        $this->makeEntry('products', 'php');

        $slug = Slug::generateSlug('products', 'php');

        $this->assertEquals('php-1', $slug);
    }

    /**
     * Slug with custom separator
     */
    public function test_if_slug_is_with_custom_seperator()
    {
        $this->makeEntry('products', 'php');

        $slug = Slug::generateSlug('products', 'php', '.');

        $this->assertEquals('php.1', $slug);
    }

    /**
     * Slug with custom start number
     */
    public function test_if_slug_is_with_custom_start_number()
    {
        $this->makeEntry('products', 'php');

        $slug = Slug::generateSlug('products', 'php', '.', '6');

        $this->assertEquals('php.6', $slug);
    }
}
