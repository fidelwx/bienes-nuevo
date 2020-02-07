<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        Category::create(["code"=>'018', "description"=>'EQUIPOS DE TRANSPORTE', "code_pres"=>'1-2-3-01-18-00-000']);
		Category::create(["code"=>'021', "description"=>'MATERIALES Y EQUIPOS DE CONSTRUCCION', "code_pres"=>'1-2-3-01-02-01-000']);
		Category::create(["code"=>'022', "description"=>'MATERIALES Y EQUIPOS DE MANTENIMIENTO AUTOMOTORES', "code_pres"=>'1-2-3-01-02-02-000']);
		Category::create(["code"=>'023', "description"=>'MAQUINARIAS Y EQUIPOS AGRICOLAS Y PECUARIOS', "code_pres"=>'1-2-3-01-02-03-000']);
		Category::create(["code"=>'024', "description"=>'MAQUINARIAS Y EQUIPOS DE ARTES GRAFICAS Y REPRODUCCION', "code_pres"=>'1-2-3-01-02-04-000']);
		Category::create(["code"=>'025', "description"=>'MAQUINARIAS Y EQUIPOS INDUSTRIALES Y DE TALLER', "code_pres"=>'1-2-3-01-02-05-000']);
		Category::create(["code"=>'026', "description"=>'MAQUINARIAS Y EQUIPOS DE RIEGO Y ACUEDUCTOS', "code_pres"=>'1-2-3-01-02-06-000']);
		Category::create(["code"=>'029', "description"=>'OTRAS MAQUINARIAS Y EQUIPOS', "code_pres"=>'1-2-3-01-02-09-000']);
		Category::create(["code"=>'040', "description"=>'EQUIPOS DE TELECOMUNICACIONES', "code_pres"=>'1-2-3-01-04-00-000']);
		Category::create(["code"=>'050', "description"=>'EQUIPOS MEDICO VETERINARIOS', "code_pres"=>'1-2-3-01-05-00-000']);
		Category::create(["code"=>'060', "description"=>'EQUIPOS DE ENSEÑANZA DEPORTE Y RECREACION', "code_pres"=>'1-2-3-01-06-00-000']);
		Category::create(["code"=>'070', "description"=>'EQUIPOS CIENTIFICOS Y DE LABORATORIO', "code_pres"=>'1-2-3-01-07-00-000']);
		Category::create(["code"=>'081', "description"=>'MOBILIARIO Y EQUIPOS DE OFICINA', "code_pres"=>'1-2-3-01-08-01-000']);
		Category::create(["code"=>'082', "description"=>'EQUIPOS DE PROCESAMIENTO DE DATOS', "code_pres"=>'1-2-3-01-08-02-000']);
		Category::create(["code"=>'083', "description"=>'MOBILIARIO Y EQUIPO DE ALOJAMIENTO', "code_pres"=>'1-2-3-01-08-03-000']);
		Category::create(["code"=>'091', "description"=>'SEMOVIENTES', "code_pres"=>'1-2-3-01-09-01-000']);
    }
}
