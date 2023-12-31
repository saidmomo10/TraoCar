<?php

namespace App\Models;

use App\Models\Car;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function rules()
{
    return [
        'mainly_image' => 'required|image',
    ];
}

    public function cars(){
        return $this->hasMany(Car::class);
    }

}