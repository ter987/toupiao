<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML><html lang="en-US">
 <head>
   <meta charset="UTF-8">
   <title><?php echo ($vote["title"]); ?></title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <meta name="apple-mobile-web-app-capable" content="yes">
   <meta name="apple-mobile-web-app-status-bar-style" content="black">
   <meta name="format-detection" content="telephone=no">
   <meta name="description" content="<?php echo ($vote["title"]); ?>">
   <script src="<?php echo STATICS;?>/vote/wap/jquery.js" type="text/javascript"></script>
   <link href="<?php echo STATICS;?>/vote/index/bootstrap.min.css" rel="stylesheet"  media="all">
   <link href="<?php echo STATICS;?>/vote/index/style.css" rel="stylesheet"  media="all">
<script type="text/javascript">
    // 对浏览器的UserAgent进行正则匹配，不含有微信独有标识的则为其他浏览器
    var useragent = navigator.userAgent;
    if (useragent.match(/MicroMessenger/i) != 'MicroMessenger') {
        // 这里警告框会阻塞当前页面继续加载
        alert('已禁止本次访问：您必须使用微信内置浏览器访问本页面！');
        // 以下代码是用javascript强行关闭当前页面
        var opened = window.open('about:blank', '_self');
        opened.opener = null;
        opened.close();
    }
</script>
</head>
<body>
		<div class="container" style="padding:0px;background:#F6E138;min-height:1000px;">
			<div class="container" style="padding:0px;">
			    <img src="./images/top.png" style="width:100%;">
			</div>
			<div class="t_c" style="font-size:5vw;margin-top:-10px;">
				<?php echo ($data["item"]); ?> 邀请你帮他投票！
			</div>
			<div class="container" style="padding:0px;">
				<div class="col-xs-6">
					<div style="text-align:center;line-height:30px;font-weight:900;">
						已投票
					</div>
					<div  style="text-align:center;line-height:30px;color:#E72121;font-weight:900;">
						<span id="yitou"><?php echo ($data["vcount"]); ?></span>个
					</div>
				</div>
				<div class="col-xs-6">
					<div style="text-align:center;line-height:30px;font-weight:900;">
						排名
					</div>
					<div style="text-align:center;line-height:30px;color:#E72121;font-weight:900;">
						<?php echo ($data["pm"]); ?>名
					</div>
				</div>
			</div>
			<div class="container" style="padding:0px;margin-top:10px;">
				<div class="col-xs-6">
					<div class="but_sty guanzhu" style="background:#FF4F00;">
						我要参与
					</div>
				</div>
				<div class="col-xs-6">
					<div class="but_sty" id="toupiao" style="background:#76AF2E;">
						为TA投票
					</div>
				</div>
			</div>
			<div class="row" style="margin:10px 0px;">
					<div class="menu_bg">
						凤之舞<span class="small">简介</span>
					</div>
					<div style="clear:both;"></div>
					<div style="margin:10px 0px;font-size:12px;">
						  <?php  echo html_entity_decode(htmlspecialchars_decode($vote['qtxinxi'])) ?>
					</div>
				</div>
			<input type="hidden" id="mid" value="<?php echo $mid ?>" />
			<script>
				$('#toupiao').click(function(){
					var mid = $('#mid').val();
					var tid = $('#tid').val();
					$.getJSON(
						'/index.php?g=Wap&m=Vote&a=ajaxToupiao',
						{mid:mid},
						function(data){
							if(data.status=='ok'){
								var yitou = parseInt($('#yitou').html());
								$('#yitou').html(yitou+1);
								alert(data.msg);
							}else{
								alert(data.msg);
							}
						}
						
					);
				});
			</script>
			
			<div class="container" style="padding:10px 5%;margin-top:10px;">
				<div>
					<img src="./images/lp_bg_1.png" style="width:100%;border:none 0;">
				</div>
				<div class="lp_bg">
					<div class="t_c" style="color:#E72121;font-size:5vw;">
						本期大礼包
					</div>
					<div>
						<div class="row m0" style="padding:4% 2%">
							<div class="t_c" style="margin:0 auto;">
								<div style="width:50%">
									<div style="width:100%;float:left;">
										<img src="./images/icon1.jpg" style="border-radius:100px;width:60%">
										<div class="t_c" style="font-size:3vw;margin-top:5px;">
											纪念杯子一个
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- 一排2个 -->
						<div class="row m0" style="padding:4% 2%">
							<div class="t_c" style="margin:0 auto;">
								<div style="width:100%">
									<div style="width:50%;float:left;">
										<img src="./images/icon2.jpg" style="border-radius:100px;width:60%">
										<div class="t_c" style="font-size:3vw;margin-top:5px;">
											悠贝亲子阅读画册一份
										</div>
									</div>
									<div style="width:50%;float:left;">
										<img src="./images/icon3.jpg" style="border-radius:100px;width:60%">
										<div class="t_c" style="font-size:3vw;margin-top:5px;">
											精美旅游帽一顶
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- 一排2个 -->
						<div class="row m0" style="padding:4% 2%">
							<div class="t_c" style="margin:0 auto;">
								<div style="width:100%">
									<div style="width:50%;float:left;">
										<img src="./images/icon4.jpg" style="border-radius:100px;width:60%">
										<div class="t_c" style="font-size:3vw;margin-top:5px;">
											美鹰汽车免费洗车一次
										</div>
									</div>
									<div style="width:50%;float:left;">
										<img src="./images/icon5.jpg" style="border-radius:100px;width:60%">
										<div class="t_c" style="font-size:3vw;margin-top:5px;">
											安然纳米免费汗蒸一次
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- 一排2个 -->
						<div class="row m0" style="padding:4% 2%">
							<div class="t_c" style="margin:0 auto;">
								<div style="width:100%">
									<div style="width:50%;float:left;">
										<img src="./images/icon6.jpg" style="border-radius:100px;width:60%">
										<div class="t_c" style="font-size:3vw;margin-top:5px;">
											汇康游泳馆免费体验一次
										</div>
									</div>
									<div style="width:50%;float:left;">
										<img src="./images/icon7.jpg" style="border-radius:100px;width:60%">
										<div class="t_c" style="font-size:3vw;margin-top:5px;">
											禧灸堂迷度芦荟鲜汁脸部护理一次
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<div class="row m0">
					<img src="./images/lp_bg_2.png" style="width:100%;border:none 0;">
				</div>
			</div>
			<div class="container" style="padding:10px 5%;">
				<div class="row" style="margin:0px;">
					<div class="menu_bg">
						活动<span class="small">时间</span>
					</div>
					<div style="clear:both;"></div>
					<div style="margin:10px 0px;font-size:18px;">
						第一期送礼活动：5月23日—5月31日
					</div>
				</div>
				<div class="row" style="margin:10px 0px;">
					<div class="menu_bg">
						活动<span class="small">规则</span>
					</div>
					<div style="clear:both;"></div>
					<div style="margin:10px 0px;font-size:18px;">
						点击“我要参与”填写报名信息，把链接分享到朋友圈，邀请好友帮忙投票，投票排行榜靠前的前300名，可以获得礼品。凤之舞豪礼大放送，参与前四期，有机会获得终极大奖。
					</div>
					<div style="color:#e72121;margin-bottom:18px;"><span style="font-weight:bold">
						关注并参与我们的活动，每一期的礼物都不一样的，而且会越来越多，越来越丰厚
					</span></div>
					<div>
						<div style="width:30%;float:left;">
							<div style="position:relative;">
								<img src="./images/bk_bg.png" style="width:100%">
								<div style="position:absolute;top:10%;left:15%;right:15%;">
									<img src="./images/lp_min.jpg" style="width:100%">
									<div  class="col-xs-12" style="padding:0px;margin-top:5px;">
										<!-- <div style="height:14px;line-height:14px;width:100%;overflow:hidden;font-size:12px;">
											¥19880 Wacom新帝移动电脑2代（i7 512GB）+20000元奖
										</div> -->
									</div>
								</div>
								<div style="position:absolute;bottom:10%;left:5%;right:5%;color:#FF4F00;font-size:10px;">
									<div class="t_c" style="font-size:2vw;">活动时间</div>
									<div class="t_c" style="font-size:2vw;">5月23日—5月31日</div>
								</div>
							</div>
							<div class="t_c">
								第一期
							</div>
						</div>
						<div style="width:5%;float:left;">&nbsp;</div>	
						<div style="width:30%;float:left;">
							<div style="position:relative;">
								<img src="./images/bk_bg.png" style="width:100%">	
								<div style="position:absolute;top:8%;left:8%;right:8%;">	
									<img src="./images/sm_img.jpg" style="width:100%">
								</div>
								<div style="position:absolute;bottom:10%;left:5%;right:5%;color:#FF4F00;font-size:10px;">
									<div class="t_c" style="font-size:3vw;">活动时间</div>
									<div class="t_c" style="font-size:3vw;">6月1日—6月7日</div>
								</div>						
							</div>
							<div class="t_c">
								第二期
							</div>
						</div>
						<div style="width:5%;float:left;">&nbsp;</div>	
						<div style="width:30%;float:left;">
							<div style="position:relative;">
								<img src="./images/bk_bg.png" style="width:100%">	
								<div style="position:absolute;top:8%;left:8%;right:8%;">	
									<img src="./images/sm_img.jpg" style="width:100%">
								</div>
								<div style="position:absolute;bottom:10%;left:5%;right:5%;color:#FF4F00;font-size:10px;">
									<div class="t_c" style="font-size:3vw;">活动时间</div>
									<div class="t_c" style="font-size:3vw;">6月8日—6月14日</div>
								</div>
							</div>	
							<div class="t_c">
								第三期
							</div>
						</div>		
						<div style="clear:both;"></div>
					</div>
					<div style="margin-top:10px;">
						<div style="width:17%;float:left;">&nbsp;</div>	
						<div style="width:30%;float:left;">
							<div style="position:relative;">
								<img src="./images/bk_bg.png" style="width:100%">	
								<div style="position:absolute;top:8%;left:8%;right:8%;">	
									<img src="./images/sm_img.jpg" style="width:100%">
								</div>
								<div style="position:absolute;bottom:10%;left:5%;right:5%;color:#FF4F00;font-size:10px;">
									<div class="t_c" style="font-size:3vw;">活动时间</div>
									<div class="t_c" style="font-size:3vw;">6月15日—6月21日</div>
								</div>						
							</div>
							<div class="t_c">
								第四期
							</div>
						</div>
						<div style="width:5%;float:left;">&nbsp;</div>	
						<div style="width:30%;float:left;">
							<div style="position:relative;">
								<img src="./images/bk_bg1.png" style="width:100%">	
								<div style="position:absolute;top:8%;left:8%;right:8%;">	
									<img src="./images/sm_img1.jpg" style="width:100%">
								</div>
								<div style="position:absolute;bottom:10%;left:5%;right:5%;color:#FF4F00;font-size:10px;">
									<div class="t_c" style="font-size:3vw;">活动时间</div>
									<div class="t_c" style="font-size:3vw;">6月22日—6月30日</div>
								</div>
							</div>
							<div class="t_c">
								第五期
							</div>	
							<div class="t_c" style="font-size:4vw;">
								(参与前四项有机会获得)
							</div>							
						</div>	
						<div style="width:17%;float:left;">&nbsp;</div>							
					</div>
				</div>		
				
				<div class="container" style="padding:0px;">
					<div class="menu_bg">
						领奖<span class="small">地址</span>
					</div>
					<div style="clear:both;"></div>
					<div style="margin:10px 0px;font-size:12px;">
						<?php  echo html_entity_decode(htmlspecialchars_decode($vote['info'])) ?>
					</div>
				</div>
				<div class="row t_c c_red" style="font-size:16px;">
					来凤之舞教育总部现场领奖更有神秘大礼！
				</div>
				<div class="row" style="margin:10px 0px;">
					<div class="menu_bg">
						排行<span class="small">榜</span>
					</div>
					<div style="clear:both;"></div>
					<div style="margin:10px 0px;font-size:12px;border-right:1px solid #FF4F00;">
						<div class="row m0" style="background:#FF4F00;height:30px;line-height:30px;color:#fff;">
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
								投票
							</div>
						</div>
						<?php if(is_array($vote_item)): $i = 0; $__LIST__ = $vote_item;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><div class="row m0">
							<div class="col-xs-2 table_b p0">
								<?php echo ($li["mingci"]); ?>
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
				<p >浏览量：<?php echo $vote['clicks'] ?></p>
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
		<div class="ale_div" id="chaxuan" style="display:none;">
			<div class="t_c" style="font-size:12px;">
				您已参加过，输入手机号码查询	
			</div>
			<div class="inp_div">
				<input type="text" id="cha_tourl" name="phone" placeholder="请输入手机号" onfocus="this.placeholder=''" onblur="this.placeholder='请输入手机号'">
			</div>
			<!-- <div class="inp_div">
				<input type="text" id="tourl" name="phone" placeholder="请输入手机号" onfocus="this.placeholder=''" onblur="this.placeholder='请输入手机号'">
			</div> -->
			<div class="btn1" id="cha_btn">
				查询
			</div>
			<div class="close_btn" style="margin-top: -150px;">
				×
			</div>
		</div>
		<!-- 二维码弹层 -->
		<!-- <div class="ewm_div" style="display:none;">
			<div class="t_c" style="font-size:14px;color:#FF6A2E;margin-bottom:5px;">
				长按二维码并识别
			</div>
			<div class="t_c" style="font-size:12px;">
				请长按下图并选择识别图中二维码参与活动
			</div>
			<div class="t_c">
				<img src="./images/ewm.jpg" style="width:220px;height:220px;">	
			</div>
			<div class="t_c" style="font-size:12px;">
				无法识别二维码请点击下面按钮参与活动
			</div>
		</div> -->
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
						'/index.php?g=User&m=Bm&a=add',
						{vid:id,item:item,tourl:tourl,intro:'',startpicurl:''},
						function(data){
							if(data.success==1){
								alert(data.msg);
								window.location.href = '/index.php?g=Wap&m=Vote&a=show&id='+data.id+'&wecha_id=&tid='+data.tid;
							}else{
								$('#cha_tourl').val($('#tourl').val());
								$("#chaxuan,.zeceng").show();
								//alert(data.msg);
							}
						},
						'json'
						
					);
				});
			$('#cha_btn').click(function(){
				var tourl = $('#cha_tourl').val();
				$.post(
						'/index.php?g=Wap&m=Vote&a=chaxuan',
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