<?php namespace Tipoff\Scheduling\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Tipoff\Support\Models\BaseModel;

class Hold extends BaseModel
{
    use HasFactory;

    // find the slot
    public function slot()
    {
        return $this->belongsTo(config('tipoff.model_class.slot'), 'slot_id');
    }

    // find the creator
    public function creator()
    {
        return $this->belongsTo(config('tipoff.model_class.user'), 'creator_id');
    }
}
