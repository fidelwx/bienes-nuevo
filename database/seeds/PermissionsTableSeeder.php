<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        //Users
        //Listar
        DB::table('permissions')->insert([
        	'name' 			=> 'Navegar Ususarios',
        	'slug' 			=> 'usuarios.index',
        	'description' 	=> 'Lista y Navega todos los Usuarios del Sistema',
        ]);
        //Ver
        DB::table('permissions')->insert([
        	'name' 			=> 'Ver Detalles de Ususarios',
        	'slug' 			=> 'usuarios.show',
        	'description' 	=> 'Ver en detalle cada Usuario del Sistema',
        ]);
        //Crear
        DB::table('permissions')->insert([
        	'name' 			=> 'Creación de Ususarios',
        	'slug' 			=> 'usuarios.create',
        	'description' 	=> 'Editar Datos de los Usuarios del Sistema',
        ]);
        //Editar
        DB::table('permissions')->insert([
        	'name' 			=> 'Edición de Ususarios',
        	'slug' 			=> 'usuarios.edit',
        	'description' 	=> 'Editar Datos de los Usuarios del Sistema',
        ]);
        //Eliminar
        DB::table('permissions')->insert([
        	'name' 			=> 'Eliminar Ususarios',
        	'slug' 			=> 'usuarios.destroy',
        	'description' 	=> 'Eliminar Usuarios del Sistema',
        ]);

        //Roles
        //Listar
        DB::table('permissions')->insert([
        	'name' 			=> 'Navegar Roles',
        	'slug' 			=> 'roles.index',
        	'description' 	=> 'Lista y Navega todos los Roles del Sistema',
        ]);
        //Ver
        DB::table('permissions')->insert([
        	'name' 			=> 'Ver Detalles de Roles',
        	'slug' 			=> 'roles.show',
        	'description' 	=> 'Ver en detalle cada Rol del Sistema',
        ]);
        //Crear
        DB::table('permissions')->insert([
        	'name' 			=> 'Creación de Roles',
        	'slug' 			=> 'roles.create',
        	'description' 	=> 'Editar Datos de los Roles del Sistema',
        ]);
        //Editar
        DB::table('permissions')->insert([
        	'name' 			=> 'Edición de Roles',
        	'slug' 			=> 'roles.edit',
        	'description' 	=> 'Editar Datos de los Roles del Sistema',
        ]);
        //Eliminar
        DB::table('permissions')->insert([
        	'name' 			=> 'Eliminar Roles',
        	'slug' 			=> 'roles.destroy',
        	'description' 	=> 'Eliminar Roles del Sistema',
        ]);

        //Bienes
        //Listar
        DB::table('permissions')->insert([
        	'name' 			=> 'Navegar Bienes',
        	'slug' 			=> 'bienes.index',
        	'description' 	=> 'Lista y Navega todos los Bienes del Sistema',
        ]);
        //Ver
        DB::table('permissions')->insert([
        	'name' 			=> 'Ver Detalles de Bienes',
        	'slug' 			=> 'bienes.show',
        	'description' 	=> 'Ver en detalle cada Bien del Sistema',
        ]);
        //Crear
        DB::table('permissions')->insert([
        	'name' 			=> 'Creación de Bienes',
        	'slug' 			=> 'bienes.create',
        	'description' 	=> 'Editar Datos de los Bienes del Sistema',
        ]);
        //Editar
        DB::table('permissions')->insert([
        	'name' 			=> 'Edición de Bienes',
        	'slug' 			=> 'bienes.edit',
        	'description' 	=> 'Editar Datos de los Bienes del Sistema',
        ]);
        //Eliminar
        DB::table('permissions')->insert([
        	'name' 			=> 'Eliminar Bienes',
        	'slug' 			=> 'bienes.destroy',
        	'description' 	=> 'Eliminar Bienes del Sistema',
        ]);
    }
}
