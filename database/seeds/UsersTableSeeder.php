<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
                'name'           => 'Administrador',
                'email'          => 'alfjuniorbh.web@gmail.com',
                'password'       => Hash::make('102030'),
                'is_admin'       => 1,
                'setting_id'     => 1,
                'status_id'      => 1,
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s')
            )
        );

        //insert data
        foreach ($data as $datas) {
            DB::table('users')->insert($datas);
        }
    }
}
