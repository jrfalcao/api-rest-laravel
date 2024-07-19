<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="Product",
 *     type="object",
 *     title="Product",
 *     required={"name", "description", "price"},
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="Product ID"
 *     ),
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         description="Product name"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         description="Product description"
 *     ),
 *     @OA\Property(
 *         property="price",
 *         type="number",
 *         format="float",
 *         description="Product price"
 *     ),
 * )
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price'];
}

