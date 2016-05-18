﻿<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>我是{31cms:$data.id}号{31cms:$data.item}正在参加{31cms:$vote.title}活动呢，赶紧给我投一票吧</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="format-detection" content="telephone=no">
	<script src="{31cms::STATICS}/vote/wap/jquery.js"></script>
	<script src="{31cms::STATICS}/jquery-ui.js" type="text/javascript"></script>
	<script src="{31cms::STATICS}/vote/jquery.slides.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{31cms::STATICS}/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="{31cms::STATICS}/jquery-ui.theme.css" />
	<link rel="stylesheet" type="text/css" href="{31cms::STATICS}/jquery-ui.structure.css" />
	<link href="{31cms::STATICS}/vote/showindex.css" rel="stylesheet" media>
	<link href="{31cms::STATICS}/vote/voteshow.css" rel="stylesheet" media>
	<link href="{31cms::STATICS}/vote/wap/css/style.css" rel="stylesheet"  media="all">
		
	 <style>
      .cl{clear:both;}
      body{font-family:'Microsoft YaHei';}

      table{width:96%;border-collapse:collapse;border:1px solid #fc9878;margin:20px auto;}
      tr{height:25px;}
      th{padding:1px 5px;width:18%;border:1px solid #fc9878;}
      td{padding:1px 5px;border:1px solid #fc9878;text-align:center;}
	 </style>
	</head>
<body style="background-color:#fffced;">
<div style="font-family:'Microsoft YaHei';font-size:20px;text-align:center;margin:12px auto;font-weight:600;color:#229eb5;" >{31cms:$vote.title}</div>

    <div  style="width:100%;height:auto;background:url(/images/tp_bg.png) no-repeat;background-size:contain;padding-top:60px;">
    <table>
        <tr><th>编号</th><th>姓名</th><th>取消关注数</th><th>最终票数</th><th>名次</th></tr>
    <volist name="vote_item" id="li">
					<tr>
						<td>{31cms:$li.id}</td>
                        <td><a  style="color:#229eb5;" href="{31cms::C('site_url')}/index.php?g=Wap&m=Vote&a=show&token={31cms:$token}&id={31cms:$li.id}&wecha_id={31cms:$wecha_id}&tid={31cms:$id}">{31cms:$li.item}</a></td>
						<td>{31cms:$li.prode}票</td>
						<td>{31cms:$li['pro']}票</td>
						<td>第<b style="color:#229eb5;font-size:16px;">{31cms:$li.mingci}</b>名</td>
					</tr>
				</volist>
    </table>
    </div>

<!--      <div class="skin-section">
              <h4>{31cms:$vote.title}</h4>  
             <h3><a href="{31cms::U('Vote/index')}" class="right btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px">返回</a>
			 </h3><h3><a href="{31cms::U('Vote/outxls',array('id'=>$vote['id']))}" class="right btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px;margin-right:5px;">导出EXCEL</a>
			 </h3>
              
             <p class="modus"> <if condition="$vote['cknums'] eq 1"> 单选<else/>多选</if>投票，<span class="number">共有{31cms:$count}人参与投票</span></p>
		<section class="list" id="allplayer">
		<div id="main" role="main">
				<ul id="tiles">
				<volist name="vote_item" id="li">
					<li>
						<img src="{31cms:$li.startpicurl}" width="150" height="178">
						<p class="tit">编号:{31cms:$li.id} <br />{31cms:$li.item}</p>
						<p>取消关注：<b>{31cms:$li.prode}个</b></p><p> 减去票数：<b>{31cms:$li['prode']}个</b></p>
						<p>最终票数：<b>{31cms:$li['pro']}</b></p>
						<p style="color:#FF0000;">名次：<b>{31cms:$li.mingci}</b></p>
					</li>
				</volist>
				</ul>
		 </div>
		 <div style="clear:both"></div>
		<div class="linkp">{31cms:$page}</div>
		 </section>        
     </div>-->

     <div style="width:100%;height:50px;position:fixed;bottom:0;background:#fd564a;font-family:'Microsoft YaHei';color:#fff;z-index:1000;">
        <dl style="width:24.2%;height:48px;padding-top:2px;text-align:center;float:left;border-left:1px solid #fe685e;border-right:1px solid #fa4034;"><a style="color:#fff;" href="{31cms::U('Wap/Vote/index',array('token'=>$_SESSION['token'],'id'=>$tid))}"><dt><img width="28" height="28" src="images/shouye.png" /></dt><dd>首 页</dd></a></dl>
         <dl style="width:24.2%;height:48px;padding-top:2px;text-align:center;float:left;border-left:1px solid #fe685e;border-right:1px solid #fa4034;"><a style="color:#fff;" href="{31cms::U('Wap/Vote/index',array('token'=>$_SESSION['token'],'id'=>$tid))}"><dt><img width="28" height="28" src="images/saishi.png" /></dt><dd>参赛说明</dd></a></dl>
         <dl style="width:24.2%;height:48px;padding-top:2px;text-align:center;float:left;border-left:1px solid #fe685e;border-right:1px solid #fa4034;"><a style="color:#fff;" href="#"><dt><img width="28" height="28" src="images/paihang.png" /></dt><dd>排行榜</dd></a></dl>
         <dl style="width:24.2%;height:48px;padding-top:2px;text-align:center;float:left;border-left:1px solid #fe685e;border-right:1px solid #fa4034;"><a style="color:#fff;"href="#" onclick="javascript:history.back(-1)"><dt><img width="28" height="28" src="images/guanzhu.png" /></dt><dd>关注我们</dd></a></dl>
     </div>



<div id="gz_footer">版权所有 Copyright 2015 {31cms:$gzh.tel}</div>

</body></html>