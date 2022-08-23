<?php

namespace App\Models\Rmodel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    public $timestamps = true;//created_at e update_at (gravar data de criação)
    public $incrementing = true;
    protected $fillable = [];
    public function beforesave(){
        return true;
    }



    public function save(array $options = [])
    {
        if(!$this->beforesave()){
            return false;
        }
        try{
            return parent::save($options);
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

}
