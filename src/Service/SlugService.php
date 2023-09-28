<?php

namespace App\Service;

use Symfony\Component\String\Slugger\AsciiSlugger;

class SlugService
{
    public function makeSlug($string): string
    {
        $slugger = new AsciiSlugger();
        $slug = $slugger->slug($string);
        return $slug;
    }
}