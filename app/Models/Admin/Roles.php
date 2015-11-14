<?php
namespace App\Models\Admin;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
class Roles extends Model{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['role_desc', 'is_valid', 'created_by','updated_by'];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['role_id', 'created_at', 'updated_at'];
}