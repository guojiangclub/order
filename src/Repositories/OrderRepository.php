<?php

/*
 * This file is part of ibrand/order.
 *
 * (c) iBrand <https://www.ibrand.cc>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace iBrand\Component\Order\Repositories;

use iBrand\Component\Order\Models\Order;
use Prettus\Repository\Contracts\RepositoryInterface;

interface OrderRepository extends RepositoryInterface
{
    /**
     * 根据订单编号获得订单数据.
     *
     * @return Order
     */
    public function getOrderByNo($no);

    public function getOrderByStatus($input, $user_id);

    public function getOrdersByConditions($orderConditions, $itemConditions, $limit = 15, $withs = ['items']);

    public function getOrdersByCriteria($andConditions, $orConditions, $limit = 15);

    /**
     * 根据状态和用户获取订单的数量.
     *
     * @param $user_id
     * @param $status
     *
     * @return mixed
     */
    public function getOrderCountByUserAndStatus($user_id, $status);
}
