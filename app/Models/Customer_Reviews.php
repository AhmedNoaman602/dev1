<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Customer_Reviews extends Model{
    protected $table = 'customer_reviews';
    protected $fillable = ['name' , 'text'];
}
?>