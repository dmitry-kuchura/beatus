<?php
namespace app\components;

use yii\base\Widget;
use yii\db\Query;

class Footer extends Widget
{

    public function init()
    {
        parent::init();
        ob_start();
    }

    public function run()
    {
        ob_get_clean();

        // Copyright
        $query = new Query;
        $query->select('val')
            ->from('config')
            ->where(['data' => 'copyright']);
        $copyright = $query->one();

        return $this->render('footer', ['copyright' => $copyright['val']]);
    }
}