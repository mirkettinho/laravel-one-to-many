<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lang = ["HTML", "CSS", "JAVASCRIPT", "PHP"];

        foreach($lang as $type){
          $new_type = new Type();
          $new_type->name = $type;
          $new_type->slug = Str::slug($type, "-");
          $new_type->save();
        }
    }
}
