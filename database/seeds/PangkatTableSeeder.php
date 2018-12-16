<?php

use App\Models\Pangkat;
use Illuminate\Database\Seeder;

class PangkatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pangkat::insert([
            [
                'name'    => 'Prajurit Dua',
                'short'   => 'Prada',
                'jenjang' => 'Tamtama',
            ],[
                'name'    => 'Prajurit Satu',
                'short'   => 'Pratu',
                'jenjang' => 'Tamtama',
            ],[
                'name'    => 'Prajurit Kepala',
                'short'   => 'Praka',
                'jenjang' => 'Tamtama',
            ],[
                'name'    => 'Kopral Dua',
                'short'   => 'Kopda',
                'jenjang' => 'Tamtama Tinggi',
            ],[
                'name'    => 'Kopral Satu',
                'short'   => 'Koptu',
                'jenjang' => 'Tamtama Tinggi',
            ],[
                'name'    => 'Kopral Kepala',
                'short'   => 'Kopka',
                'jenjang' => 'Tamtama Tinggi',
            ],[
                'name'    => 'Sersan Dua',
                'short'   => 'Serda',
                'jenjang' => 'Bintara',
            ],[
                'name'    => 'Sersan Satu',
                'short'   => 'Sertu',
                'jenjang' => 'Bintara',
            ],[
                'name'    => 'Sersan Kepala',
                'short'   => 'Serka',
                'jenjang' => 'Bintara',
            ],[
                'name'    => 'Sersan Mayor',
                'short'   => 'Serma',
                'jenjang' => 'Bintara',
            ],[
                'name'    => 'Pembantu Letnan Dua',
                'short'   => 'Pelda',
                'jenjang' => 'Bintara Tinggi',
            ],[
                'name'    => 'Pembantu Letnan Satu',
                'short'   => 'Peltu',
                'jenjang' => 'Bintara Tinggi',
            ],[
                'name'    => 'Letnan Dua',
                'short'   => 'Letda',
                'jenjang' => 'Perwira Pertama',
            ],[
                'name'    => 'Letnan Satu',
                'short'   => 'Lettu',
                'jenjang' => 'Perwira Pertama',
            ],[
                'name'    => 'Kapten',
                'short'   => 'Kapten',
                'jenjang' => 'Perwira Pertama',
            ],[
                'name'    => 'Mayor',
                'short'   => 'Mayor',
                'jenjang' => 'Perwira Menengah',
            ],[
                'name'    => 'Letnan Kolonel',
                'short'   => 'Letkol',
                'jenjang' => 'Perwira Menengah',
            ],[
                'name'    => 'Kolonel',
                'short'   => 'Kolonel',
                'jenjang' => 'Perwira Menengah',
            ],[
                'name'    => 'Brigadir Jenderal',
                'short'   => 'Brigjend',
                'jenjang' => 'Perwira Tinggi',
            ],[
                'name'    => 'Mayor Jenderal',
                'short'   => 'Mayjend',
                'jenjang' => 'Perwira Tinggi',
            ],[
                'name'    => 'Letnan Jenderal',
                'short'   => 'Letjend',
                'jenjang' => 'Perwira Tinggi',
            ],[
                'name'    => 'Jenderal',
                'short'   => 'Jenderal',
                'jenjang' => 'Perwira Tinggi',
            ],
        ]);
    }
}
