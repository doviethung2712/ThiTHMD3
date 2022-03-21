<?php

namespace App\Repositories\Impl;

interface BaseInterface
{
    public function getAll();
    public function getById($id);
    public function deleteById($id);

}
