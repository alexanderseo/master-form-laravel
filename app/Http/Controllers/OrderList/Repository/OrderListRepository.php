<?php
namespace App\Http\Controllers\OrderList\Repository;

use Illuminate\Support\Facades\DB;

class OrderListRepository {

    private $db;

    public function __construct(DB $db) {

        $this->db = $db;

    }

    public function get_orders() {

        return $this->db::select("SELECT * FROM tbl_form");
    }

}
