<?php
namespace App\Http\Controllers\MainForm\Service;

use App\Http\Controllers\MainForm\Repository\FormRepository;
use Carbon\Carbon;

class FormService {

    private $formRepository;

    public function __construct(FormRepository $formRepository) {

        $this->formRepository = $formRepository;

    }

    public function createOrder($data) {

        try {
            $this->checkForm($data);

            $normal_data = $this->normalData($data);

            $response = $this->formRepository->create_order($normal_data);

            if ($response == 1) {
                return response()->json([
                    'message' => 'success'
                ], 200);
            }

        } catch (\Exception $e) {

            return response()
                ->json([
                'message' => $e->getMessage()
            ], 500);

        }
    }

    private function checkForm($data) {

        if (empty($data)) {
            throw new \Exception('Form is empty');
        }

        if (!$data['name']) {
            throw new \Exception('Name is required');
        }

        if (!$data['subject']) {
            throw new \Exception('Subject is required');
        }

        if (!$data['text']) {
            throw new \Exception('Text is required');
        }

    }

    private function normalData($data) {
        return [
            'name' => $data['name'],
            'subject' => $data['subject'],
            'text' => $data['text'],
            'date_pub' => Carbon::now()->format('Y-m-d H:i:s')
        ];
    }


}
