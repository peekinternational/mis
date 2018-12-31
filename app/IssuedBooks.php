<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IssuedBooks extends Model
{
    public $fillable = ['bookTitle', 'authorName', 'accessionNo', 'issueDate', 'borrowerCardNo', 'borrowerSign', 'returnDate', 'renewalDate', 'librarianSign', 'delayedDays', 'fine', 'receiptNo', 'librarianInitials'];
}
