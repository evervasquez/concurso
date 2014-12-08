<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 07/12/14
 * Time: 07:07 PM
 */

namespace concurso\Repositorio;

use concurso\Entidades\Jurados;
use Illuminate\Database\Capsule\Manager as Capsule;

class JuradosRepositorio {

    public function save()
    {
        return Capsule::table('jurados')->get();
    }

    public function nuevo($datos)
    {
        $jurado = new Jurados();
        $jurado->fullname = $datos['fullname'];
        $jurado->profesion = $datos['profesion'];

        if($jurado->save())
        {
            $idmax = Capsule::table('jurados')->max('id');
            $datosMax = $this->find($idmax);
            return json_encode(array(
                "Result" => "OK",
                "datos" => $datosMax
            ));
        }else{
            return json_encode(array(
                "Result" => "ERROR"
            ));
        }
    }

    public function find($id)
    {
        return Capsule::table('jurados')->where('id','=',$id)->get();
    }
} 