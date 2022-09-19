<?php

namespace App\Http\Traits;



use App\Models\BasicInformationForSite;

trait GlobalTrait {

    public function getAllData()
    {

        $data = BasicInformationForSite::all();
        return $data;
    }
}
