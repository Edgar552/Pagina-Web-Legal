<?php

namespace App; 


use Illuminate\Database\Eloquent\Model;

class BlogEstudioModel extends Model
{


public function getRouteKeyName()
 {

 	return 'url_blog';

 }
    protected $table='blog_estudio';

    protected $primaryKey='id_blog';

    protected $guarded=[]; //PARA DESHABILITAR LA SEGURIDAD DE LARAVEL Y HACER EFECTIVA LA FUNCION "VALIDATED "  EN EL CONTROLADOR





}
