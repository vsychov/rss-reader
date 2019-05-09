<?php

declare(strict_types=1);

namespace App\Controller;

use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationExtraController extends AbstractController
{
    /**
     * @Route("/register/validate-email/{email}", defaults={"email": ""})
     */
    public function validateEmail(UserManagerInterface $userManager, string $email)
    {
        $user = $userManager->findUserByEmail($email);

        return $this->json(['email_allowed' => $user === null]);
    }
}
