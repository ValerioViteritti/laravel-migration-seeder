<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait SlugTrait
{
    public function generateSlug($string)
    {
        $slug = Str::slug($string, '-');
        $original_slug = $slug;
        $counter = 1;

        // Verifica l'esistenza dello slug nel modello
        while (static::where('slug', $slug)->exists()) {
            $slug = $original_slug . '-' . $counter++;
        }

        return $slug;
    }
}