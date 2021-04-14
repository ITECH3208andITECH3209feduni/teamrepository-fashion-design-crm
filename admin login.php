<?php 
namespace App\Controllers\Admin;

class Login extends \App\Controllers\BaseadminController
{
	public $Data = [];
	public $table = '';
	public $tbCol = '';
	public $tbId = '';
	public function __construct()
	{
		parent::__construct();
		
	}
    public function index()
    {
    	$this->Data['title'] = 'Login';
       echo view('admin/login',$this->Data);
    }


    public function postlogin()
    {
    	$this->validation =  \Config\Services::validation();
        $this->validation->setRules([
            'username'  => ['label' => 'User ID ', 'rules' => 'required'],
            'password'  => ['label' => 'Password', 'rules' => 'required']
        ]);

        if (!$this->validation->withRequest($this->request)->run()) {
        	
          //  $this->notification->error($this->validation->listErrors());
          
           return $this->jsonlib->validationShow();
        }

        $loginResposne = $this->AdminLoginModel::doLogin($this->request->getPost('username'),$this->request->getPost('password'));
       if(empty($loginResposne['status']))
       {
       		return $this->jsonlib->errorShow($loginResposne['msg']);

       }

        return $this->jsonlib->successShow($loginResposne['msg'],['nextUrl'=>'admin/dashboard']);


        
    }


    
      public function logout()
      {
           $session = session();
           $session->destroy();
           return redirect()->to(APP_URL.'admin/login');
      }
}
