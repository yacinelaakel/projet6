<?php

namespace Portail\WebBundle\FileUploader;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader
{
    private $targetDir;

    public function __construct($targetDir)
    {
        $this->targetDir = $targetDir;
    }

    public function upload(UploadedFile $file)
    {
        // Génère un nom unique au fichier par sécurité
        $fileName = md5(uniqid()).'.'.$file->guessExtension();
        // Déplace le fichier dans le dossier web/uploads/photos
        $file->move($this->targetDir, $fileName);

        return $fileName;
    }
}