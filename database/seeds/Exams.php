<?php

use Illuminate\Database\Seeder;

class Exams extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exa1 = new App\Exam();
        $exa1->title = 'exam1';
        $exa1->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ex officia natus hic! Ipsam aliquid blanditiis libero consequatur numquam obcaecati recusandae facilis hic temporibus sed, distinctio adipisci amet quo quos.';
        $exa1->matter_id = '1';
        $exa1->save();

        $exa2 = new App\Exam();
        $exa2->title = 'exam2';
        $exa2->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ex officia natus hic! Ipsam aliquid blanditiis libero consequatur numquam obcaecati recusandae facilis hic temporibus sed, distinctio adipisci amet quo quos.';
        $exa2->matter_id = '2';
        $exa2->save();

        $exa3 = new App\Exam();
        $exa3->title = 'exam3';
        $exa3->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ex officia natus hic! Ipsam aliquid blanditiis libero consequatur numquam obcaecati recusandae facilis hic temporibus sed, distinctio adipisci amet quo quos.';
        $exa3->matter_id = '1';
        $exa3->save();

        $exa4 = new App\Exam();
        $exa4->title = 'exam4';
        $exa4->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ex officia natus hic! Ipsam aliquid blanditiis libero consequatur numquam obcaecati recusandae facilis hic temporibus sed, distinctio adipisci amet quo quos.';
        $exa4->matter_id = '2';
        $exa4->save();

        // factory(App\Exam::class, 5)
        //     ->create();
    }
}
