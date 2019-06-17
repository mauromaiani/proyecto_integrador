<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];

    public function profileImage(){
      $imagePath = ($this->image) ? $this->image : 'profile/iGOG5ib2gfa9YCLQSQXsANQ3jck5FRcSVqZeSWY8.png';
      return '/storage/' . $imagePath;
    }

    public function user(){
      return $this->belongsTo(User::class);
    }
}
