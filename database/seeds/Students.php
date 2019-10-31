<?php

use Illuminate\Database\Seeder;

class Students extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $std1 = new App\Student();
        $std1->name = 'stdname1';
        $std1->surname = 'stdlastname1';
        $std1->lastsurname = 'stdlastname1';
        $std1->bloodtype = 'a';
        $std1->user_id = '1';
        $std1->group_id = '1';
        $std1->save();

        $std2 = new App\Student();
        $std2->name = 'stdname2';
        $std2->surname = 'stdlastname2';
        $std2->lastsurname = 'stdlastname2';
        $std2->bloodtype = 'a';
        $std2->user_id = '1';
        $std2->group_id = '2';
        $std2->save();

        $std3 = new App\Student();
        $std3->name = 'stdname3';
        $std3->surname = 'stdlastname3';
        $std3->lastsurname = 'stdlastname3';
        $std3->bloodtype = 'a';
        $std3->user_id = '2';
        $std3->group_id = '1';
        $std3->save();

        $std4 = new App\Student();
        $std4->name = 'stdname4';
        $std4->surname = 'stdlastname4';
        $std4->lastsurname = 'stdlastname4';
        $std4->bloodtype = 'a';
        $std4->user_id = '2';
        $std4->group_id = '2';
        $std4->save();

        // factory(App\Student::class,5)
        //     ->create();
    }
}
