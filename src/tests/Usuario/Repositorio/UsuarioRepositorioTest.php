<?php
/**
 * Created by PhpStorm.
 * User: administrador
 * Date: 04/09/18
 * Time: 21:47
 */

namespace App\Tests\Usuario\Repositorio;


use App\Document\Usuario\Repositorio\UsuarioRepositorio;
use PHPUnit\Framework\TestCase;
use Stubs\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UsuarioRepositorioTest extends KernelTestCase
{
    protected $repositorio;

    protected $dm;

    public function setUp()
    {
        $kernel = self::bootKernel();

        $this->dm = $kernel->getContainer()
            ->get('doctrine_mongodb')
            ->getManager();
    }

    public function testSalvandoDadosSemTratamento()
    {
        $input = [
            'usuaNome' => 'Rafael',
            'usuaEmail' => 'rafael@email.com',
            'usuaTelefone' => '71992542075',
            'usuaImagemPerfil' => null,
        ];

        $this->repositorio = new UsuarioRepositorio($this->dm);

        $this->repositorio->save($input);
    }
}