<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $fillable = ['name', 'email', 'active'];

    public function getResults($data, $total){

        if(!isset($data['filter']) && !isset($data['name']) && !isset($data['email']) &&!isset($data['active'])){
            return $this->paginate($total);
        }

        return $this->where(function ($query) use($data) {
            if(isset($data['filter'])) {
               $filter = $data['filter']; 
               $query->where('name',$filter);
               $query->orWhere('description','LIKE',"%{$filter}%");
               $query->orWhere('active','=',"$filter");
            }

            if(isset($data['name'])){
                $query->where('name',$data['name']);
            }

            if(isset($data['email'])) {
                $email = $data['email'];
                $query->where('email','LIKE',"%{$email}%");
            }

            if(isset($data['active'])) {
                $query->where('active','=',$data['active']);
            }
        })
        ->paginate($total);
     
    }

}
