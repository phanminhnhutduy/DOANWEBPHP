<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_product extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
        'category_name', 'slug_category_product','category_id','meta_keywords','category_desc'
        ,'category_status'
    ];
    protected $primaryKey = 'product_id';
 	protected $table = 'tbl_category_id';
}
