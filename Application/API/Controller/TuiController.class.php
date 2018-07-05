<?php

namespace API\Controller;

use Think\Controller;
use API\Common\Curl;
use API\Controller\BaseController;
/**
 * 推啥接口返回
 * 
 * @author yzw
 *
 */
class TuiController extends Controller
{
    /**
    $arr["channel"]="TUI";
    $arr["cksSnsNo"]=md5("V83xkje3");
    $arr["diamondValue"]=400;
    $arr["kcode"]="V83xkje3";
    $arr["kcodeValue"]=399;
    $arr["mobile"]="17717689858";
    $arr["token"]="PHICOMMCKS2018";
    $arr["rate"]=1;
    $arr["exratio"]=1.1;
    $arr["timeStamp"]=$time=time();
     */
    public function index($channel="TS",$kcode="V83xkje3",$mobile="17717689858",$exratio=1.1,$rate=1){
        $url="http://172.17.44.98:8082";
        $where["secretcd"]=$kcode;
        $where["status"]=1;
        $money=M("relation")->where($where)->getField("money");
        $arr["channel"]="1-2";
        $arr["cksSnsNo"]=md5($kcode);
        $arr["diamondValue"]=$dhtotal=number_format(round($money*$exratio,2),2);
        $arr["kcode"]=$kcode;
        $arr["kcodeValue"]=$money;
        $arr["mobile"]=$mobile;
        $arr["token"]="PHICOMMCKS2018";
        $arr["rate"]=1;
        $arr["exratio"]=1.1;
        $arr["timeStamp"]=$time=time();
        ksort($arr);
        $sign=strtoupper(md5(sha1(http_build_query($arr))));
        $arr["signature"]=$sign;
        unset($arr["token"]);
        $result_str=Curl::curl_post($url,$arr);
        file_put_content("./Application/Runtime/test.txt",$result_str);
        $result_arr=json_decode($result_str,true);
        if($result_arr["err"]>0){
            return array('status'=>false,"message"=>"请求推啥失败,请检查原因");
        }else{
            //插入兑换记录数据库
            $lastreturntime=date("Y-m-d H:i:s",$result_arr["data"]["lastReturnTime"]);
            //$result_status=CommonController::ChangeLog($kcode,$rate,$dhtotal,$mobile,1,"1-2",$exratio,$lastreturntime);

            return array("status"=>true,"last_return_time"=>$lastreturntime);

        }


    }

    public function say(){
        echo "hello world";
    }


}


