<?php

use Illuminate\Database\Seeder;

class Groups extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group1 = new App\Group();
        $group1->name = 'a';
        $group1->grade = '1';
        $group1->save();

        $group2 = new App\Group();
        $group2->name = 'a';
        $group2->grade = '2';
        $group2->save();

        // factory(App\Group::class, 6)
        //     ->create();
    }
}
