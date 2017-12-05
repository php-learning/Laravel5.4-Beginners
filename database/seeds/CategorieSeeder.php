<?php

use App\Categorie;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $requete = [];
        for($i = 0; $i<10; ++$i){
            $requete[] = [
                "titre"=>str_random(),
                "description"=>str_random(40),
                "photo"=>str_random(),
                "created_at" => \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ];
        }

        Categorie::insert($requete);
    }
}
