<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $products = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager')->getRepository('Admin\Entity\Product')->findBy(array("productId" => 4));
        foreach($products as $product){
            echo $product->getTitle() . "<br>";
        }
    }

    public function aboutAction(){

    }

    public function contactAction(){

    }
}