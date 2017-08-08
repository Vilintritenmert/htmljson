<?php

use Illuminate\Database\Seeder;
use App\Tablet;

class TabletsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tablet::truncate();

        $tablets = factory(Tablet::class, 100)->make();

        Tablet::insert($tablets->toArray());
    }
}
