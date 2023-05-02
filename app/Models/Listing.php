<?php

// namespace App\Models;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Listing{
//     protected $fillable = ['title', 'company', 'location', 'website', 'email', 'description', 'tags'];

//     public static function all(){
//         return  [
//             [
//                 'id' => 1,
//                 'title' => 'listing One',
//                 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, reprehenderit.'

//             ],
//             [
    
//                 'id' => 2,
//                 'title' => 'listing Two',
//                 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, reprehenderit.'
//             ]
//         ];
//     }

//     public static function find($id){
//         $listings = self::all();

//         foreach($listings as $listing){
//             if($listing['id'] == $id){
//                 return $listing;
//             }
//         }
//     }
// } 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'company', 'location', 'website', 'email', 'description', 'tags'];
    // public static function all(){
    //     return  [
    //         [
    //             'id' => 1,
    //             'title' => 'listing One',
    //             'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, reprehenderit.'

    //         ],
    //         [
    
    //             'id' => 2,
    //             'title' => 'listing Two',
    //             'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, reprehenderit.'
    //         ]
    //     ];
    // }

    public function scopeFilter($query, array $filters) {
        if($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }

    // Relationship To User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}