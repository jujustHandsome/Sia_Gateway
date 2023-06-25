<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
public $timestamps=false;

protected $primaryKey = 'Account_number';
protected $table = 'customer';
// column sa table
protected $fillable = [
'Fullname','Balance','Transaction_number', 'Payment','Date'
];
}