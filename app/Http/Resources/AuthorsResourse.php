<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AuthorsResourse extends JsonResource
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
            'id'=>(string)$this->id,
            'type'=>'Author',
            'attributes'=>[
                'name'=>$this->name,
                'books'=>$this->books,
                'crated_at'=>$this->created_at,
                'updated_at'=>$this->updated_at
            ]
        ];
    }
}
