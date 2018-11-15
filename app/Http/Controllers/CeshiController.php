<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Maatwebsite\Excel\Facades\Excel;
class CeshiController extends Controller
{
    /*public function ceshi(){
    	// echo 111;
    	//die();
    	 $cellData = [
            ['学号','姓名','成绩'],
            ['10001','AAAAA','99'],
            ['10002','BBBBB','92'],
            ['10003','CCCCC','95'],
            ['10004','DDDDD','89'],
            ['10005','EEEEE','96'],
        ];
        \Excel::create('学生成绩',function($excel) use ($cellData){
            $excel->sheet('score', function($sheet) use ($cellData){
                $sheet->rows($cellData);
            });
        })->download('xls');
    }*/

    public function ceshi(Request $request){
    	// echo 111;
    	//die();
        if(!Redis::exists('648'))
        {
            var_dump(Redis::hSet('648',111,1));
            var_dump(Redis::hGet('648',111));
        }else{
            var_dump(Redis::hSet('648',111,1));
        }
        die;
        Redis::set('aaaaaaa',5555);
        echo Redis::get('aaaaaaa');
        die;
        $redisModel  = new Redis();
        $redisModel->set("mango_aa",'jibufan');
        echo  $redisModel->get("mango_aa");
        echo $request->getClientIp();
        echo $request->input('aa');
        var_dump($request->all());
        //echo $request->input('bb');
    echo 9999;;
    die;
    }
}
