<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Osama extends Model
{
    use HasFactory;

    protected  $table ='students';

    protected  $primaryKey ='ID';

    protected $fillable = array(
        'First_Name', 'Last_Name', 'Grade'
    );

}
