<?php
/**
 *
 *
 * All rights reserved.
 *
 * @author Okulov Anton
 * @email qantus@mail.ru
 * @version 1.0
 * @company Studio107
 * @site http://studio107.ru
 * @date 23/10/15 14:05
 */
namespace Modules\Blog\Models;

use Mindy\Orm\Fields\CharField;
use Mindy\Orm\Fields\DateTimeField;
use Mindy\Orm\Fields\IntField;
use Mindy\Orm\Fields\SlugField;
use Mindy\Orm\Fields\TextField;
use Mindy\Orm\Model;
use Modules\Blog\BlogModule;

class Post extends Model
{
    const STATUS_PUBLISHED = 1;
    const STATUS_HIDDEN = 2;

    public static function getFields()
    {
        return [
            'name' => [
                'class' => CharField::className(),
                'verboseName' => BlogModule::t('Posts')
            ],
            'slug' => [
                'class' => CharField::className(),
                'unique' => true,
                'required' => true,
                'verboseName' => BlogModule::t('Slug')
            ],
            'content' => [
                'class' => TextField::className(),
                'verboseName' => BlogModule::t("Content")
            ],
            'status' => [
                'class' => IntField::className(),
                'verboseName' => BlogModule::t('Status'),
                'choices' => [
                    self::STATUS_PUBLISHED => BlogModule::t("Published"),
                    self::STATUS_HIDDEN => BlogModule::t("Hidden")
                ]
            ],
            'created_at' => [
                'class' => DateTimeField::className(),
                'autoNowAdd' => true,
                'editable' => false,
                'verboseName' => BlogModule::t("Created at")
            ],
        ];
    }
    
    public function __toString() 
    {
        return (string) $this->name;
    }

    public function getAbsoluteUrl()
    {
        return $this->reverse('blog:view', ['slug' => $this->slug]);
    }
} 