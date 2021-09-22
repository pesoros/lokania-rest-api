<?php namespace App\Controllers\API\v1;
 
use CodeIgniter\RESTful\ResourceController;
 
class HomeController extends ResourceController
{
    protected $format       = 'json';
    // protected $modelName    = 'App\Models\Category_model';
 
    public function index()
    {
        $result = [];
        $result[] = "Pesoros X Lokania";
        return $this->respond($result, 200);
    }
}