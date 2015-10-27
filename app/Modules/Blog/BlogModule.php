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
 * @date 23/10/15 14:03
 */
namespace Modules\Blog;

use Mindy\Base\Module;

class BlogModule extends Module
{
    public function getMenu()
    {
        return [
            'name' => $this->getName(),
            'items' => [
                [
                    'name' => BlogModule::t('Posts'),
                    'adminClass' => 'PostAdmin'
                ]
            ]
        ];
    }
}
