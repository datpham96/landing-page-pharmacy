<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MyModel;

class LayerModel extends MyModel
{
    protected $table = 'layer';

    //filter by id
    public function filterId($id){
        if(!empty($id)){
            $this->setFunctionCond('where', ['id', $id]);
        }
        
        return $this;
    } 

    //filter by type
    public function filterType($type){
        if(!empty($type)){
            $this->setFunctionCond('where', ['type', $type]);
        }
        
        return $this;
    }
}
