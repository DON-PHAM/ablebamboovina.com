<?php

namespace App\Repositories;

use App\Models\Ship;
use App\Models\ShipTranslate;
use App\Services\IShipService;

class ShipRepository implements IShipService
{
    protected $ship;
    protected $shipTranslate;

    public function __construct(Ship $ship, ShipTranslate $shipTranslate)
    {
        $this->ship = $ship;
        $this->shipTranslate = $shipTranslate;
    }

    public function getById($id)
    {
        return $this->ship->with('translates')->find($id);
    }

    public function create($data)
    {
        $ship = [
            'status' => $data->status == 'on' ? 1 : 0,
            'price' => $data->price,
            'price_free' =>$data->price_free,
            'code' => $data->code
        ];
        $result = $this->ship->create($ship);
        $languages = ['ko','vi'];
        foreach ($languages as $language)
        {
            $shipTranslate = [
                'name' => $data->{$language.'_name'},
                'languageid' => $language,
                'shipid' => $result->id
            ];
            $this->shipTranslate->create($shipTranslate);
        }
        return $result;
    }

    public function update($id, $data)
    {
        $result = $this->ship->find($id);
        $ship = [
            'status' => $data->status == 'on' ? 1 : 0,
            'price' => $data->price,
            'price_free' =>$data->price_free,
            'code' => $data->code
        ];
        $result->update($ship);

        $languages = ['ko','vi'];
        foreach ($languages as $language)
        {
            $shipTranslate = [
                'name' => $data->{$language.'_name'},
                'languageid' => $language,
                'shipid' => $id
            ];
            $resultTranslate = $this->shipTranslate->where('languageid',$language)->where('shipid',$id)->first();
            $resultTranslate->update($shipTranslate);
        }
        return $result;
    }

    public function getAll($locale)
    {
        return $this->ship->with(['translate' => function ($query) use ($locale) {
                $query->where('languageid', $locale);
            }])->paginate(15);
    }

    public function delete($id)
    {
        $result = $this->ship->find($id);
        if (!$result)
            return response()->json(['status'=>false]);
        $result->translates()->delete();
        $result->delete();
        return response()->json(['status'=>true]);
    }
}
