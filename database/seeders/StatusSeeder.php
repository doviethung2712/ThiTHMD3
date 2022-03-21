<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new Status();
        $status->status = 'Đang hoạt động';
        $status->save();

        $status = new Status();
        $status->status = 'Ngừng hoạt động';
        $status->save();
    }
}
