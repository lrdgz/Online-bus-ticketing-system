<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubRegion extends Model{
    protected $table = 'sub_regions';

    protected $fillable = [
        "sub_region_name",
        "sub_region_code",
        "region_id",
        "status"
    ];

    protected $primaryKey = 'sub_region_id';
}

