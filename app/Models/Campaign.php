<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campaign extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name',
        'campaign_name',
        'campaign_time',
        'campaign_type',
        'social_type',
        'fil',
        'campaign',
        'user_id',
        'catalog_id'
    ];

    public function facebookPost()
    {
        return $this->hasOne(FaceBookPost::class);
    }
    public function post()
    {
        return $this->hasOne(FaceBookPost::class);
    }
    public function productAssign(){
        return $this->hasMany(CampaignProductAssignment::class);
    }
    public function comments(){
        return $this->hasMany(FaceBookPostComments::class);
    }

}
