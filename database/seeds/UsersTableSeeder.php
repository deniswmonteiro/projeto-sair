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
            'nome' => 'administrador',
            'cpf' => '99999999999',
            'email' => 'administrador@admin',
            'usuario' => 'administrador',
            'password' => Hash::make('99999999999')
        ]);
    }
}
