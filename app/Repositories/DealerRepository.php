<?php

namespace App\Repositories;

use App\Models\Dealer;
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
            ->join('status', 'status.id', '=', 'dealers.status_id')
            ->select('dealers.*', 'status.status as statusname')
            ->orderByDesc('dealers.id')->get();
    }

    public function store($request)
    {
        $data = $request->except('_token');
        DB::table($this->table)->insert($data);
    }

    public function update($request, $id)
    {
        $data = $request->except('_token');
        DB::table($this->table)->where('id', $id)->update($data);
    }

    public function search($request)
    {
        $search = $request->input('search');
        return  Dealer::query()
            ->join('status', 'dealers.status_id', '=', 'status.id')
            ->where('dealername', 'LIKE', "%{$search}%")
            ->select('dealers.*', 'status.status as statusname')
            ->get();
    }
}
