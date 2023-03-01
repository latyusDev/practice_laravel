<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'company', 'location', 'website', 'description', 'email', 'tags'];
    // or go to AppServiceProvider.php in the boot function write Model::unguard()
    public function scopeFilter($query, array $filters)
    {

        // dd($filters['tag']);
        if($filters['tag'] ?? false){
            $query->where('tags', 'like', '%' . request('tag') . '%');
        };

        if($filters['search'] ?? false){
            $query->where('title', 'like', '%' . request('search') . '%')
            ->orwhere('description', 'like',  '%' . request('search') . '%')
            ->orwhere('tags', 'like',  '%' . request('search') . '%');
        };
        
    }
    // create relationship To Users

    public function user(){
        
        return $this->belongsTo(User::class, 'user_id');
    }
}
