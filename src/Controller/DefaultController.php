<?php

declare(strict_types=1);

namespace App\Controller;

use FeedIo\FeedIo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(FeedIo $feedIo, string $rssFeedUrl)
    {
        $rss = $feedIo->read($rssFeedUrl);

//        dump(iterator_to_array(iterator_to_array($rss->getFeed())[0]->getAllElements())[0]->getAttributes()['url']);
//        dump(iterator_to_array($rss->getFeed())[0]);
//        die;
        return $this->render('index.html.twig', ['rss' => $rss->getFeed()]);
    }
}