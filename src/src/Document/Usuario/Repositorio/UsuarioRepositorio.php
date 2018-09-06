<?php

declare(strict_types=1);

namespace App\Document\Usuario\Repositorio;

use App\Document\Usuario\Entidade\UsuarioEntidade;
use Doctrine\ODM\MongoDB\DocumentManager;

class UsuarioRepositorio
{
    protected $dm;

    public function __construct(DocumentManager $documentManager)
    {
        $this->dm = $documentManager;
    }

    public function save(array $input)
    {
        $data = new \DateTime();

        $usuario = new UsuarioEntidade();
        $usuario->setUsuNome($input['usua_nome']);
        $usuario->setUsuEmail($input['usua_email']);
        $usuario->setUsuTelefone($input['usua_telefone']);
        $usuario->setUsuImagemPerfil($input['usua_imagem_perfil']);
        $usuario->setCreatedAt($data);

        $this->dm->persist($usuario);
        $this->dm->flush();

        return $usuario;
    }

    public function all(array $input = null)
    {
        $usuario = UsuarioEntidade::class;

        $all = $this->dm->getRepository($usuario);

        if ($input != null) {

            $nameSearch = new \MongoRegex('/.*'.$input['usua_nome'].'.*/i');

            $search = $this->dm->createQueryBuilder($usuario)
                ->sort([
                    'usua_nome' => 'asc'
                ])
                ->field('usua_nome')
                ->equals($nameSearch)
                ->getQuery()
                ->toArray();

            return $search;
        }

        return $all->findAll();
    }

    public function find(int $id)
    {
        $usuario = UsuarioEntidade::class;

        $find = $this->dm->find($usuario, $id);

        if (!$find) {
            throw new \Exception('Nenhum Usuário foi encontrado.');
        }

        return $find;
    }

    public function update(array $input, int $id)
    {
        $usuario = $this->find($id);

        $usuario->setUsuNome($input['usuaNome']);
        $usuario->setUsuEmail($input['usuaEmail']);
        $usuario->setUsuTelefone($input['usuaTelefone']);
        $usuario->setUsuImagemPerfil($input['usuaImagemPerfil']);

        $this->dm->flush();

        return $usuario;
    }

}