<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class SubRole extends Model {


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'SubRoles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * getParentCategories method get all the categories
     * @param type $searchText
     * @return collection
     */
    public function getAllSubRoles() {
        return SubRole::where('is_removed', 0)->with('roles')->orderBy('id','DESC')->get()->toArray();
    }

    public function roles() {
        return $this->belongsTo('App\Models\Role', 'role_id', 'id');
    }

    

}

