<?php
class BmAction extends BaseAction{

    public function index(){
        $id=(int)$this->_get('tid');
		$token=$this->_get('token');
		
		$where 		= array('token'=>$token,'id'=>$id);
		$info 	= M("Vote")->where($where)->find();
		$this->assign('info',$info);	
        $this->display();
    }
	
	public function wap(){
		
        $id=(int)$this->_get('tid');
		$token=$this->_get('token');
		
		$where 		= array('token'=>$token,'id'=>$id);
		$info 	= M("Vote")->where($where)->find();
		$this->assign('info',$info);	
        $this->display("");
    }
	
	public function add(){
        $vid 		= 	intval($this->_post('vid'));
		$item     	=  	 $this->_post('item');
		$rank    	=   0;
		$vcount     =   0;
		$tourl      =   $this->_post('tourl');
		$intro      =   $this->_post('intro');
		$startpicurl     =   $this->_post('startpicurl');
		$msg = '您的报名已成功';
		$checkvote = M("Vote_item");
		$data['vid'] 	= $vid;
		$data['item'] = $item;
		$data['rank'] = $rank;
		$data['vcount'] = $vcount;
		$data['tourl'] = $tourl;
		$data['intro'] = $intro;
		$data['status'] = 1;
		$data['addtime'] = time();
		$data['startpicurl'] = $startpicurl;
		
		$vote = M('Vote')->where("id=$vid")->find();
		//var_dump($vote);exit;
		$now = time();
		if($now<$vote['statdate']){
			$arr=array('success'=>0,'msg'=>"活动还未开始");
            echo json_encode($arr);
            exit;
		}
		if($now>$vote['enddate']){
			$arr=array('success'=>0,'msg'=>"活动已结束");
            echo json_encode($arr);
            exit;
		}
		if(M("Vote_item")->where("tourl=$tourl")->find()){
			$arr=array('success'=>0,'msg'=>"该手机号本期已参加");
            echo json_encode($arr);
            exit;
		}
		$ok = M("Vote_item")->add($data);
		 if(false === $ok){
            $arr=array('success'=>0,'msg'=>"报名失败，请联系管理员");
            echo json_encode($arr);
            exit;
        }
		else{
			setcookie('round_'.$vid,'get',time()+360000);
			$arr=array('success'=>1,'msg'=> $msg,'id'=>$ok,'tid'=>$vid);
			echo json_encode($arr);  
		   exit;
	   }
    }
}



?>