<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['body', 'user_id'];
    //protected $guarded = ['id'];
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
// Route::get('articles',function(){

// });