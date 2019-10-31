<?php

use Illuminate\Database\Seeder;

class Tutors extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $tut1 = new App\Tutor();
        $tut1->name = 'tutname1';
        $tut1->surname = 'tutlastname1';
        $tut1->lastsurname = 'tutlastname1';
        $tut1->student_id = '1';
        $tut1->save();

        $tut2 = new App\Tutor();
        $tut2->name = 'tutname2';
        $tut2->surname = 'tutlastname2';
        $tut2->lastsurname = 'tutlastname2';
        $tut2->student_id = '2';
        $tut2->save();


        // factory(App\Tutor::class, 5)
        //     ->create();
    }
}
