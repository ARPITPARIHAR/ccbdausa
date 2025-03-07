<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class); // Ensure the namespace is correct
    }
}
