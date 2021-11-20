<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoldItem;

class SoldItemController extends Controller
{
    //
    public function index(){
        $items = SoldItem::join('sale', 'sale.id', '=', 'sold_item.sale_id')->orderBy('sale_date','desc')->get();
        return response()->json($items);
    }
}
