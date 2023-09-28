<?php

namespace App\Service;

use Symfony\Component\String\Slugger\AsciiSlugger;

class Slug
{
    public function __construct(

    ) {
    }

    public function makeSlug(): void
    {
        $slugger = new AsciiSlugger();
        $slug = $slugger->slug('...');
    }
}