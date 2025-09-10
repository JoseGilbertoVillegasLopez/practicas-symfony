<?php

namespace App\Entity;

use App\Repository\UsuarioRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsuarioRepository::class)]
class Usuario
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $ap_paterno = null;

    #[ORM\Column(length: 255)]
    private ?string $ap_materno = null;

    #[ORM\Column]
    private ?int $edad = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApPaterno(): ?string
    {
        return $this->ap_paterno;
    }

    public function setApPaterno(string $ap_paterno): static
    {
        $this->ap_paterno = $ap_paterno;

        return $this;
    }

    public function getApMaterno(): ?string
    {
        return $this->ap_materno;
    }

    public function setApMaterno(string $ap_materno): static
    {
        $this->ap_materno = $ap_materno;

        return $this;
    }

    public function getEdad(): ?int
    {
        return $this->edad;
    }

    public function setEdad(int $edad): static
    {
        $this->edad = $edad;

        return $this;
    }
}
