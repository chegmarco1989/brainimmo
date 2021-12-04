<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Post
 * @package App\Models
 * @version December 3, 2021, 7:47 pm UTC
 *
 * @property string $title
 * @property string $description
 * @property number $price
 * @property string $image_url
 */
class Post extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'posts';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'description',
        'price',
        'image_url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'description' => 'string',
        'price' => 'double',
        'image_url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'description' => 'required',
        'price' => 'required',
        'image_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ];

    
}
