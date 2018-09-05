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

        $this->repositorio = new UsuarioRepositorio($this->dm);
    }

    public function testSalvandoDadosSemTratamento()
    {
        $input = $this->input();

        $save = $this->repositorio->save($input);

        $this->assertInternalType('object', $save);
    }

    public function testObtendoTodosOsDados()
    {
        $input = $this->input();

        $all = $this->repositorio->all($input);

        $this->assertInternalType('array', $all);
    }

    public function input()
    {
        return [
            'usua_nome' => 'Rafael',
            'usua_email' => 'rafael@email.com',
            'usua_telefone' => '71992542075',
            'usua_imagem_perfil' => null,
        ];
    }

    public function output()
    {
        return [
            'usua_nome' => 'Rafael',
            'usua_email' => 'rafael@email.com',
            'usua_telefone' => '71992542075',
            'usua_imagem_perfil' => null,
        ];
    }
}