<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Role extends Model {


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Roles';

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
    public function getAllRoles() {
        return  Role::where('is_removed', 0)->orderBy('id','ASC')->get()->toArray();
    }

}

