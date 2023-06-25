<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
public $timestamps=false;

protected $primaryKey = 'Account_number';
protected $table = 'customer';
// column sa table
protected $fillable = [
'Fullname','Transaction_number','Account_number','Amount','Date','Mode_of_transaction','Transaction_fee'
];
}