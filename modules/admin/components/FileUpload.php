<?php
namespace app\modules\admin\components;

use yii\base\Object;
use app\modules\admin\components\SimpleImage;

class FileUpload extends Object
{
    public static function uploadImage($folder = '.', $name = 'image', $config)
    {
        // Check
        if (!isset($_FILES[$name]) || !$_FILES[$name]['name']) {
            return false;
        }

        $parameter = require_once '../config/images.php';


        // Set params
        $ext = end(explode('.', $_FILES[$name]['name']));
        $filename = md5($_FILES[$name]['name'] . '_' . time()) . '.' . $ext;

        foreach ($parameter[$config] as $one) {
            $current = $folder . '/' . $one['path'];
            $file = $folder . '/' . $one['path'] . '/' . $filename;
            FileUpload::createFolder($current);

            // Crop
            if ($one['resize']) {
                $image = new SimpleImage();
                $image->load($_FILES[$name]['tmp_name']);
                $image->resize($one['width'], $one['height']);
                $image->save($file);
            } else {
                $image = new SimpleImage();
                $image->load($_FILES[$name]['tmp_name']);
                $image->save($file);
            }

        }

        // изменить размеры изображения, основываясь только на ширине
        //$image->resizeToWidth(250);
        // изменить изображение в процентном соотношении
        //$image->scale(50);

        return $filename;
    }

    public static function createFolder($path, $mode = 0777)
    {
        if (is_dir($path)) {
            return true;
        }
        if (!mkdir($path, $mode, true)) {
            return false;
        }
        @chmod($path, $mode);
        return true;
    }

}