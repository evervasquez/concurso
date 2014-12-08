<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 07/12/14
 * Time: 07:07 PM
 */

namespace concurso\Repositorio;

use Illuminate\Database\Capsule\Manager as Capsule;

class JuradosRepositorio {

    public function save()
    {
        return Capsule::table('jurados')->get();
    }
} 