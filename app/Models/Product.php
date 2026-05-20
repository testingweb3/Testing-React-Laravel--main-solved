<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Allow mass-assignment of all fields during database seeding
    protected $guarded = [];

    // Dynamically map SQLite numeric 'id' to '_id' in serialized data
    // to match MongoDB-like properties expected by the React frontend
    public function toArray()
    {
        $array = parent::toArray();
        $array['_id'] = $this->id;
        return $array;
    }
}
