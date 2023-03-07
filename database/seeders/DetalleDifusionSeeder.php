<?php

namespace Database\Seeders;

use App\Models\DifusionDetalle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetalleDifusionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Difusion 1
        $detalleDifusion1 = new DifusionDetalle();
        $detalleDifusion1->descripcion = 'Cumplir con las actividades académico';
        $detalleDifusion1->imagen = 'http://localhost:8000/images/difusion/difusion1/imagen1.png';
        $detalleDifusion1->id_difusion = 1;
        $detalleDifusion1->save();

        $detalleDifusion2 = new DifusionDetalle();
        $detalleDifusion2->descripcion = 'Participar de manera permanente,en el aula';
        $detalleDifusion2->imagen = 'http://localhost:8000/images/difusion/difusion1/imagen2.png';
        $detalleDifusion2->id_difusion = 1;
        $detalleDifusion2->save();

        $detalleDifusion3 = new DifusionDetalle();
        $detalleDifusion3->descripcion = 'Tratar con dignidad, respeto y sin discriminación alguna a los demas compañeros y docentes.';
        $detalleDifusion3->imagen = 'http://localhost:8000/images/difusion/difusion1/imagen3.png';
        $detalleDifusion3->id_difusion = 1;
        $detalleDifusion3->save();

        $detalleDifusion4 = new DifusionDetalle();
        $detalleDifusion4->descripcion = 'Procurar la excelencia educativa y mostrar integridad y honestidad académica.';
        $detalleDifusion4->imagen = 'http://localhost:8000/images/difusion/difusion1/imagen4.png';
        $detalleDifusion4->id_difusion = 1;
        $detalleDifusion4->save();

        $detalleDifusion5 = new DifusionDetalle();
        $detalleDifusion5->descripcion = 'Comprometerse con el cuidado y buen uso de las instalaciones físicas, bienes y servicios de los establecimientos educativos';
        $detalleDifusion5->imagen = 'http://localhost:8000/images/difusion/difusion1/imagen5.png';
        $detalleDifusion5->id_difusion = 1;
        $detalleDifusion5->save();

        $detalleDifusion6 = new DifusionDetalle();
        $detalleDifusion6->descripcion = 'Participar en los procesos de elección del gobierno escolar';
        $detalleDifusion6->imagen = 'http://localhost:8000/images/difusion/difusion1/imagen6.png';
        $detalleDifusion6->id_difusion = 1;
        $detalleDifusion6->save();

        $detalleDifusion7 = new DifusionDetalle();
        $detalleDifusion7->descripcion = 'Fundamentar debidamente sus opiniones y respetar las de los demás.';
        $detalleDifusion7->imagen = 'http://localhost:8000/images/difusion/difusion1/imagen7.png';
        $detalleDifusion7->id_difusion = 1;
        $detalleDifusion7->save();

        $detalleDifusion8 = new DifusionDetalle();
        $detalleDifusion8->descripcion = 'Respetar y cumplir los códigos de convivencia armónica.';
        $detalleDifusion8->imagen = 'http://localhost:8000/images/difusion/difusion1/imagen8.png';
        $detalleDifusion8->id_difusion = 1;
        $detalleDifusion8->save();

        $detalleDifusion9 = new DifusionDetalle();
        $detalleDifusion9->descripcion = 'Respetar y cumplir la Constitución, las leyes, reglamentos';
        $detalleDifusion9->imagen = 'http://localhost:8000/images/difusion/difusion1/imagen9.png';
        $detalleDifusion9->id_difusion = 1;
        $detalleDifusion9->save();

        //Difusion2

        $detalleDifusion10 = new DifusionDetalle();
        $detalleDifusion10->descripcion = 'Recibir informes periódicos sobre el progreso académico';
        $detalleDifusion10->imagen = 'http://localhost:8000/images/difusion/difusion2/imagen1.png';
        $detalleDifusion10->id_difusion = 2;
        $detalleDifusion10->save();

        $detalleDifusion11 = new DifusionDetalle();
        $detalleDifusion11->descripcion = 'Participar en los procesos de evaluación de desempeño docente.';
        $detalleDifusion11->imagen = 'http://localhost:8000/images/difusion/difusion2/imagen2.png';
        $detalleDifusion11->id_difusion = 2;
        $detalleDifusion11->save();

        $detalleDifusion12 = new DifusionDetalle();
        $detalleDifusion12->descripcion = 'Elegir y ser elegidos como parte de los comités de padres y madres de familia.';
        $detalleDifusion12->imagen = 'http://localhost:8000/images/difusion/difusion2/imagen3.png';
        $detalleDifusion12->id_difusion = 2;
        $detalleDifusion12->save();

        $detalleDifusion13 = new DifusionDetalle();
        $detalleDifusion13->descripcion = 'Ser escuchados y que su opinión , sobre la gestión y procesos educativos, sea analizada por las autoridades educativas';
        $detalleDifusion13->imagen = 'http://localhost:8000/images/difusion/difusion2/imagen4.png';
        $detalleDifusion13->id_difusion = 2;
        $detalleDifusion13->save();

        $detalleDifusion14 = new DifusionDetalle();
        $detalleDifusion14->descripcion = 'Participar en las entidades correspondientes de planificación, construcción y vigilacia';
        $detalleDifusion14->imagen = 'http://localhost:8000/images/difusion/difusion2/imagen5.png';
        $detalleDifusion14->id_difusion = 2;
        $detalleDifusion14->save();

        $detalleDifusion15 = new DifusionDetalle();
        $detalleDifusion15->descripcion = 'Vigilar el respeto a los derechos de sus hijos e hijas o representadas y representados';
        $detalleDifusion15->imagen = 'http://localhost:8000/images/difusion/difusion2/imagen6.png';
        $detalleDifusion15->id_difusion = 2;
        $detalleDifusion15->save();

        //Difusion 3

        $detalleDifusion16 = new DifusionDetalle();
        $detalleDifusion16->descripcion = 'Obedecer a los maestros cuando hablan o explican algo para entendernos mejor.';
        $detalleDifusion16->imagen = 'http://localhost:8000/images/difusion/difusion3/imagen1.png';
        $detalleDifusion16->id_difusion = 3;
        $detalleDifusion16->save();

        $detalleDifusion17 = new DifusionDetalle();
        $detalleDifusion17->descripcion = 'Ser responsables con las tareas que dan los maestros.';
        $detalleDifusion17->imagen = 'http://localhost:8000/images/difusion/difusion3/imagen2.png';
        $detalleDifusion17->id_difusion = 3;
        $detalleDifusion17->save();

        $detalleDifusion18 = new DifusionDetalle();
        $detalleDifusion18->descripcion = 'Ser solidarios con los compañeros, maestros y ayudarlos en lo que necesiten.';
        $detalleDifusion18->imagen = 'http://localhost:8000/images/difusion/difusion3/imagen3.png';
        $detalleDifusion18->id_difusion = 3;
        $detalleDifusion18->save();

        $detalleDifusion16 = new DifusionDetalle();
        $detalleDifusion16->descripcion = 'Ser ordenados en el aula para prevenir accidentes y al salir hay que dejar el aula ordenada.';
        $detalleDifusion16->imagen = 'http://localhost:8000/images/difusion/difusion3/imagen4.png';
        $detalleDifusion16->id_difusion = 3;
        $detalleDifusion16->save();

        $detalleDifusion17 = new DifusionDetalle();
        $detalleDifusion17->descripcion = 'Ser respetuoso con los mayores, maestros y compañeros para ser más educados y tener la igualdad y no discriminar.';
        $detalleDifusion17->imagen = 'http://localhost:8000/images/difusion/difusion3/imagen5.png';
        $detalleDifusion17->id_difusion = 3;
        $detalleDifusion17->save();

        $detalleDifusion18 = new DifusionDetalle();
        $detalleDifusion18->descripcion = 'Tener tolerancia a los demás para convivir mejor en el aula. Por ejemplo, cuando un compañero no comprende algo, tener paciencia al enseñarle.';
        $detalleDifusion18->imagen = 'http://localhost:8000/images/difusion/difusion3/imagen6.png';
        $detalleDifusion18->id_difusion = 3;
        $detalleDifusion18->save();
    }
}
