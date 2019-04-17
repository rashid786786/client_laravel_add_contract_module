<?php

namespace KarlosCabral;

use Illuminate\Database\Eloquent\Model;
use DB;

class Contact extends Model
{
    public static function updateSingleContact($data)
    {
        return DB::table('contacts')
                ->where('id', '=', $data['id'])
                ->update([
                    'full_name' =>$data['full_name'],
                ]);
    }
}
