<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\SlugTrait;

class Travel extends Model
{
    use SlugTrait;

    protected $table = 'travels';

    protected $fillable = ['title', 'slug', 'description', 'price', 'date'];

    public static function boot()
    {
        parent::boot();

        // Genera automaticamente lo slug basato su title e price
        static::creating(function ($travel) {
            $travel->slug = $travel->generateSlug($travel->title . '-' . $travel->price);
        });
    }
}

