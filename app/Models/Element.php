<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Element extends Model
{
    protected $fillable = [
        'nombre', 
        'descripcion', 
        'orden', 
        'program_id', 
        'element_type_id', 
        'specific_objective_id', 
        'sub_element_id', 
        'activity_id'
    ];

    public function program(): BelongsTo { return $this->belongsTo(Program::class); }
    public function elementType(): BelongsTo { return $this->belongsTo(ElementType::class); }
    public function specificObjective(): BelongsTo { return $this->belongsTo(SpecificObjective::class); }
    public function subElement(): BelongsTo { return $this->belongsTo(SubElement::class); }
    public function activity(): BelongsTo { return $this->belongsTo(Activity::class); }
}