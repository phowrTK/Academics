<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\level;
use App\category;
use App\course;
use App\tracnghiem;
use App\dapan;
use App\cauhoi;


class ajaxController extends Controller
{
    public function getlevel($idcategory)
    {

        $level = level::where('idcategory', $idcategory)->get();
        foreach($level as $lv){

            echo "<option value='".$lv->idlevel."'>".$lv->namelevel."</option>";

        }

    }


    // public function getcauhoi($idtn)
    // {


    //     for($i=0;$i<$tracnghiem->count();$i++){
    //         $cauhoi = cauhoi::where('idtn',$tracnghiem[$i]->idtn)->get();
    //     }
    //     foreach($cauhoi as $ch){

    //         echo "<p>".$ch->noidung."</p>";

    //     }

    // }
}
?>
