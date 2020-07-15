<?php

namespace App\Entity;

use App\Repository\MailRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MailRepository::class)
 */
class Mail
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_mail;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_destination;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdMail(): ?int
    {
        return $this->id_mail;
    }

    public function setIdMail(int $id_mail): self
    {
        $this->id_mail = $id_mail;

        return $this;
    }

    public function getIdDestination(): ?int
    {
        return $this->id_destination;
    }

    public function setIdDestination(int $id_destination): self
    {
        $this->id_destination = $id_destination;

        return $this;
    }
}
