<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $table = 'menu_items';
    protected $guarded = 'id';

    public function children()
    {
        return $this->hasMany(MenuItem::class,'parent_id','id');
    }
}
