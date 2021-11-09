<?php

namespace App\Controller;

use App\Entity\Donation;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DonationController extends AbstractController
{
    /**
     * @Route("/donation", name="donation")
     */
    public function sendDonation(Request $request): Response
    {
        $donation_data =  json_decode($request->getContent(), true);
        $donation = new Donation();
        $donation->setDonorName($donation_data['nomDuDonneur']);
        $donation->setClubName($donation_data['nomDuClub']);
        $donation->setPriceDonation($donation_data['Donation']);

        $user = $this->getDoctrine()->getRepository(User::class)->findOneByEmail($donation_data['nomDuDonneur']);

        if ($user->getWallet() < $donation_data['Donation']) {
            return $this->json('Pas assez d\'argent');
        }

        $user->setWallet($user->getWallet() - $donation_data['Donation']);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($donation);
        $entityManager->flush();
        return $this->json('Success');
    }
}
