<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hyip extends Model
{
    use HasFactory;
    protected $fillable = [
        'link',
        'amount',
        'rcb_first',
        'rcb_second',
        'daily',
        'withdraw_1_time',
        'working_day', 'fee', 'rcb_ok'];

    public function addHyip($request)
    {
        $data = [];
        foreach ($request as $key => $value) {
            if ($key !== '_token') {
                $data[$key] = $value;
            }
        }
        $this->create($data);
    }
}
