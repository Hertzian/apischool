<?php

namespace App\Http\Resources\client;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->name,
            'name' => $this->name,
            'surname' => $this->surname,
            'lastsurname' => $this->lastsurname,
            'email' => $this->email,
            'access_token' => $this->access_token
        ];
    }
}
