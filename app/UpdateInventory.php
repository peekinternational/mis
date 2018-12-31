<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpdateInventory extends Model
{
    public $fillable = ['PurchaseDate', 'articleName', 'rate', 'quantity', 'price', 'purchasedOut', 'headofAC', 'receivingSign', 'remarks', 'principalSign', 'requisitionDetail', 'billPassing', 'adddeleteStock', 'itemIssued'];
}
