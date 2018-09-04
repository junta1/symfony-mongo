<?php
/**
 * Created by PhpStorm.
 * User: rafaelconceicao@conder.intranet
 * Date: 04/09/18
 * Time: 17:38
 */

namespace App\Controller;

use App\Document\Usuario\Repositorio\UsuarioRepositorio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UsuarioController extends Controller
{
    protected $repositorio;

    public function __construct(UsuarioRepositorio $usuarioRepositorio)
    {
        $this->repositorio = $usuarioRepositorio;
    }

    public function createAction(Request $request)
    {

    }
}