<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML><html lang="en-US">
 <head>
   <meta charset="UTF-8">
   <title><?php echo ($vote["title"]); ?></title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <meta name="apple-mobile-web-app-capable" content="yes">
   <meta name="apple-mobile-web-app-status-bar-style" content="black">
   <meta name="format-detection" content="telephone=no">
   <meta name="description" content="<?php echo ($vote["title"]); ?>">
   <script src="<?php echo STATICS;?>/vote/wap/jquery.js" type="text/javascript"></script>
   <script src="<?php echo STATICS;?>/vote/wap/js/index.js" type="text/javascript"></script>
   <link href="<?php echo STATICS;?>/vote/wap/css/bootstrap.min.css" rel="stylesheet"  media="all">
   <link href="<?php echo STATICS;?>/vote/wap/css/style_2.css" rel="stylesheet"  media="all">
   <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript">
    // 对浏览器的UserAgent进行正则匹配，不含有微信独有标识的则为其他浏览器
    // var useragent = navigator.userAgent;
    // if (useragent.match(/MicroMessenger/i) != 'MicroMessenger') {
        // // 这里警告框会阻塞当前页面继续加载
        // alert('已禁止本次访问：您必须使用微信内置浏览器访问本页面！');
        // // 以下代码是用javascript强行关闭当前页面
        // var opened = window.open('about:blank', '_self');
        // opened.opener = null;
        // opened.close();
    // }
    wx.config({
	    debug: true, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
	    appId: '<?php echo $appId ?>', // 必填，公众号的唯一标识
	    timestamp: '<?php echo $timestamp ?>', // 必填，生成签名的时间戳
	    nonceStr: '<?php echo $nonceStr ?>', // 必填，生成签名的随机串
	    signature: '<?php echo $signature ?>',// 必填，签名，见附录1
	    jsApiList: ['onMenuShareTimeline'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
	});
	 wx.ready(function () {
        wx.onMenuShareTimeline({
            title: '<?php echo ($vote["title"]); ?>', // 分享标题
            link: 'http://fzw.pdfcword.cn/two/index.php?g=Wap&m=Vote&a=index&token=vjcbgt1414375209&tid=18', // 分享链接,将当前登录用户转为puid,以便于发展下线
            imgUrl: 'http://fzw.pdfcword.cn/two/images/menu_1.png', // 分享图标
            success: function () { 
                // 用户确认分享后执行的回调函数
                $('.ale_div').show();
            },
            cancel: function () { 
                // 用户取消分享后执行的回调函数
                //alert(4);
            }
        });
        wx.error(function(res){
            // config信息验证失败会执行error函数，如签名过期导致验证失败，具体错误信息可以打开config的debug模式查看，也可以在返回的res参数中查看，对于SPA可以在这里更新签名。
            alert("errorMSG:"+res);
        });
    });
</script>
</head>
<body>
		<div class="container" style="padding:0px;background:#FDE0A4;min-height:1000px;font-size:18px;">
			<div class="container" style="padding:0px;">
			    <img src="./images/top_2.png" style="width:100%;">
			</div>
			<div class="container" style="padding:10px 3%;">
				<div class="row" style="margin:10px 0px;">
					<div class="menu_1">
						浏览<span class="small">量</span>
					</div>
					<div style="clear:both;"></div>
					<div class="tj" style="padding:10px 20px;">
						浏览量：<span><?php echo $vote['clicks'] ?></span> 
					</div>
				</div>
				<div class="row" style="margin:10px 0px;">
					<div class="menu_2">
						风之舞<span class="small">简介</span>
					</div>
					<div style="clear:both;"></div>
					<div style="padding:10px 20px;">
						“凤之舞”创办于2006年，经多年发展已成为集艺术培训、形体健身、商业演出于一体的综合性艺术
机构。现拥有凤之舞艺术培训中心（少儿艺术培训）、凤之舞舞蹈俱乐部（成人健身）、凤之舞美术（
光影艺术坊）、凤之舞教育（亿像教育）四大品牌和海西大厦、东南大街、实小、二小、东岭、涂寨、
崇武、紫山共8个教学点。2015年在学人数已突破1000人，是泉州地区最大的艺术培训机构之一。
					</div>
					<div class="col-xs-12" style="padding:10px 30px">
						<img src="./images/img_1.jpg" style="width:100%">
					</div>
					<div style="padding:10px 20px;">
						凤之舞艺术培训中心系全国十佳培训机构、中国艺术教育研究中心舞蹈研究基地、中国民族民间舞蹈优秀认证机构、中国民族民间舞蹈指定培训教室、中国音乐学院考级惠安考点、中国民族民间舞蹈惠安考点。
					</div>
					<div class="col-xs-12" style="padding:10px 30px">
						<img src="./images/img_2.jpg" style="width:100%">
					</div>
					<div style="padding:10px 20px;color:#E72121;">
						扫描或者长按下方二维码关注并参与我们的活动，每一期的礼物都不一样的，而且会越来越多，越来越丰厚		
					</div>
					<div class="col-xs-12" style="padding:10px 60px">
						<img src="./images/icon_ewm.png" style="width:100%">
					</div>
					<div style="padding:10px 20px;">
						凤之舞艺术培训中心<br />
						<span style="font-size:16px;">开设：少儿舞蹈、葫芦丝、钢琴、竹笛、长笛、古筝、吉他、架子鼓</span>
					</div>
					<div class="col-xs-12" style="padding:10px 60px">
						<img src="./images/img_3.png" style="width:100%">
					</div>
					<div style="padding:10px 20px;">
						光影艺术坊<br />
						<span style="font-size:16px;">开设：幼儿创意综合绘画，少儿综合材料绘画，线描、油画、国画、纸雕、软陶、综合手工、素描</span>
					</div>
					<div class="col-xs-12" style="padding:10px 30px">
						<img src="./images/img_4.jpg" style="width:100%">
					</div>
					<div style="padding:10px 20px;">
						亿像教育<br />
						<span style="font-size:16px;">开设：幼小衔接、识字、拼音、作文、阅读</span>
					</div>
					<div class="col-xs-12" style="padding:10px 30px">
						<img src="./images/img_5.png" style="width:100%">
					</div>
					<div style="padding:10px 20px;">
						凤之舞成人舞蹈俱乐部<br />
						<span style="font-size:16px;">开设：成人爵士舞、形体、民族舞、钢管舞、少儿爵士舞</span>
					</div>
					<div class="col-xs-12" style="padding:10px 30px">
						<img src="./images/img_6.jpg" style="width:100%">
					</div>
				</div>
            </div>	
			<div class="container" style="padding:10px 3%;margin-top:10px;">
				<div style="margin-left:-1%;position:relative;">
					<img src="./images/lp_bg_2_1.png" style="width:100%;border:none 0;">
					<div class="t_c" style="color:#E72121;font-size:5vw;position:absolute;bottom:10%;left:5%;right:5%;">
						<div>本期大礼包</div>
					</div>
				</div>
				<div class="lp_bg_2_3">
					<div>
						<div class="row m0" style="padding:4% 2%">
							<div class="t_c" style="margin:0 auto;">
								<div style="width:40%">
									<div style="width:100%;float:left;">
										<img src="./images/lp_1.png" style="border-radius:100px;width:60%">
										<div class="t_c" style="font-size:2vw;margin-top:10px;">
											踏青一日游
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- 一排2个 -->
						<div class="row m0" style="padding:4% 2%">
							<div class="t_c" style="margin:0 auto;">
								<div style="width:80%">
									<div style="width:50%;float:left;">
										<img src="./images/lp_2.png" style="border-radius:100px;width:60%">
										<div class="t_c" style="font-size:2vw;margin-top:10px;">
											汇康游泳馆免费游泳一次
										</div>
									</div>
									<div style="width:50%;float:left;">
										<img src="./images/lp_3.png" style="border-radius:100px;width:60%">
										<div class="t_c" style="font-size:2vw;margin-top:10px;">
											安然纳米免费汗蒸一次
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div>
					<img src="./images/lp_bg_2_2.png" style="width:100%;border:none 0;">
				</div>
			</div>				
			<div class="container" style="padding:10px 10%;margin-top:10px;">
				<div class="t_c" style="margin-bottom:10px;">您已累积签到<span style="color:#E92B28;">0</span>次</div>
				<div id="sign_in" style="position:relative;">
					<img src="./images/icon_btn.png" style="width:100%;border:none 0;">
					<div class="t_c" style="color:#fff;font-size:7vw;position:absolute;bottom:25%;left:5%;right:5%;">
						<div>签 到</div>
					</div>
				</div>
			</div>
			<div class="container" style="padding:10px 3%;">
				<div class="row" style="margin:0px;">
					<div class="menu_3">
						活动<span class="small">时间</span>
					</div>
					<div style="clear:both;"></div>
					<div class="tj" style="padding:10px 20px;">
						活动时间：6月1日—6月7日
					</div>
				</div>
				<div class="row" style="margin:10px 0px;">
					<div class="menu_2">
						活动<span class="small">规则</span>
					</div>
					<div style="clear:both;"></div>
					<div class="tj" style="padding:10px 20px;">
						<strong>活动规则：</strong>累计签到4天的前200名可获得第二期奖品。<br />
<strong>签到方法: </strong>点击“签到”按钮，转发到朋友圈，填写姓名和手机号码，完成签到1次。(备注:签到每天只能一次)。<br />
<strong>排名规则: </strong>按最先完成4次签到排名，（2016年6月1日0点之后开始算起）越早签到获奖机会越高。
					</div>
				</div>		
				<div class="row" style="margin:10px 0px;">
					<div class="menu_4">
						领奖<span class="small">地址</span>
					</div>
					<div style="clear:both;"></div>
					<div class="dz">
						<span>县城：</span>东南大街海西大厦三楼（凤之舞教育总部）18859516530陈老师 <br />
						<span>紫山：</span>紫山镇翁后双益超市后艾尚凤之舞培训（15905000978）黄老师 <br />
						<span>东岭：</span>蓝天幼儿园（87873600）陈老师 <br />
						<span>东岭：</span>丁丁艺术培训中心（18050855007) 张老师<br />
						<span>涂寨：</span>康乃馨相馆后凤之舞艺学堂（13015888619）庄老师<br />
						<span>崇武：</span>建设银行二楼凤之舞崇武教学点（15805088118）林老师 <br />
					</div>
				</div>
				<div class="row" style="margin:10px 0px;">
					<div class="menu_1">
						排行<span class="small">榜</span>
					</div>
					<div style="float:left;font-size:16px;margin-top:40px;color:#e72121;">
						*榜上有名的均有奖品！
					</div>
					<div style="clear:both;"></div>
					<div style="margin:10px 0px;font-size:12px;border-right:1px solid #f65a5b;">
						<div class="row m0" style="background:#f65a5b;height:30px;line-height:30px;color:#fff;">
							<div class="col-xs-2 t_c p0">
								名次
							</div>
							<div class="col-xs-3 t_c p0">
								姓名
							</div>
							<div class="col-xs-5 t_c p0">
								手机号
							</div>
							<div class="col-xs-2 t_c p0">
								签到
							</div>
						</div>
						<?php if(is_array($vote_item)): $k = 0; $__LIST__ = $vote_item;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($k % 2 );++$k;?><div class="row m0">
							<div class="col-xs-2 table_b p0">
								<?php echo ($k); ?>
							</div>
							<div class="col-xs-3 table_b p0">
								<?php echo ($li["item"]); ?>
							</div>
							<div class="col-xs-5 table_b p0">
								<?php echo ($li["tourl"]); ?>
							</div>
							<div class="col-xs-2 table_b p0">
								<?php echo ($li['pro']); ?>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>

					</div>
				</div>
			</div>
		</div>
		<div class="ale_div" id="baoming" style="display:none;">
			<div class="t_c" style="font-size:12px;">
				请填写姓名手机号便于中奖后通知	
			</div>
			<div class="inp_div">
				<input type="text" id="item" name="user_name" placeholder="请输入姓名" onfocus="this.placeholder=''" onblur="this.placeholder='请输入姓名'">
			</div>
			<div class="inp_div">
				<input type="text" id="tourl" name="phone" placeholder="请输入手机号" onfocus="this.placeholder=''" onblur="this.placeholder='请输入手机号'">
			</div>
			<div class="btn1">
				保存
			</div>
			<div class="close_btn">
				×
			</div>
		</div>
		<div class="zeceng"></div>
		<input type="hidden" id="tid" value="<?php echo $id ?>" />
		<script>
			$(function(){
				$(".canyu").click(function(){
					var id = $('#tid').val();
					$.get(
						'/index.php?g=Wap&m=Vote&a=ajaxCheckIsJoined',
						{id:id},
						function(data){
							if(data=='yes'){
								//alert('你已经参加过了！');
								$("#chaxuan,.zeceng").show();
							}else{
								
								$("#baoming,.zeceng").show();
							}
						}
						
					);
					
				});
				$(".close_btn").click(function(){
					$(".ale_div,.zeceng").hide();
				});
				$(".guanzhu").click(function(){
					$(".ewm_div,.zeceng").show();
				});
				$(".close_btn,.ale_div .btn1").click(function(){
					$("#baoming,.zeceng").hide();
				});
				$('.btn1').click(function(){
					var id = $('#tid').val();
					var item = $('#item').val();
					var tourl = $('#tourl').val();
					if($.trim(tourl)==''){
						$('#tourl').attr('style','border:1px solid red');
						return false;
					}
					var reg = /1\d{10}/
					if(tourl.match(reg)==null){
						$('#tourl').attr('style','border:1px solid red');
						return false;
					}
					if($.trim(item)==''){
						$('#item').attr('style','border:1px solid red');
						return false;
					}
					$.post(
						'/two/index.php?g=User&m=Bm&a=add',
						{vid:id,item:item,tourl:tourl,intro:'',startpicurl:''},
						function(data){
							if(data.success==1){
								alert(data.msg);
							}else{
								alert(data.msg);
							}
						},
						'json'
						
					);
				});
			$('#cha_btn').click(function(){
				var tourl = $('#cha_tourl').val();
				$.getJSON(
						'/two/index.php?g=Wap&m=Vote&a=chaxuan',
						{tourl:tourl},
						function(data){
							if(data.success==1){
								//alert(data.msg);
								window.location.href = '/index.php?g=Wap&m=Vote&a=show&id='+data.data.id+'&wecha_id=&tid='+data.data.vid;
							}else{
								alert(data.msg);
							}
						},
						'json'
						
					);
			});
			$('.guanzhu').click(function(){
				//window.location.href = '/index.php?g=Wap&m=Vote&a=index&tid='+tid;
				var id = $('#tid').val();
					$.get(
						'/index.php?g=Wap&m=Vote&a=ajaxCheckIsJoined',
						{id:id},
						function(data){
							if(data=='yes'){
								//alert('你已经参加过了！');
								$("#chaxuan,.zeceng").show();
							}else{
								
								$("#baoming,.zeceng").show();
							}
						}
						
					);
			});
			})
		</script>
	</body>
</html>