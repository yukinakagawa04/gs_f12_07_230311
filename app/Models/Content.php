<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $guarded = [
    'id',
    'created_at',
    'updated_at',
    ];
    
    // 🔽 追加
    public static function getAllOrderByUpdated_at()
        {
        return self::orderBy('updated_at', 'desc')->get();
        }
    // 多対1を作る    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
