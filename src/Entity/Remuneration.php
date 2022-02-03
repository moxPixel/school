<?php

namespace App\Entity;

use App\Repository\RemunerationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RemunerationRepository::class)
 */
class Remuneration
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="remuneration")
     */
    private $teacher;

    /**
     * @ORM\Column(type="integer")
     */
    private $tarification;

    public function __construct()
    {
        $this->teacher = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|User[]
     */
    public function getTeacher(): Collection
    {
        return $this->teacher;
    }

    public function addTeacher(User $teacher): self
    {
        if (!$this->teacher->contains($teacher)) {
            $this->teacher[] = $teacher;
            $teacher->setRemuneration($this);
        }

        return $this;
    }

    public function removeTeacher(User $teacher): self
    {
        if ($this->teacher->removeElement($teacher)) {
            // set the owning side to null (unless already changed)
            if ($teacher->getRemuneration() === $this) {
                $teacher->setRemuneration(null);
            }
        }

        return $this;
    }

    public function getTarification(): ?int
    {
        return $this->tarification;
    }

    public function setTarification(int $tarification): self
    {
        $this->tarification = $tarification;

        return $this;
    }
}
