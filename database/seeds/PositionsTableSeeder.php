<?php

use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Position::class, 3)->create();
        Position::whereId(1)->update([
            'name' => 'manager'
        ]);
        Position::whereId(2)->update([
            'name' => 'trainer PHP'
        ]);
        Position::whereId(3)->update([
            'name' => 'hr'
        ]);
    }
}
