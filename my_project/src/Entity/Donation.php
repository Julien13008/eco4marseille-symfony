<?php

namespace App\Entity;

use App\Repository\DonationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DonationRepository::class)
 */
class Donation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $donor_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $club_name;

    /**
     * @ORM\Column(type="float")
     */
    private $price_donation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDonorName(): ?string
    {
        return $this->donor_name;
    }

    public function setDonorName(string $donor_name): self
    {
        $this->donor_name = $donor_name;

        return $this;
    }

    public function getClubName(): ?string
    {
        return $this->club_name;
    }

    public function setClubName(string $club_name): self
    {
        $this->club_name = $club_name;

        return $this;
    }

    public function getPriceDonation(): ?float
    {
        return $this->price_donation;
    }

    public function setPriceDonation(float $price_donation): self
    {
        $this->price_donation = $price_donation;

        return $this;
    }
}
