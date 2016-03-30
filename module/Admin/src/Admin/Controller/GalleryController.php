<?php
namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class GalleryController extends AbstractActionController
{
    public function listAction(){

    }

    public function addAction(){

    }

    public function updateAction(){
        $galleryId = $this->params('galleryId',null);


        return array(
            "galleryId" => $galleryId,
            "name" => "kapoio name",
            "pageTitle" => "Update Gallery"
        );
    }

    public function deleteAction(){

    }
}