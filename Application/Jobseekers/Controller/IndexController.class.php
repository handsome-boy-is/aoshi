<?php
namespace Jobseekers\Controller;
use Think\Controller;
use Common\Controller\ResumeController;
<<<<<<< HEAD
=======
use Common\Controller\JobseekersController;


>>>>>>> d49043c25bec3cf4073bc386a02e6b723fb83db7
class IndexController extends ResumeController {
    public function index(){
		/*if (session('user_login_status')) {
		
		}else{
			 $this->error('请先登录!',U('Login/login'));
			 
		}*/
		//如果没有登录，就提示请登录
		//当前uid
		$uid=session('uid');
		/*$sql1 ="select * from  jobseekers where  uid =". $uid .$pageObj -> limit;
		$jobseekers_info=D("jobseekers")->query($sql1);	*/
			
<<<<<<< HEAD
		$jobseekers_info= M('jobseekers')->where("uid =$uid")->select();//简历基本信息
		
	
        // 第二步：模版赋值
=======
		$jobseekers_info= M('jobseekers')->field("photo")->where("uid =$uid")->select();//简历基本信息

>>>>>>> d49043c25bec3cf4073bc386a02e6b723fb83db7
        $this->assign('jobseekers_info',$jobseekers_info);
	
        $this->display();
		
		
   		
    }
	public function select(){
		$uid=session('uid');			
		$jobseekers_info= M('jobseekers')->where("uid =$uid")->select();//简历基本信息
		$basic_info= M('resume_basic')->where("uid =$uid")->select();//简历基本信息
		$experience_info= M('resume_experience')->where("uid =$uid")->select();//简历工作经历
		$education_info= M('resume_education')->where("uid =$uid")->select(); //简历教育经历
		$describe_info= M('jobseekers_describe')->where("uid =$uid")->select(); //简历自我描述
		$prefered_info= M('resume_prefered')->where("uid =$uid")->select(); //简历求职意向
			
		echo json_encode(
   			array(
   				
		    	'user'=>$jobseekers_info,
				'basic'=>$basic_info,
		    	'experience'=>$experience_info,
		    	'education'=>$education_info,
				'describe'=>$describe_info,
		    	'prefered'=>$prefered_info,
		 	)
   		);
		
		}
	
	public function ajaxGet()
    {
    	
    	$uid = session('uid');
    	$getType=I('type');
    	if ($getType==1) {
	    		//简历基本信息
	    	$resumes_basic = M('jobseekers')->where("uid =$uid")->select();
	        $this->assign('jobseekers_info', $jobseekers_info);
        
    	}elseif ($getType=='jobexp') {
    		 //简历工作经历
	    	$experience_info = M('resume_experience')->where("uid =$uid")->select();
	    	echo true;
    	}else{
    		  //简历教育经历
	    	$education_info = M('resume_education')->where("uid =$uid")->select();
	        $this->assign('education_info', $education_info);
			
			$describe_info = M('jobseekers_describe')->where("uid =$uid")->select();
	        $this->assign('describe_info', $describe_info);
	        
	        //简历求职意向
	        $prefered_info = M('resume_prefered')->where("uid =$uid")->select();
	        $this->assign('prefered_info', $prefered_info);
    	}
    	
       
        
      
    }
    public function save() {
    	
    	$uid=session('uid');		
									
   		//简历添加
   		if(I('index') == "basic"){
			$resumes_basic = M('resume_basic');
			$data['uid'] = $uid;
			$data['nickname'] = I('nickname');
<<<<<<< HEAD
			$data['peculiarity'] = I('peculiarity');
			$data['sex'] = I('sex');
			$data['birth'] = I('birth');
			$data['top_edu'] = I('top_edu');
			$data['work_years'] = I('work_years');
			$data['current_city'] = I('current_city');
=======
			if(I('peculiarity')){ $data['peculiarity'] =I('peculiarity');}
				else{ $data['peculiarity'] ='用一句话介绍自己';} 			
			if(I('sex')){ $data['sex'] =I('sex');}
				else{}
			if(I('birth')){ $data['birth'] =I('birth');}
				else{}
			if(I('top_edu')){ $data['top_edu']=I('top_edu');}
				else{}
			if(I('work_years')){ $data['work_years'] =I('work_years');}
				else{}	
			if(I('current_city')){ $data['current_city'] =I('current_city');}
				else{}
>>>>>>> d49043c25bec3cf4073bc386a02e6b723fb83db7
			$data['phone'] = I('phone');
			$data['e_mail'] = I('e_mail');
			if(I('basic_id')){
				$resumes_basic->where("uid=$uid")->save($data);
				echo json_encode($data);
			} 
			else {
				$basic_id = $resumes_basic->data($data)->add();
				echo $basic_id;
			}
   		} 
		elseif(I('index') == "experience") {
   			$resumes_jobexp = M('resume_experience');
			$data['uid'] = $uid;
			$data['re_company_name'] = I('re_company_name');
			$data['job_title'] = I('job_title');
			$data['working_time'] = I('working_time');
			$data['job_description'] = I('job_description');
			if(I('experience_id')){
				$experience_id=I('experience_id');
				$resumes_jobexp->where("experience_id=$experience_id")->save($data);
				echo json_encode($data);
			} 
			else {
				$experience_id = $resumes_jobexp->data($data)->add();
				echo $experience_id;
			}
   		} 
		elseif(I('index') == "education") {
			$resumes_eduexp = M('resume_education');
			$data['uid'] = $uid;
			$data['school_name'] = I('school_name');
			$data['major'] = I('major');
			if(I('degree')){ $data['degree'] =I('degree');}
				else{}
			if(I('graduated')){$data['graduated'] =I('graduated');}
				else{}
			if(I('education_id')){
				$education_id=I('education_id');
				$resumes_eduexp->where("education_id=$education_id")->save($data);
				echo true;
			} 
			else {
				$education_id = $resumes_eduexp->data($data)->add();
				echo $education_id;
			}
   		} 
		elseif(I('index') == "describe") {
			$resumes_describe = M('jobseekers_describe');
			$data['uid']=$uid;
			$data['describe'] = I('describe');
			
			if(I('describe_id')){
				$resumes_describe->where("uid=$uid")->save($data);
				echo true;
			} 
			else {
				$describe_id = $resumes_describe->data($data)->add();
				echo $describe_id;
			}
   		}
		elseif(I('index') == "prefered") {
   			$resumes_career = M('resume_prefered');
			$data['uid'] = $uid;
			$data['expected_position'] = I('expected_position');
			if(I('job_type')){ $data['curjob_typerent_city'] =I('curjob_typerent_city');}
				else{}
			if(I('expected_location')){$data['expected_location'] =I('expected_location');}
				else{}
			if(I('expected_monthly_income')){ $data['expected_monthly_income'] =I('expected_monthly_income');}
				else{}

			if(I('prefered_id')){
				$resumes_career->where("uid=$uid")->save($data);
				echo true;
			} 
			else {
				$prefered_id = $resumes_career->data($data)->add();
				echo $prefered_id;
			}
   		} 
		 elseif(I('index') == "status") {
   			$resumes_basic = M('resume_basic');
			$data['current_status'] = I('current_status');
			$resumes_basic->where("uid=$uid")->save($data);
			echo I('current_status');
		 }
		
    }
	
		 
	public function update() //编辑
	{
		$uid=session('uid');
		$resume_id=I('resume_id');
    if(I('index') == "basic"){
			$resumes_basic = M('jobseekers');
			$data['uid'] = $uid;
			$data['nickname'] = I('name');
			$data['peculiarity'] = I('intro');
			$data['sex'] = I('sex');
			$data['birth'] = I('birth');
			$data['top_edu'] = I('xl');
			$data['work_years'] = I('gzjy');
			$data['current_city'] = I('city');
			$data['phone'] = I('phone');
			$data['e_mail'] = I('email');
			$resumes_basic->where("uid=$uid")->save($data);
			echo json_encode($data);
		}
   		elseif(I('index') == "jobexp") {
   			$resumes_jobexp = M('resume_experience');
			$data['uid'] = $uid;
			$data['re_company_name'] = I('re_company_name');
			$data['job_title'] = I('job_title');
			$data['working_time'] = I('working_time');
			$data['job_description'] = I('job_description');
			$resumes_jobexp->where("resume_id=$resume_id")->save($data);
			echo true;
   		} elseif(I('index') == "eduexp") {
			$resumes_eduexp = M('resume_education');
			$data['uid'] = $uid;
			$data['school_name'] = I('name');
			$data['major'] = I('major');
			$data['degree'] = I('degree');
			$data['graduated'] = I('grad');
			$resumes_eduexp->where("resume_id=$resume_id")->save($data);
			echo true;
   		}elseif(I('index') == "career") {
   			$resumes_career = M('resume_prefered');
			$data['uid'] = $uid;
			$data['expected_position'] = I('name');
			$data['job_type'] = I('type');
			$data['expected_location'] = I('city');
			$data['expected_monthly_income'] = I('wages');
			$resumes_career->where("resume_id=$resume_id")->save($data);
			echo true;
   		}elseif(I('index') == "state") {
			
   			$jobseekers = M('jobseekers');
			$data['current_status'] = I('state');
			$jobseekers->where("uid=$uid")->save($data);
			echo true;
   		}
		 else {
   			$resumes_describe = M('jobseekers_describe');
			$data['uid']=$uid;
			$data['describe'] = I('des');
			$resumes_describe->where("resume_id=$resume_id")->save($data);
			echo true;
   		}

    }
	
	 public function delete()
    {
		
		if(I('index') == "experience"){
			$resume_id = I('experience_id');
			$resumes_eduexp = M('resume_experience');
			$resumes_eduexp->where("experience_id=$resume_id")->delete();
		} 
		
		else {
			$resume_id = I('education_id');
			$resumes_eduexp = M('resume_education');
			$resumes_eduexp->where("education_id=$resume_id")->delete();
		}

    }
	public function delivery() //编辑
	{
/*原生：SELECT resume_delivery.delivery_time,resume_delivery.delivery_status,job.id,job.job_name,job.enterprise_id,job.money,job.place,company.id,company.company_name FROM resume_delivery left join job on resume_delivery.job_id=job.id left join company on job.enterprise_id=company.enterprise_id where jobseeker_id=5		
*/		
		//显示用户名
		$uid=session('uid');
		$seekers_info = M('resume_basic')->field("resume_basic.nickname")->where("uid =$uid")->select();
	    $this->assign('seekers_info', $seekers_info);
		//筛选id、状态、投递时间输出数据
		$timess_info = M('resume_delivery')->field("resume_delivery.delivery_time")->where("jobseeker_id =$uid")->select();
		$times = I('times');
		if($times=='7')
		{
			$m='-7';
		}
		 else {
			$m='-60';
			}
			
		$where_all=M('resume_delivery')
		 		->field("resume_delivery.delivery_time,resume_delivery.delivery_status,job.id,job.job_name,job.enterprise_id,job.company_name,job.city,job.area,job.salary_low,job.salary_hig")
                ->join("left join job on resume_delivery.job_id=job.id")//join是关联查询
                ->where("jobseeker_id = $uid  and  (DATEDIFF(delivery_time,NOW()) >= $m )")	//	DATEDIFF(time1,time2) = time2 - time1
                ->order('delivery_time DESC')
				->select();
	
		$where_see=M('resume_delivery')
		
<<<<<<< HEAD
		 		->field("resume_delivery.delivery_time,resume_delivery.delivery_status,job.id,job.job_name,job.enterprise_id,job.company_name,job.city,job.area,job.salary_low,job.salary_hig")
                ->join("left join job on resume_delivery.job_id=job.id")//join是关联查询
                ->where("jobseeker_id = $uid and delivery_status >0 and  DATEDIFF(delivery_time,NOW()) >= $m")
                ->order('delivery_time DESC')
			    ->select();	
				
				
		$where_invite=M('resume_delivery')
		 		->field("resume_delivery.delivery_time,resume_delivery.delivery_status,job.id,job.job_name,job.enterprise_id,job.company_name,job.city,job.area,job.salary_low,job.salary_hig")
                ->join("left join job on resume_delivery.job_id=job.id")//join是关联查询
                ->where("jobseeker_id = $uid and delivery_status=2 and  DATEDIFF(delivery_time,NOW()) >= $m")
                ->order('delivery_time DESC')
				->select();					
		$where_failure=M('resume_delivery')
		 		->field("resume_delivery.delivery_time,resume_delivery.delivery_status,job.id,job.job_name,job.enterprise_id,job.company_name,job.city,job.area,job.salary_low,job.salary_hig")
                ->join("left join job on resume_delivery.job_id=job.id")//join是关联查询
                ->where("jobseeker_id = $uid and delivery_status = 3 and  DATEDIFF(delivery_time,NOW()) >= $m")
                ->order('delivery_time DESC')
				->select();	
				
				
=======
       
        if ($rt_info) {
            $this->success('删除成功！',U('Index/index'));
        }else{
            $this->error('删除错误，原因：'.$article->getError(),U('Index/index'));
        }*/
    }
	public function delivery() //编辑
	{
/*原生：SELECT resume_delivery.delivery_time,resume_delivery.delivery_status,job.id,job.job_name,job.enterprise_id,job.money,job.place,company.id,company.company_name FROM resume_delivery left join job on resume_delivery.job_id=job.id left join company on job.enterprise_id=company.enterprise_id where jobseeker_id=5		
*/		

		//显示用户名
		$uid=session('uid');
		$seekers_info = M('resume_basic')->field("resume_basic.nickname")->where("uid =$uid")->select();
		$jobseekers_info= M('jobseekers')->field("photo")->where("uid =$uid")->select();//简历基本信息

        $this->assign('jobseekers_info',$jobseekers_info);		
	    $this->assign('seekers_info', $seekers_info);
		//筛选id、状态、投递时间输出数据
		$timess_info = M('resume_delivery')->field("resume_delivery.delivery_time")->where("jobseeker_id =$uid")->select();
		$times = I('times');
		if($times=='7')
		{
			$m='-7';
		}
		 else {
			$m='-60';
			}
			
		$where_all=M('resume_delivery')
		 		->field("resume_delivery.delivery_time,resume_delivery.delivery_status,job.id,job.job_name,job.enterprise_id,job.company_name,job.city,job.area,job.salary_low,job.salary_hig")
                ->join("left join job on resume_delivery.job_id=job.id")//join是关联查询
                ->where("jobseeker_id = $uid  and  (DATEDIFF(delivery_time,NOW()) >= $m )")	//	DATEDIFF(time1,time2) = time2 - time1
                ->order('delivery_time DESC')
				->select();

	


		$where_see=M('resume_delivery')
		
		 		->field("resume_delivery.delivery_time,resume_delivery.delivery_status,job.id,job.job_name,job.enterprise_id,job.company_name,job.city,job.area,job.salary_low,job.salary_hig")
                ->join("left join job on resume_delivery.job_id=job.id")//join是关联查询
                ->where("jobseeker_id = $uid and delivery_status >0 and  DATEDIFF(delivery_time,NOW()) >= $m")
                ->order('delivery_time DESC')
			    ->select();	
				
				
		$where_invite=M('resume_delivery')
		 		->field("resume_delivery.delivery_time,resume_delivery.delivery_status,job.id,job.job_name,job.enterprise_id,job.company_name,job.city,job.area,job.salary_low,job.salary_hig")
                ->join("left join job on resume_delivery.job_id=job.id")//join是关联查询
                ->where("jobseeker_id = $uid and delivery_status=2 and  DATEDIFF(delivery_time,NOW()) >= $m")
                ->order('delivery_time DESC')
				->select();					

		$where_failure=M('resume_delivery')
		 		->field("resume_delivery.delivery_time,resume_delivery.delivery_status,job.id,job.job_name,job.enterprise_id,job.company_name,job.city,job.area,job.salary_low,job.salary_hig")
                ->join("left join job on resume_delivery.job_id=job.id")//join是关联查询
                ->where("jobseeker_id = $uid and delivery_status = 3 and  DATEDIFF(delivery_time,NOW()) >= $m")
                ->order('delivery_time DESC')
				->select();	

		$where_success=M('resume_delivery')
		 		->field("resume_delivery.delivery_time,resume_delivery.delivery_status,job.id,job.job_name,job.enterprise_id,job.company_name,job.city,job.area,job.salary_low,job.salary_hig")
                ->join("left join job on resume_delivery.job_id=job.id")//join是关联查询
                ->where("jobseeker_id = $uid and delivery_status = 4 and  DATEDIFF(delivery_time,NOW()) >= $m")
                ->order('delivery_time DESC')
				->select();				
				
>>>>>>> d49043c25bec3cf4073bc386a02e6b723fb83db7
		$this->assign('times', $times);				
		$this->assign('where_all', $where_all);	
		$this->assign('where_see', $where_see);
		$this->assign('where_invite', $where_invite);		
		$this->assign('where_failure', $where_failure);			
<<<<<<< HEAD
=======
		$this->assign('where_success', $where_success);	
>>>>>>> d49043c25bec3cf4073bc386a02e6b723fb83db7
			$this->display();
		
			
		
	}
<<<<<<< HEAD
=======

>>>>>>> d49043c25bec3cf4073bc386a02e6b723fb83db7
}