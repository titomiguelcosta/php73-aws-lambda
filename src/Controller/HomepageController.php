<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/home", name="homepage")
     */
    public function __invoke()
    {
	ob_start();
        phpinfo();
        $output = ob_get_contents();
        ob_get_clean();
	
	return new Response($output);
    }
}
