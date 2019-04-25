<?php

/*
 * This file is part of ibrand/order.
 *
 * (c) iBrand <https://www.ibrand.cc>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace iBrand\Component\Order\Repositories\Eloquent;

use iBrand\Component\Order\Models\Comment;
use iBrand\Component\Order\Repositories\CommentRepository;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Traits\CacheableRepository;

class CommentRepositoryEloquent extends BaseRepository implements CommentRepository
{
    use CacheableRepository;

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return Comment::class;
    }

    /**
     * get recommend comments by item id.
     *
     * @param $itemId
     *
     * @return mixed
     */
    public function getRecommendByItem($itemId)
    {
        return $this->findWhere(['item_id' => $itemId, 'recommend' => 1]);
    }
}
