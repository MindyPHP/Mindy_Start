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
 * @date 27/10/15 10:17
 */
namespace Modules\Blog\Controllers;

use Modules\Blog\Models\Post;
use Modules\Core\Controllers\CoreController;

class BlogController extends CoreController
{
    public function actionIndex()
    {
        $lastPosts = Post::objects()->filter([
            'status' => Post::STATUS_PUBLISHED
        ])->order(['-created_at'])->limit(3)->all();

        echo $this->render('blog/index.html', [
            'last_posts' => $lastPosts
        ]);
    }

    public function actionView($slug)
    {
        $post = $this->getOr404(new Post(), ['slug' => $slug]);

        echo $this->render('blog/view.html', [
            'post' => $post
        ]);
    }
}