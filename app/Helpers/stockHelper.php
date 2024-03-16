<?php

namespace App\Helpers;

use DB;
use App\Models\Stock;
use App\Helpers\flashHelper;

class stockHelper {

    public static function createStock($data)
    {
        try {
            DB::transaction(function () use ($data) {
                $stock = new Stock;
                $stock->name = $data['name'];
                $stock->current_price = $data['current_price'];
                $stock->available_units = $data['available_units'];
                $stock->save();
            });

            flashHelper::success("Stock created successfully!");
            return true;

        } catch(\Exception $e) {
            dd($e->getMessage());
            flashHelper::error("Error occured while saving!");
            return false;
        }

    }

    public static function updateStock($data, $id)
    {
        try {
            DB::transaction(function () use ($data, $id) {
                $stock = Stock::find($id);
                $stock->name = $data['name'];
                $stock->current_price = $data['current_price'];
                $stock->available_units = $data['available_units'];
                $stock->save();
            });

            flashHelper::success("Stock updated successfully!");
            return true;

        } catch(\Exception $e) {
            dd($e->getMessage());
            flashHelper::error("Error occured while updating!");
            return false;
        }

    }

}
