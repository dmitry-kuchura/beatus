<?php use yii\helpers\Url;
use yii\helpers\Html; ?>
<div class="news">
    <div class="wSize">
        <div class="title_block">
            <div class="title_small _white">Новости</div>
            <div class="title_big _white">Актуально</div>
        </div>
        <div class="news_list w_clearfix">
            <?php if ($result): ?>
                <?php foreach ($result as $obj): ?>
                    <div class="news_item">
                        <div class="news_item_wrap">
                            <div class="news_item_container">
                                <?php if (is_file(HOST . Url::to('/image/news/main/' . $obj['image']))): ?>
                                    <?php $image = Html::img(Url::to('/image/news/main/' . $obj['image']), ['alt' => '']); ?>
                                    <?php $imagePopUp = Url::to('/image/news/original/' . $obj['image']); ?>
                                <?php else: ?>
                                    <?php $image = Html::img(Url::to('/pic/no-news.png'), ['alt' => '']); ?>
                                    <?php $imagePopUp = Url::to('/pic/no-news-popup.png'); ?>
                                <?php endif; ?>
                                <?php echo $image; ?>
                                <div class="news_item_inner">
                                    <div class="category_date">
                                        <div class="category">новости</div>
                                        <span>/</span>
                                        <div class="date"><?php echo date('d/m/Y', $obj->date); ?></div>
                                        <?php $from = ['p class="text-justify"', '\n', chr(10), chr(13), 'style="text-align: right;"', 'style="text-align: center;"', 'style="text-align: justify;"']; ?>
                                        <?php $to = ['p', '', '', '']; ?>
                                        <?php $text = strip_tags($obj->text, '<p></p>'); ?>
                                        <div data-markup='{"category":"<?php echo 'Новости'; ?>",
                                            "date":"<?php echo date('d/m/Y', $obj->date); ?>",
                                            "prev":"<?php echo 'Предыдущая новость'; ?>",
                                            "next":"<?php echo 'Следующая новость'; ?>",
                                            "name": "<?php echo $obj->name; ?>",
                                            "share":"<?php echo 'Поделиться'; ?>",
                                            "img":["<?php echo $imagePopUp; ?>"],
                                            "text":"<?php echo str_replace($from, $to, $text); ?>",
                                            "id":"<?php echo $obj->id; ?>"}'
                                             class="news_name mfiN"><?php echo $obj->name; ?></div>
                                    </div>
                                </div>
                                <div class="news_soc">
                                    <span>Поделиться</span>
                                    <a href="#" target="_blank" class="pop_face">
                                        <svg>
                                            <use xlink:href="#icon_face"/>
                                        </svg>
                                    </a>
                                    <a href="#" target="_blank" class="pop_twit">
                                        <svg>
                                            <use xlink:href="#icon_twit"/>
                                        </svg>
                                    </a>
                                    <a href="#" target="_blank" class="pop_google">
                                        <svg>
                                            <use xlink:href="#icon_google"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="upload_more_block">
            <input type="hidden" class="pageNews" value="1">
            <div class="upload_more"><span class="moreNews">Загрузить еще</span></div>
        </div>
    </div>
</div>