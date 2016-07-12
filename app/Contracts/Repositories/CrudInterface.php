<?php

namespace ReactLaravel\Contracts\Repositories;

interface CrudInterface
{
    public function create(Array $data);

    public function read($id);

    public function update($id, Array $data);

    public function delete($id);
}