<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        User::truncate();
        $items = [
                
                    'name'=>'admin',
                    'email'=>'admin@gmail.com',
                    'password'=>bcrypt('123456789'),
                    'role_id'=> 1,
                
                ];

                foreach($items as $item){
                    User::create($item);
                }
    }
}
