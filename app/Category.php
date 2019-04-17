<?php

namespace KarlosCabral;

use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model
{
public static function getSingleCategory($category_name=null)
{
    if($category_name!=null)
    {
        return DB::table('categories')
            ->where('type','=',$category_name)
            ->get();
    }
}
}
