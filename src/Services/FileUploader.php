<?php


namespace App\Services;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader
{
    private $targetDirectory;
    private $imageCategoryDirectory;

    public function __construct($targetDirectory, $imageCategoryDirectory)
    {
        $this->targetDirectory = $targetDirectory;
        $this->imageCategoryDirectory = $imageCategoryDirectory;
    }

    public function upload(UploadedFile $file)
    {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $fileName = $originalFilename.'-'.uniqid().'.'.$file->guessExtension();

        try {
            $file->move($this->getTargetDirectory(), $fileName);
        } catch (FileException $e) {
            // ... handle exception if something happens during file upload
        }

        return $fileName;
    }
    public function deleteFile($fileName){
        $file_path = $this->getTargetDirectory().'/'.$fileName;
        if(file_exists($file_path)) unlink($file_path);
    }

    public function getTargetDirectory()
    {
        return $this->targetDirectory;
    }

    public function uploadCategoryImageCard(UploadedFile $file)
    {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $fileName = $originalFilename.'-'.uniqid().'.'.$file->guessExtension();

        try {
            $file->move($this->imageCategoryDirectory, $fileName);
        } catch (FileException $e) {
            // ... handle exception if something happens during file upload
        }

        return $fileName;
    }
    public function deleteCategoryImageCard($fileName){
        $file_path = $this->imageCategoryDirectory.'/'.$fileName;
        if(file_exists($file_path)) unlink($file_path);
    }
}