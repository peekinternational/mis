<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcurementDocumnt extends Model
{
    public $fillable = ['demand', 'description', 'tender', 'quotationComparison', 'finalizedQuotation', 'amount', 'advancePayment', 'deliveryDate', 'invoiceNo', 'finalPayment', 'cashReceiptNo'];
}
