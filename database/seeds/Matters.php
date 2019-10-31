<?php

use Illuminate\Database\Seeder;

class Matters extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mat1 = new App\Matter();
        $mat1->title = 'materia1';
        $mat1->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ex officia natus hic! Ipsam aliquid blanditiis libero consequatur numquam obcaecati recusandae facilis hic temporibus sed, distinctio adipisci amet quo quos.';
        $mat1->group_id = '1';
        $mat1->save();

        $mat2 = new App\Matter();
        $mat2->title = 'materia2';
        $mat2->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ex officia natus hic! Ipsam aliquid blanditiis libero consequatur numquam obcaecati recusandae facilis hic temporibus sed, distinctio adipisci amet quo quos.';
        $mat2->group_id = '1';
        $mat2->save();

        $mat3 = new App\Matter();
        $mat3->title = 'materia1';
        $mat3->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ex officia natus hic! Ipsam aliquid blanditiis libero consequatur numquam obcaecati recusandae facilis hic temporibus sed, distinctio adipisci amet quo quos.';
        $mat3->group_id = '2';
        $mat3->save();

        $mat4 = new App\Matter();
        $mat4->title = 'materia2';
        $mat4->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ex officia natus hic! Ipsam aliquid blanditiis libero consequatur numquam obcaecati recusandae facilis hic temporibus sed, distinctio adipisci amet quo quos.';
        $mat4->group_id = '2';
        $mat4->save();

    }
}
