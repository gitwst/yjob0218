<?php
// $requestUrl = 'http://ac.yjob.net';
//$urls['httpClient']['jobList']['url'] = $requestUrl . '/job/list';
//$urls['httpClient']['jobList']['method'] = 'post';
//$urls['httpClient']['jobList']['charset'] = 'utf-8';
//$urls['httpClient']['jobInfo']['url'] = $requestUrl . '/job/info/103';
//$urls['httpClient']['jobInfo']['method'] = 'get';
//$urls['httpClient']['jobInfo']['charset'] = 'utf-8';


/*
*	封装路由规则
*	@param requestUrl string 接口http地址
*	@param funcData array 由接口方法和接口路径封装在请求方式中的二维数组
*	@param charset string 默认字符集
*	return array 返回由请求方式、请求地址、字符编码构成的数组
*/
function apiConfig($requestUrl, $funcData, $charset = 'utf-8'){
	$urls['httpClient'] = array();
	foreach($funcData as $k => $v){
		foreach($v as $funcKey => $pathValue){
			if($k == 'post'){
				$urls['httpClient'][$funcKey]['method'] = 'post';
			}else{
				$urls['httpClient'][$funcKey]['method'] = 'get';
			}
				$urls['httpClient'][$funcKey]['url'] = $requestUrl . $pathValue;
				$urls['httpClient'][$funcKey]['charset'] = $charset;
		}
	}
	return $urls;
}

/*
*	配置函数名，调用接口 ==> 构造路由
*	@param string 请求方式 ==> 接口路径
*/ 
$funcData = array(
	'post' => array(
		'jobClose' 				=> '/job/close',
		'jobDelete' 			=> '/job/delete',
		'jobRefresh' 			=> '/job/refresh',
		'jobCreate' 			=> '/job/create',
		'jobConfirm' 			=> '/job/confirm',
		'jobRvaluate' 			=> '/job/evaluate',
		'jobUpdate' 			=> '/job/update',
		'jobPast' 				=> '/job/past',
		'jobList' 				=> '/job/list',
		'jobAudit' 				=> '/job/audit',
		'jobSearch' 			=> '/job/search',
		'jobFavJob' 			=> '/job/favJob',
		'jobFavJobList' 		=> '/job/favJobList',
		'jobPastList' 			=> '/job/pastList',
		'jobAutoRefresh' 		=> '/job/autoRefresh',
		'jobFobStatistics' 		=> '/job/jobStatistics',
		'jobEvaluateInfo' 		=> '/job/evaluateInfo',
		/*
		 * Enroll 配置区
		 * */
		'enrollIsEnroll'   		=> '/enroll/isEnroll',
		'enrollUpdate'  		=> '/enroll/update',
		'enrollStood'  			=> '/enroll/stood',
		'enrollLeaveEarly'  	=> '/enroll/leaveEarly',
		'enrollStatus'  		=> '/enroll/status',
		'enrollAdd'  			=> '/enroll/add',
		'enrollEnrollCount' 	=> '/enroll/enrollCount',
		'enrollInfo'  			=> '/enroll/info',
		'enrollList'  			=> '/enroll/list',
		/*
		 * RedEnvelope 配置区
		 * */
		'redEnvelopeEdit'  		=> '/redEnvelope/edit',//修改红包
		'redEnvelopeCreate'  	=> '/redEnvelope/create',//创建红包
		'redEnvelopeDelete'     => '/redEnvelope/delete',//删除红包
		'redEnvelopeLootQueue'  => '/redEnvelope/lootQueue',//加入抢红包队列
		'redEnvelopeCheckStatus'=> '/redEnvelope/checkStatus',//检测抢红包结果
		'redEnvelopeList'       => '/redEnvelope/list',//红包列表
		'redEnvelopeStop'       => '/redEnvelope/stop',//红包暂停
		'redEnvelopeInfo'       => '/redEnvelope/info',//红包详情
		'redEnvelopeTakeList'   => '/redEnvelope/takeList',//红包领取列表
		
		/*
		 * User 配置区
		 * */
		'userAuthUser'  		=> '/user/authUser',
		'userUpdateIntention'  	=> '/user/updateIntention',
		'userRegister'  		=> '/user/register',
		'userAddIntention'  	=> '/user/addIntention',
		'userAddResume'  		=> '/user/addResume',
		'userLogin'  			=> '/user/login',
		'userThirdParty'  		=> '/user/thirdParty',
		'userResumeList'  		=> '/user/resumeList',
		'userReputation'  		=> '/user/reputation',
		'userIntentionInfo'  	=> '/user/intentionInfo',
		'userResumeInfo'  		=> '/user/resumeInfo',
		'userAuthUserList'  	=> '/user/authUserList',
		'userAuthVerify' 		=> '/user/authVerify',
		'userResetPassWd' 		=> '/user/resetPassWd',
		/*
		 * Sms 配置区
		 * */
		'smsSend'				=> '/sms/send',
		'smsCheck'				=> '/sms/check',
	),
	'get' => array(
		'jobInfo' 				=> '/job/info'
	)
);

$requestUrl = 'http://ac.yjob.net';
$urls = apiConfig($requestUrl, $funcData);
return $urls;