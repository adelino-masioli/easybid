<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array(
                'name'          => 'Empresa Matriz',
                'site'          => 'http://easybid.com.br',
                'email'         => 'alfjuniorbh.web@gmail.com',
                'telephone'     => '(31)99809-5410',
                'cellphone'     => '(31)99809-5410',
                'zipcode'       => '30.140-060',
                'neighborhood'  => 'Barro Preto',
                'address'       => 'Rua dos Timbiras',
                'number'        => '2500',
                'complement'    => 'Ap 1141',
                'state_id'      => 31,
                'city_id'       => 3106200,
                'status_id'     => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            )
        );

        //insert data
        foreach ($data as $datas) {
            DB::table('settings')->insert($datas);
        }
    }
}
