<?php

namespace App\Design\Patterns\Repositories;
use App\Models\Feature;


class SingleFeatureRepository implements SingleFeatureInterface
{
    public function read()
    {
        return  Feature::all();
    }

    public function create(array $data)
    {
        return  Feature::create($data);
    }

    public function edit($id)
    {
        return Feature::find($id);
    }

    public function update(array $data ,$id)
    {
        $update =  Feature::find($id);
        return $update->update($data);
    }

    public function delete($id)
    {
        $delete = Feature::find($id);
        return $delete->delete();
    }

}

?>
