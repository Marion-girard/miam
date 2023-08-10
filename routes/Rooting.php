<?php


namespace Http\Rooter;

class Rooting{

    private $_route;
    private $_method;
    public function __construct(){
        $this->_route =isset($_GET['action'])? $_GET['action']:null;
        $this->_method =isset($_GET['method'])? $_GET['method']:null;
    }

    public function getRoute():string{
        return $this->_route;
    }
    public function getMethod():string{
        return $this->_method;
    }

    private function router(){
        if(!empty($this->_route) && $this->_route!==null){
            $strRoute = str_replace("controler","", $this->getRoute());
            $newRoute = ucwords($strRoute);
            $controler = "https\Controlers\\$newRoute";
            $verifClass =str_replace("\\","/", $controler. '.php');

            if(file_exists($verifClass)){
                $instanceClass = new $controler();

                if(!empty($this->getMethod()) && $this->getMethod()!==null)
                {
                    $methodDeLeClasse = $this->getMethod();
                    if(method_exists($instanceClass, $methodDeLeClasse)){
                      $instanceClass->$methodDeLeClasse;
                    }
                }
            }
        }
    }
}


/*$router= isset($_GET['action']) ? $_GET['action']: '';


switch ($router) {
    case "registerForm":
        require './View/register.phtml';
        break;

    case "addRegister":
        require './Controllers/ajout_user.php';
        require './Controllers/redirection.php';

        add();
        redirection();
        break;
    
    case "loginForm":
        require './View/login.phtml';

        break;

    case "addLogin":
        require './Controllers/connexion.php';
        require './Controllers/redirection.php';
             
        verification();
        redirection();
        break;
    
    case "deconnexionSesion":
        require './Controllers/deconnexion.php';
        require './Controllers/redirection.php';
        deconnexion();
        redirection();
        break;

    case "afficheMur":
            require './View/mur.phtml';
         break;

    case "addPost":
            require './Controllers/Posts.php';
            addMessage();
    break;
    default:

        # code...
        require './View/layout.phtml' ;
       
        break;
}*/