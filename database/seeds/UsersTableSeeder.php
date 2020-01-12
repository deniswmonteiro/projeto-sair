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
        \projetoautomacao\User::create([
            'nome' => 'Administrador',
            'cpf' => '99999999999',
            'email' => 'administrador@admin',
            'laboratorio' => 'LabMotriz',
            'usuario' => 'administrador',
            'password' => Hash::make('99999999999')
        ]);
    }
}
