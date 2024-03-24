<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Orchid\Screen\AsSource;

class ProductImage extends Model
{
    use HasFactory;
    use AsSource;


    public $fillable = [
        'product_id',
        'link',
        'alt',
        'title'
    ];

    public function product_info() {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
