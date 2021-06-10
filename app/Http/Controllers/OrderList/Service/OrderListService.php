<?php
namespace App\Http\Controllers\OrderList\Service;

use App\Http\Controllers\OrderList\Repository\OrderListRepository;

class OrderListService {

    private $orderListRepository;

    public function __construct(OrderListRepository $orderListRepository) {

        $this->orderListRepository = $orderListRepository;

    }

    public function getOrders() {

        return $this->orderListRepository->get_orders();
    }
}
