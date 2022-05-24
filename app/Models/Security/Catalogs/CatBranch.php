<?php

namespace App\Models\Security\Catalogs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatBranch extends Model
{
    use HasFactory;
    protected $table = "tblCatBranch";
    public $timestamps = false;
    protected $primaryKey = 'dblCatBranch';

    public function getMethod()
    {
        return $this->dblCatBranch ? 'put' : 'post';
    }

    public function getUrl()
    {
        return $this->dblCatBranch ? 'edit' : 'create';
    }
}
