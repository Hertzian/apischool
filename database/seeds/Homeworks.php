<?php

use Illuminate\Database\Seeder;

class Homeworks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hom1 = new App\Homework();
        $hom1->title = 'home1';
        $hom1->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ex officia natus hic! Ipsam aliquid blanditiis libero consequatur numquam obcaecati recusandae facilis hic temporibus sed, distinctio adipisci amet quo quos.';
        $hom1->matter_id = '1';
        $hom1->save();

        $hom2 = new App\Homework();
        $hom2->title = 'home2';
        $hom2->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ex officia natus hic! Ipsam aliquid blanditiis libero consequatur numquam obcaecati recusandae facilis hic temporibus sed, distinctio adipisci amet quo quos.';
        $hom2->matter_id = '2';
        $hom2->save();

        $hom3 = new App\Homework();
        $hom3->title = 'home3';
        $hom3->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ex officia natus hic! Ipsam aliquid blanditiis libero consequatur numquam obcaecati recusandae facilis hic temporibus sed, distinctio adipisci amet quo quos.';
        $hom3->matter_id = '1';
        $hom3->save();

        $hom4 = new App\Homework();
        $hom4->title = 'home4';
        $hom4->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ex officia natus hic! Ipsam aliquid blanditiis libero consequatur numquam obcaecati recusandae facilis hic temporibus sed, distinctio adipisci amet quo quos.';
        $hom4->matter_id = '2';
        $hom4->save();

        // factory(App\Homework::class, 5)
        //     ->create();
    }
}
