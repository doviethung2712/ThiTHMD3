<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class DealerRepository extends BaseRepository
{

    public function getTable()
    {
        return 'dealers';
    }

    public function getModel()
    {

    }

    public function getAll()
    {
        return DB::table($this->table)
        ->join('status','status.id' , '=','dealers.status_id')
        ->select('dealers.*','status.status as statusname')
        ->get();
    }

}
