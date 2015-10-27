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
 * @date 23/10/15 14:13
 */
namespace Modules\Blog\Admin;

use Modules\Admin\Components\ModelAdmin;
use Modules\Blog\Models\Post;
use Modules\Blog\BlogModule;

class PostAdmin extends ModelAdmin
{
    public function getColumns()
    {
        return ['name'];
    }
    
    public function getModel()
    {
        return new Post;
    }
    
    public function getNames($model = null)
    {
        return [
            BlogModule::t('Posts'),
            BlogModule::t('Create Post'),
            BlogModule::t('Update Post')
        ];
    }
}