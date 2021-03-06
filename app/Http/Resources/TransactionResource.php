<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "transaction_id" => $this->id,
            "amount" => $this->amount,
            "created_at" => $this->created_at->format('Y-m-d'),

        ];
    }
}
