<?php

namespace App\Repositories;

use App\Models\Status;
use Illuminate\Support\Facades\DB;

class StatusRepository extends BaseRepository
{

    public function getTable()
    {
        return 'status';
    }

    public function getModel()
    {
        return Status::class;
    }

    public function getAll()
    {
        return Status::all();
    }
    
}
