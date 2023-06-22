<?php

use Phalcon\Mvc\Controller;

session_start();

class LanguageController extends Controller
{
    public function indexAction()
    {
        setcookie("language", $_POST['lang']);
        $this->response->redirect('/');
    }
}