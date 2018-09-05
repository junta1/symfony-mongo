<?php

namespace App\Document\Usuario\Entidade;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class UsuarioEntidade
{
    /**
     * @MongoDB\Id
     */
    protected $usuId;

    /**
     * @MongoDB\Field(type="string", name="usu_nome")
     */
    protected $usuNome;

    /**
     * @MongoDB\Field(type="string", name="usu_telefone")
     */
    protected $usuTelefone;

    /**
     * @MongoDB\Field(type="string", name="usu_email")
     */
    protected $usuEmail;

    /**
     * @MongoDB\Field(type="string", name="usu_imagem_perfil")
     */
    protected $usuImagemPerfil;

    /**
     * @MongoDB\Field(type="date")
     */
    protected $createdAt;

    /**
     * @return mixed
     */
    public function getUsuId()
    {
        return $this->usuId;
    }

    /**
     * @return mixed
     */
    public function getUsuNome()
    {
        return $this->usuNome;
    }

    /**
     * @param mixed $usuNome
     */
    public function setUsuNome($usuNome)
    {
        $this->usuNome = $usuNome;
    }

    /**
     * @return mixed
     */
    public function getUsuTelefone()
    {
        return $this->usuTelefone;
    }

    /**
     * @param mixed $usuTelefone
     */
    public function setUsuTelefone($usuTelefone)
    {
        $this->usuTelefone = $usuTelefone;
    }

    /**
     * @return mixed
     */
    public function getUsuEmail()
    {
        return $this->usuEmail;
    }

    /**
     * @param mixed $usuEmail
     */
    public function setUsuEmail($usuEmail)
    {
        $this->usuEmail = $usuEmail;
    }

    /**
     * @return mixed
     */
    public function getUsuImagemPerfil()
    {
        return $this->usuImagemPerfil;
    }

    /**
     * @param mixed $usuImagemPerfil
     */
    public function setUsuImagemPerfil($usuImagemPerfil)
    {
        $this->usuImagemPerfil = $usuImagemPerfil;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
}
