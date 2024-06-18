<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use OpenApi\Annotations as OA;

/**
 * Class Sneaker.
 * 
 * @author Olivia <olivia.4220230025@civitas.ukrida.ac.id>
 * 
 * @OA\Schema(
 *      description="Sneaker model",
 *      title="Sneaker model",
 *      required={"title", "author"},
 *      @OA\Xml(
 *          name="Sneaker"
 *      )
 * )
 */

class Sneaker extends Model
{
    // use HasFactory;
    use SoftDeletes;
    protected $table = 'sneakers';
    protected $fillable = [
        'name',
        'shoe_designer',
        'publisher',
        'publication_year',
        'cover',
        'description',
        'price',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];

    public function data_adder(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}

