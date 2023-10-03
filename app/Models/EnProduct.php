<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnProduct extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Category()
    {
        $local = \Session::get('applocale');

        if ($local == null) {
            $local = config('app.fallback_locale');
        }

        if ($local == 'tr') {
            return $this->hasOne(Category::class, 'id', 'category_id');
        } elseif ($local == 'en') {
            return $this->hasOne(EnCategory::class, 'id', 'category_id');
        }
    }
}
