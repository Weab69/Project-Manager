<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
            'name' => $this->name,
            'description' => $this->description,
            'due_date' => (new Carbon($this->due_date))->format('Y-m-d'),
            'status' => $this->status,
            'image_path' => $this->image_path,
            'created_by' => is_int($this->created_by) ? new UserResource(User::find($this->created_by)) : new UserResource($this->created_by),
            'updated_by' => is_int($this->updated_by) ? new UserResource(User::find($this->updated_by)) : new UserResource($this->updated_by),
            'created_at' => (new Carbon($this->created_at))->format('Y-m-d'),
        ];
    }
}
