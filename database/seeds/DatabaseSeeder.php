<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $usuario =[ ["id_tipo_usuario"=>1,"nombre"=>"Juan Perez","nombre_usuario"=>"jperez","correo"=>"j.perez@gmail.com","password"=>bcrypt("123")],
                    ["id_tipo_usuario"=>2,"nombre"=>"Mario Perez","nombre_usuario"=>"mperez","correo"=>"m.perez@gmail.com","password"=>bcrypt("456")],
                    ["id_tipo_usuario"=>3,"nombre"=>"Carlos Perez","nombre_usuario"=>"cperez","correo"=>"c.perez@gmail.com","password"=>bcrypt("789")]];
        $tipo_user = [["nombre"=>"dueño"],["nombre"=>"administrador"],["nombre"=>"cuidador"]];
        DB::table('tipo_usuarios')->insert($tipo_user);
        DB::table('usuarios')->insert($usuario);
    }
}
