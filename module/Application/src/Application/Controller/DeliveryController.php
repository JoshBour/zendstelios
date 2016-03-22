<?php
namespace Application\Controller;


use Zend\Mvc\Controller\AbstractActionController;

class DeliveryController extends AbstractActionController
{
    public function indexAction()
    {

    }

    public function addAction()
    {

    }

    public function listAction()
    {
        $delivery = array(
            "deliveryId" => 5,
            "name" => "metafora",
            "description" => "mia metafora"
        );



        return array(
            "delivery" => $delivery
        );
    }
}