<?php
namespace App\Http\Controllers\OrderList;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\OrderList\Service\OrderListService;

class OrderList extends Controller {

    private $orderListService;

    public function __construct(OrderListService $orderListService) {

        $this->orderListService = $orderListService;

    }

    public function get() {

        return $this->orderListService->getOrders();
    }
}
