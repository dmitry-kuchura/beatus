<?php
namespace app\modules\admin\components;

use yii\base\Object;
use app\modules\admin\components\SimpleImage;

class FileUpload extends Object
{
    public static function uploadImage($folder = '.', $name = 'image')
    {
        // Check
        if (!isset($_FILES[$name])) {
            return false;
        }
        // Set params
        $ext = end(explode('.', $_FILES[$name]['name']));
        $filename = md5($_FILES[$name]['name'] . '_' . time()) . '.' . $ext;
        // Create path
        $file = $folder . '/' . $filename;

        $image = new SimpleImage();
        $image->load($_FILES[$name]['tmp_name']);

        // изменить ширину до 400 пикселей и высоту до 200
        //$image->resize(400, 200);
        // изменить размеры изображения, основываясь только на ширине
        //$image->resizeToWidth(250);
        // изменить изображение в процентном соотношении
        //$image->scale(50);

        $image->save($file);

        return $filename;
    }

}