<?php
return array(

	//'配置项'=>'配置值'
   'token' => '2fae188df0878bafcd73f16b1a8e0386',

    //云账号域名地址
    'cloud_url' => 'http://114.141.173.41:48080',//'https://accountsym.phicomm.com'
	//K码兑换H5
	'h5_client_id' => '1569234',
	'h5_client_secret' => '6FE32D94BE97DBB120E7B1C54FC0B239',
	//K码兑换WEB
	'web_client_id' => '4717383',
	'web_client_secret' => 'BC36FC28D4CCF1C204CB3A3BBFA83F3B',
    //授权码
    'cloud_authorization' => '/v1/authorization',
    //登录
    'cloud_login' => '/v1/login',
    //注册
    'cloud_account' => '/v1/account',
    //验证码
    'cloud_verificationCode' => '/v1/verificationCode',
    //忘记密码
    'cloud_forgetpassword' => '/v1/forgetpassword',
    //获取用户信息token->info
    'cloud_phonenumberInfo' => '/v1/phonenumberInfo',
    //验证token有效性
    'cloud_verifyToken' =>  "/v1/verifyToken",

    //云账号错误信息
    //0.表示成功；7.用户名不存在;8.密码错误;11.授权码错误，12. 参数错误；15. 密码未设置；30：多端登录账户被踢出；34.手机号格式错误；40.需要进行手机验证码验证 50.服务器异常;

    //商城api
    'mall_url' => 'http://mall.wzc.dev.wx-mall.xin:33092/openapi/vcprice/exchange',
    'mall_interface' => 'vmcshop_vcprice_interface',
    //推啥api……
    //以太星球
    'eth_url' => 'https://www.phi-block.com/api/',
    'eth_act' => 'cloud_star_points',
    'eth_md5_key' => '1wSn0kMbpxaDCx',
);