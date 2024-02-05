<?php

namespace App\Design\Patterns\Repositories;

interface SingleFeatureInterface
{
    public function read();
    public function create(array $data);
    public function edit($id);
    public function update(array $data, $id);
    // public function delete($id);

}

?>
