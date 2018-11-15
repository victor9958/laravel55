<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Maatwebsite\Excel\Facades\Excel;
use Spiral\Goridge\RPC;
use Spiral\Goridge\SocketRelay;

class TestController extends Controller
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
        phpinfo();
        die;

    	$rpc = new RPC(new SocketRelay("127.0.0.1",8085));

    	echo $rpc->call("App.Hi","Antony");
    }
}
