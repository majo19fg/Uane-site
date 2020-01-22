<?php

use App\Programa;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\TipoPrograma;
use App\Campus;
use App\ModalidadPrograma;
use Illuminate\Foundation\Auth\User;
// use App\User;

class ProgramasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Programa::truncate();
        TipoPrograma::truncate();
        Campus::truncate();
        ModalidadPrograma::truncate();
        App\User::truncate();

        $user = new User();
        $user->name = 'Alfredo';
        $user->second_name = 'Galvan';
        $user->email = 'agalvan@uane.edu.mx';
        $user->job_position = 'Webmaster';
        $user->password = bcrypt('chencho9130');
        $user->save();

        $modalidad = new ModalidadPrograma();
        $modalidad->name = 'Presencial';
        $modalidad->save();
        $modalidad = new ModalidadPrograma();
        $modalidad->name = 'En línea';
        $modalidad->save();


        $campus = new Campus();
        $campus->name = 'Saltillo';
        $campus->save();
        $campus = new Campus();
        $campus->name = 'Torreón';
        $campus->save();
        $campus = new Campus();
        $campus->name = 'Monclova';
        $campus->save();
        $campus = new Campus();
        $campus->name = 'Sabinas';
        $campus->save();
        $campus = new Campus();
        $campus->name = 'Piedras Negras';
        $campus->save();
        $campus = new Campus();
        $campus->name = 'Monterrey';
        $campus->save();
        $campus = new Campus();
        $campus->name = 'Reynosa';
        $campus->save();
        $campus = new Campus();
        $campus->name = 'Matamoros';
        $campus->save();

        $tipoprograma = new TipoPrograma();
        $tipoprograma->name = "Ingeniería";
        $tipoprograma->save();

        $tipoprograma = new TipoPrograma();
        $tipoprograma->name = "Licenciatura";
        $tipoprograma->save();

        $tipoprograma = new TipoPrograma();
        $tipoprograma->name = "Maestría";
        $tipoprograma->save();

        $tipoprograma = new TipoPrograma();
        $tipoprograma->name = "Especialidad";
        $tipoprograma->save();

        $tipoprograma = new TipoPrograma();
        $tipoprograma->name = "Doctorado";
        $tipoprograma->save();

        $programa = new Programa;
        $programa->title = "Pregrado de Bachillerato";
        $programa->url = str_slug("Pregrado de Bachillerato");
        $programa->descripcion_corta = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
        $programa->duracion_curso = "4 años";
        $programa->descripcion_programa = "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero deserunt impedit facere? Eaque, reprehenderit omnis nihil hic eligendi officia assumenda consectetur, blanditiis magnam quod earum error reiciendis a harum repudiandae.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, repellat? Fuga aliquid, recusandae asperiores repudiandae quaerat aspernatur veniam tempora ducimus pariatur accusantium cum saepe assumenda autem quasi quibusdam temporibus sapiente.</p>";
        $programa->inicio_curso = Carbon::now();
        $programa->tipoPrograma_id = "1";
        $programa->modalidadPrograma_id = '1';
        $programa->save();

        $programa = new Programa;
        $programa->title = "Carrera de ingeniería";
        $programa->url = str_slug("Carrera de ingeniería");
        $programa->descripcion_corta = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
        $programa->duracion_curso = "4 años";
        $programa->descripcion_programa = "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero deserunt impedit facere? Eaque, reprehenderit omnis nihil hic eligendi officia assumenda consectetur, blanditiis magnam quod earum error reiciendis a harum repudiandae.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, repellat? Fuga aliquid, recusandae asperiores repudiandae quaerat aspernatur veniam tempora ducimus pariatur accusantium cum saepe assumenda autem quasi quibusdam temporibus sapiente.</p>";
        $programa->inicio_curso = Carbon::now();
        $programa->tipoPrograma_id = "1";
        $programa->modalidadPrograma_id = '1';
        $programa->save();

        $programa = new Programa;
        $programa->title = "Carrera de licenciatura";
        $programa->url = str_slug("Carrera de licenciatura");
        $programa->descripcion_corta = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
        $programa->duracion_curso = "4 años";
        $programa->descripcion_programa = "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero deserunt impedit facere? Eaque, reprehenderit omnis nihil hic eligendi officia assumenda consectetur, blanditiis magnam quod earum error reiciendis a harum repudiandae.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, repellat? Fuga aliquid, recusandae asperiores repudiandae quaerat aspernatur veniam tempora ducimus pariatur accusantium cum saepe assumenda autem quasi quibusdam temporibus sapiente.</p>";
        $programa->inicio_curso = Carbon::now();
        $programa->tipoPrograma_id = "2";
        $programa->modalidadPrograma_id = '2';
        $programa->save();

        $programa = new Programa;
        $programa->title = "Postgrado de Maestría";
        $programa->url = str_slug("Postgrado de Maestría");
        $programa->descripcion_corta = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
        $programa->duracion_curso = "4 años";
        $programa->descripcion_programa = "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero deserunt impedit facere? Eaque, reprehenderit omnis nihil hic eligendi officia assumenda consectetur, blanditiis magnam quod earum error reiciendis a harum repudiandae.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, repellat? Fuga aliquid, recusandae asperiores repudiandae quaerat aspernatur veniam tempora ducimus pariatur accusantium cum saepe assumenda autem quasi quibusdam temporibus sapiente.</p>";
        $programa->inicio_curso = Carbon::now();
        $programa->tipoPrograma_id = "3";
        $programa->modalidadPrograma_id = '1';
        $programa->save();

        $programa = new Programa;
        $programa->title = "Postgrado de especialidad";
        $programa->url = str_slug("Postgrado de especialidad");
        $programa->descripcion_corta = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
        $programa->duracion_curso = "4 años";
        $programa->descripcion_programa = "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero deserunt impedit facere? Eaque, reprehenderit omnis nihil hic eligendi officia assumenda consectetur, blanditiis magnam quod earum error reiciendis a harum repudiandae.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, repellat? Fuga aliquid, recusandae asperiores repudiandae quaerat aspernatur veniam tempora ducimus pariatur accusantium cum saepe assumenda autem quasi quibusdam temporibus sapiente.</p>";
        $programa->inicio_curso = Carbon::now();
        $programa->tipoPrograma_id = "4";
        $programa->modalidadPrograma_id = '1';
        $programa->save();

        $programa = new Programa;
        $programa->title = "Postgrado de doctorado";
        $programa->url = str_slug("Postgrado de doctorado");
        $programa->descripcion_corta = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
        $programa->duracion_curso = "4 años";
        $programa->descripcion_programa = "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero deserunt impedit facere? Eaque, reprehenderit omnis nihil hic eligendi officia assumenda consectetur, blanditiis magnam quod earum error reiciendis a harum repudiandae.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, repellat? Fuga aliquid, recusandae asperiores repudiandae quaerat aspernatur veniam tempora ducimus pariatur accusantium cum saepe assumenda autem quasi quibusdam temporibus sapiente.</p>";
        $programa->inicio_curso = Carbon::now();
        $programa->tipoPrograma_id = "5";
        $programa->modalidadPrograma_id = '1';
        $programa->save();
        
    }
}
