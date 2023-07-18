<?php
namespace App\Services;
use App\Repositories\PaymentRepository;

class PaymentDetailService implements IPaymentDetailService
{
    protected $paymentDetailRepository;
    public function __construct(PaymentRepository $paymentDetailRepository)
    {
        $this->paymentDetailRepository= $paymentDetailRepository;
    }

    public function create($data)
    {
        return $this->paymentDetailRepository->create($data);
    }

    public function update($id, $data)
    {
        // TODO: Implement update() method.
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }
}
