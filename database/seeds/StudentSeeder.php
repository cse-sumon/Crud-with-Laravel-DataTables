<?php

use Illuminate\Database\Seeder;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++){
            DB::table('students')->insert([
                'name' => word(5),
                'dept' => str_random(5),
            ]);
        }
    }
}
