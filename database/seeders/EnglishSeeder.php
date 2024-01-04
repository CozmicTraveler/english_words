<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\English;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EnglishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('english')->insert([
        //     'word'=>"anyway",
        //     'type'=>"副詞",
        //     'meaning'=>"とにかく"
        // ]);
        English::factory()->count(10)->create();
    }
}
