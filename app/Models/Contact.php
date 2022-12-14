<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'company', 'message', 'status'];

    public function scopeFilter($query, array $filters) {

        if(($filters['filter-date1'] ?? false)
            || ($filters['filter-date2'] ?? false)
            || ($filters['filter-name'] ?? false)
            || ($filters['filter-email'] ?? false)
            || ($filters['filter-company'] ?? false)
            || ($filters['filter-status'] ?? false))
        {
        
            if(request('filter-date1') && request('filter-date2')) {
                $query = $query->whereBetween('date', [request('filter-date1'), request('filter-date2')]);
            }

            if(request('filter-name')) {
                $query = $query->where('name', 'like', '%' . request('filter-description') . '%');
            }

            if(request('filter-email')) {
                $query = $query->where('email', 'like', '%' . request('filter-description') . '%');
            }

            if(request('filter-company')) {
                $query = $query->where('company', 'like', '%' . request('filter-description') . '%');
            }

            if(request('filter-status')) {
                $query = $query->where('status', 'like', '%' . request('filter-description') . '%');
            }
        }
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
