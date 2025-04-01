<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BusinessHourResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'day' => $this->day,
            'isOpen' => $this->is_open,
            'openAt' => $this->open_at,
            'closeAt' => $this->close_at,
            'lunchStart' => $this->lunch_start,
            'lunchEnd' => $this->lunch_end,
            'isEveryOtherWeek' => $this->is_every_other_week,
            'otherWeekStartDate' => $this->other_week_start_date,
        ];
    }
}
