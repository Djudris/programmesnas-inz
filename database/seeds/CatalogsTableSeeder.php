<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Catalog;

class CatalogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalogs')->truncate();
        DB::table('catalogs')->insert([
            [
                'name' => 'Krasas',
                'image' => 'auto.png',
                'description' => 'Krasas un Lakas',
                'parent_id' => NULL,
                'priority' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kopsana',
                'image' => 'auto.png',
                'description' => 'Kopsanas lidzekli',
                'parent_id' => NULL,
                'priority' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Lampas',
                'image' => 'auto.png',
                'description' => 'Auto lampas',
                'parent_id' => NULL,
                'priority' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tunings',
                'image' => 'auto.png',
                'description' => 'Tuninga preces automasinai',
                'parent_id' => NULL,
                'priority' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
        $parent_id = Catalog::where('name', 'Krasas')->first()->id;
        DB::table('catalogs')->insert([
            [
                'name' => 'Krasa',
                'image' => 'auto.png',
                'description' => 'Krasas automasinai',
                'parent_id' => $parent_id,
                'priority' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Laka',
                'image' => 'auto.png',
                'description' => 'Lakas automasinai',
                'parent_id' => $parent_id,
                'priority' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);

        $parent_id = Catalog::where('name', 'Kopsana')->first()->id;

        DB::table('catalogs')->insert([
            [
                'name' => 'Salonam',
                'image' => 'auto.png',
                'description' => 'Salona kopsanas lidzeklis',
                'parent_id' => $parent_id,
                'priority' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Plastmasai',
                'image' => 'auto.png',
                'description' => 'Plastmasas kopsanas lidzeklis',
                'parent_id' => $parent_id,
                'priority' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Adai',
                'image' => 'auto.png',
                'description' => 'Adas kopsanas lidzeklis',
                'parent_id' => $parent_id,
                'priority' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);

        $parent_id = Catalog::where('name', 'Lampas')->first()->id;

        DB::table('catalogs')->insert([
            [
                'name' => 'Tuvas',
                'image' => 'auto.png',
                'description' => 'Tuvas gaismas',
                'parent_id' => $parent_id,
                'priority' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Talas',
                'image' => 'auto.png',
                'description' => 'Talas gaismas',
                'parent_id' => $parent_id,
                'priority' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Miglas',
                'image' => 'auto.png',
                'description' => 'Miglas gaismas',
                'parent_id' => $parent_id,
                'priority' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
        $parent_id = Catalog::where('name', 'Tunings')->first()->id;
        DB::table('catalogs')->insert([
            [
                'name' => 'Diski',
                'image' => 'auto.png',
                'description' => 'Diski 5x120',
                'parent_id' => $parent_id,
                'priority' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bamperi',
                'image' => 'auto.png',
                'description' => 'Bamperi BMW modeliem',
                'parent_id' => $parent_id,
                'priority' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Spoileri',
                'image' => 'auto.png',
                'description' => 'Spoileri katrai gaumei',
                'parent_id' => $parent_id,
                'priority' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
