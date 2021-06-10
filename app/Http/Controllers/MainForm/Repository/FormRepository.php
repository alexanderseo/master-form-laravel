<?php
namespace App\Http\Controllers\MainForm\Repository;

use Illuminate\Support\Facades\DB;

class FormRepository {

    private $db;

    public function __construct(DB $db) {

        $this->db = $db;

    }

    public function create_order($data) {

        $name = $data['name'];
        $subject = $data['subject'];
        $description = $data['text'];
        $date_pub = $data['date_pub'];

        return $this->db::insert("INSERT INTO tbl_form (name, subject, description, date_pub) VALUES (?, ?, ?, ?)", [$name, $subject, $description, $date_pub]);
    }
}
