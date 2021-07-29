<?php

namespace Raynl\GenerateSlug;

use Statamic\Entries\Entry;

class Slug
{
    /**
     * Generate a unique slug
     * it checks if the slug exists on the collection
     * if not then return the slug
     *
     * @param string $collection
     * @param $slug
     * @param string $seperator
     * @param int $start_number
     *
     * @return string
     */
    public static function generateSlug(string $collection, $slug, $seperator = '-', $start_number = 1): string
    {
        $slug = \Str::slug($slug, '-');

        if (Entry::query()->where('collection', $collection)->where('slug', $slug)->first()) {
            $slug .= $seperator.''.$start_number;
            $number = $start_number;
            while (Entry::query()->where('collection', $collection)->where('slug', $slug)->first()) {
                $explode = explode($seperator, $slug);

                $last = array_key_last($explode);
                $explode[$last] = (string)$number;

                $slug = implode('-', $explode);

                $number = (int)end($explode) + 1;
            }
        }

        return $slug;
    }
}
