<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Office extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
            
        $this->load->model('Office_model');
        
    }


	// Form Views Code


	public function index()
	{
        $this->load->view('common/header');
		$this->load->view('Office_view');
		$this->load->view('common/footer');

	}

	public function index1()
	{
        $this->load->view('common/header');
		$this->load->view('Emp_view/Emp_Dtls');
		$this->load->view('common/footer');

	}

	
	public function index2()
	{
        $this->load->view('common/header');
		$this->load->view('Status_view/Status_Dtls');
		$this->load->view('common/footer');

	}

	public function index3()
	{
        $this->load->view('common/header');
		$this->load->view('Remainder_view/Remainder_Dtls');
		$this->load->view('common/footer');

	}

	public function index4()
	{
        $this->load->view('common/header');
		$this->load->view('Priority_view/Priority_Dtls');
		$this->load->view('common/footer');

	}

	public function index5()
	{
        $this->load->view('common/header');
		$this->load->view('Task_view/Task_Dtls');
		$this->load->view('common/footer');

	}

	public function index6()
	{
        $this->load->view('common/header');
		$this->load->view('Billing_view/Billing_Dtls');
		$this->load->view('common/footer');

	}

	public function index7()
	{
        $this->load->view('common/header');
		$this->load->view('ProjAcces_view/ProjAccess_Dtls');
		$this->load->view('common/footer');

	}

	public function index8()
	{
        $this->load->view('common/header');
		$this->load->view('Budget_view/Budget_Dtls');
		$this->load->view('common/footer');

	}

	public function index9()
	{
        $this->load->view('common/header');
		$this->load->view('ProjType_view/ProjType_Dtls');
		$this->load->view('common/footer');

	}

	public function index10()
	{
        $this->load->view('common/header');
		$this->load->view('Tags_view/Tags_Dtls');
		$this->load->view('common/footer');

	}


	


	// Table Views Code


	public function create1()
	{
		$data['data']=$this->Office_model->getallEmp();

		$this->load->view('common/header');
		$this->load->view('Emp_view/Emp_Table',$data);
		$this->load->view('common/footer');
	}


	public function create2()
	{
		$data['data']=$this->Office_model->getallStatus();

		$this->load->view('common/header');
		$this->load->view('Status_view/Status_Table',$data);
		$this->load->view('common/footer');
	}


	public function create3()
	{
		$data['data']=$this->Office_model->getallRemainder();

		$this->load->view('common/header');
		$this->load->view('Remainder_view/Remainder_Table',$data);
		$this->load->view('common/footer');
	}


	public function create4()
	{
		$data['data']=$this->Office_model->getallPriority();

		$this->load->view('common/header');
		$this->load->view('Priority_view/Priority_Table',$data);
		$this->load->view('common/footer');
	}


	public function create5()
	{
		$data['data']=$this->Office_model->getallTask();

		$this->load->view('common/header');
		$this->load->view('Task_view/Task_Table',$data);
		$this->load->view('common/footer');
	}


	public function create6()
	{
		$data['data']=$this->Office_model->getallBilling();

		$this->load->view('common/header');
		$this->load->view('Billing_view/Billing_Table',$data);
		$this->load->view('common/footer');
	}


	public function create7()
	{
		$data['data']=$this->Office_model->getallProjAcc();

		$this->load->view('common/header');
		$this->load->view('ProjAcces_view/ProjAccess_Table',$data);
		$this->load->view('common/footer');
	}

	public function create8()
	{
		$data['data']=$this->Office_model->getallBudget();

		$this->load->view('common/header');
		$this->load->view('Budget_view/Budget_Table',$data);
		$this->load->view('common/footer');
	}

	public function create9()
	{
		$data['data']=$this->Office_model->getallProjType();

		$this->load->view('common/header');
		$this->load->view('ProjType_view/ProjType_Table',$data);
		$this->load->view('common/footer');
	}

	public function create10()
	{
		$data['data']=$this->Office_model->getallTags();

		$this->load->view('common/header');
		$this->load->view('Tags_view/Tags_Table',$data);
		$this->load->view('common/footer');

	}

	

// Form's Data Save Functions


	function insertStatus(){
      	 $StNm= $this->input->post('StNm'); 
		 $favcolor= $this->input->post('favcolor');
		
		  $fields=array('StatusName	'=>$StNm,
		                 'ColorCode'=>$favcolor,
		                 	 
			    'created_date'=>date('Y-m-d H:i:s'),
	  	  	    'created_by'=>1
			);
		$this->Office_model->insert($fields);

      }   

	  function insertRemainder(){
		$RemainNm= $this->input->post('RemainNm'); 
 
	   $fields=array('RemainName'=>$RemainNm,
					  	  
			 'created_date'=>date('Y-m-d H:i:s'),
				 'created_by'=>1
		 );
	 $this->Office_model->insert1($fields);

   }   


		function insertPriority(){
			$PrioNm= $this->input->post('PrioNm'); 

		$fields=array('PrioName'=>$PrioNm,		
						
				'created_date'=>date('Y-m-d H:i:s'),
					'created_by'=>1
			);
		$this->Office_model->insert2($fields);

        }   


		function insertTask(){
			$TaskNm= $this->input->post('TaskNm'); 

		$fields=array('TaskName'=>$TaskNm,		
						
				'created_date'=>date('Y-m-d H:i:s'),
					'created_by'=>1
			);
		$this->Office_model->insert3($fields);

        }  


		function insertBilling(){
			$BillNm= $this->input->post('BillNm'); 

		$fields=array('BillName'=>$BillNm,		
						
				'created_date'=>date('Y-m-d H:i:s'),
					'created_by'=>1
			);
		$this->Office_model->insert4($fields);

        }  


		function insertProjAccess(){
			$proj_acc= $this->input->post('proj_acc'); 

		$fields=array('ProjAccName'=>$proj_acc,		
						
				'created_date'=>date('Y-m-d H:i:s'),
					'created_by'=>1
			);
		$this->Office_model->insert5($fields);

        }  

		function insertBudget(){
			$BudgNm= $this->input->post('BudgNm'); 

		$fields=array('BudgetName'=>$BudgNm,		
						
				'created_date'=>date('Y-m-d H:i:s'),
					'created_by'=>1
			);
		$this->Office_model->insert6($fields);

        } 
		
		function insertProjType(){
			$projtype= $this->input->post('projtype'); 

		$fields=array('ProjTypeName'=>$projtype,		
						
				'created_date'=>date('Y-m-d H:i:s'),
					'created_by'=>1
			);
		$this->Office_model->insert7($fields);

        }  

		function insertTags(){
			$TagNm= $this->input->post('TagNm'); 

		$fields=array('TagsName'=>$TagNm,		
						
				'created_date'=>date('Y-m-d H:i:s'),
					'created_by'=>1
			);
		$this->Office_model->insert8($fields);

        }  
}
