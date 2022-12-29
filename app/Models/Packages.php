<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;
    public $primaryKey='package_id';
    protected $table="packages";
    protected $fillable = [
        'package_code','package_name','package_desc','feature_img','location_id','comunity_id','permalink'
    ];
    public function comunity(){
        return $this->belongsTo(Comunity::class,'comunity_id','comunity_id');
    }
}




