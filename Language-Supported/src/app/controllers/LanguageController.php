<?php

use Phalcon\Mvc\Controller;

session_start();

class LanguageController extends Controller
{
    public function indexAction()
    {
        $dir = APP_PATH."/messages";
        if (array_search($_POST['lang'].".php", scandir($dir))){
            setcookie("language", $_POST['lang']);
            $this->response->redirect('/');
        }
        else {
            echo "<h1>Do Not Support This Language</h1> <br>";
            echo "<a href='/' class='btn btn-primary'>Back</a>";
        }

    }
}