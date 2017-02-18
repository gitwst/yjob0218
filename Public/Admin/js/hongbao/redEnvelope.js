function redEnvelope(){
	var baifenbi = $('#yongjinpz').val();//百分比
	var maxTotal = 0;//最大极限和
	var minTotal = 0;//最小的金额*数量
	var minMoney = oneMoney[0];//最小金额
	var num ;
	var n = 0;//循环次数
//	最大极限和
	$('.twoMoney').each(
		function(){
			twoMoney = $(this).val();
			num = $(this).parent().next().find('.num').val();
			total = twoMoney*num;
			if(n==0){
				maxTotal = total;
			}else if(maxTotal<total){
				maxTotal = total;
			}
			n++;
		}
	);
//最小极限和
	$('.oneMoney').each(
		function(){
			oneMoney = $(this).val();
			num = $(this).parent().next().find('.num').val();
			total = oneMoney*num;
			if(n==0){
				minTotal = total;
			}else if(minTotal<total){
				minTotal = total;
			}
			n++;
		}
	);
//	最小金额
	$('.oneMoney').each(
		function(){
			oneMoney = $(this).val();
			for(var i = 1; i<oneMoney.length;i++){
				if(minMoney>oneMoney[i]){
					minMoney = oneMoney[i];
				}
			}
		}
	);
	
	
	
	
	


	
	
	
	
	var max = maxTotal*(1+baifenbi) - minMoney*baifenbi;
	
	return [max,minTotal];
}

 //计算天数差的函数，通用  
function  DateDiff(sDate1,  sDate2){    //sDate1和sDate2是2006-12-18格式
    var  aDate,  oDate1,  oDate2,  iDays  
    aDate  =  sDate1.split("-")  
    oDate1  =  new  Date(aDate[1]  +  '-'  +  aDate[2]  +  '-'  +  aDate[0])    //转换为12-18-2006格式  
    aDate  =  sDate2.split("-")  
    oDate2  =  new  Date(aDate[1]  +  '-'  +  aDate[2]  +  '-'  +  aDate[0])  
    iDays  =  parseInt(Math.abs(oDate1  -  oDate2)  /  1000  /  60  /  60  /24)    //把相差的毫秒数转换为天数  
    return  iDays
}


var hongbao_start_date = $('#hongbao_start_date').val();
var hongbao_end_date = $('#hongbao_end_date').val();
var res = DateDiff(hongbao_start_date, hongbao_end_date);//时间差

//最小金额


//var oneMoney = $('.oneMoney').val();
//var twoMoney = $('.twoMoney').val();
//var num = $('.num').val();



//$('.oneMoney').each(
//	function(){
//		alert($(this).val());
//	}
//);
$(function(){
	$('.hongbao-btn').click(function(){
//		alert(1);
		redEnvelope();
	})
})


//$('#yongjinpz').blur(
//	function(){
//		alert($('#yongjinpz').val());
//	}
//);

//$('#hongbao_end_date').blur(
//	function(){
//		$("#hongbao_end_date").val();
//	}
//);
//
//
//$('#hongbao_start_date').blur(
//	function(){
//		$("#hongbao_start_date").val();
//	}
//);





//最大支出算法:：[最大极限和]*（1+百分比）-最小金额*（百分比）