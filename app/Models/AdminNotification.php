<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminNotification extends Model
{
    use HasFactory;

    protected $fillable = ['message', 'company_ids'];

    protected $casts = [
        'company_ids' => 'array',
    ];
}
