<?php
namespace App\Http\Controllers\MainForm;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MainForm\Service\FormService;
use Illuminate\Http\Request;

class MainForm extends Controller {

    private $formService;

    public function __construct(FormService $formService) {

        $this->formService = $formService;

    }

    public function writeOrder(Request $request) {

        return $this->formService->createOrder($request->input());
    }
}
