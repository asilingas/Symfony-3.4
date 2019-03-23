<?php
/**
 * Created by PhpStorm.
 * User: new
 * Date: 2019.03.23
 * Time: 10:08
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction()
    {
        return $this->render('main/homepage.html.twig');
    }
}