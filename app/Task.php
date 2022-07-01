<?php

namespace App;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable =[
        'title',
        'description',
        'due_date',
        'user_id',
        'category_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
