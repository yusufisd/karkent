<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnContact extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function AllImage(){
        $data = Contact::latest()->first();
        return $data;
    }
}
