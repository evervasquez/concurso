<?php
use concurso\Repositorio\JuradosRepositorio;

class juradosControlador extends Controlador
{
    protected $juradoRepo;

    public function __construct()
    {
        parent::__construct();
    }

    //metodo para llamar al controller index
    public function index()
    {
        $this->juradoRepo = new JuradosRepositorio();
        return print_r(json_encode($this->juradoRepo->save()));
    }

    public function nuevo()
    {
        $datos = $_POST;
        $this->juradoRepo = new JuradosRepositorio();
        return $this->juradoRepo->nuevo($datos);
    }
} 