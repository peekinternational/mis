<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookList extends Model
{
    public $fillable = ['date', 'bookTitle', 'authorName', 'publisherAddress', 'publishDate', 'totalPages', 'price', 'sellerName', 'ISBN', 'remarks', 'description', 'membershipRecord', 'totalBooks'];
}
