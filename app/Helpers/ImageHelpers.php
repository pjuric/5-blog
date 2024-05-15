<?php

namespace App\Helpers;

use SplFileInfo;
use GuzzleHttp\Exception\InvalidArgumentException;

class ImageHelpers
{
    /**
     * Resize image using gd php extension.
    */
    public function resizeImage(SplFileInfo $imageFile, string $imagePath, int $width, int $height): void
    {
        $imageType = exif_imagetype($imageFile->getRealPath());

        switch ($imageType) {
            case IMAGETYPE_JPEG:
                $sourceImage = imagecreatefromjpeg($imageFile->getRealPath());
                break;
            case IMAGETYPE_PNG:
                $sourceImage = imagecreatefrompng($imageFile->getRealPath());
                break;
            case IMAGETYPE_GIF:
                $sourceImage = imagecreatefromgif($imageFile->getRealPath());
                break;
            default:
                throw new InvalidArgumentException(__('validation.resize_image_type_error', ['type' => $imageType]));
        }

        $resizedImage = imagecreatetruecolor($width, $height);

        imagecopyresampled($resizedImage, $sourceImage, 0, 0, 0, 0, $width, $height, imagesx($sourceImage), imagesy($sourceImage));
        imagejpeg($resizedImage, $imagePath, 80);
    }
}
