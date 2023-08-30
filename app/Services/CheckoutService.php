<?php
namespace App\Services;

use Illuminate\Http\Request;

interface CheckoutService {
    public function create(Request $request);
    public function getAll();
    public function changeStatusShip($id);
    public function findById($id);
    public function getSearchData($startData, $endData);

}
