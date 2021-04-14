<?php 
namespace App\Controllers\Admin;

class Dashboard extends \App\Controllers\BaseadminController
{
	public $Data = [];
	public $table = 'product';
	public $title = "Home ";
	public $tbId = 'p_id';
	public $tbCol = 'p_name';
  public $viewPath = 'admin/component/product/';
	public $path = 'admin/component/product';
	public function __construct()
	{
		parent::__construct();
       	isLoginCheck();
   		$this->Data['loginData'] = \App\Libraries\Arraylib::getloginData();;
		$this->Data['path'] = $this->path;
		$this->Data['BreadcrumbBefore'] = 'Dashboard';
		$this->Data['Breadcrumb'] = $this->title;

	    $this->Data['editCreate'] = $this->path.'/update/';
	    $this->Data['viewCreate'] = $this->path.'/show/';

	    $this->CategoryModel = new \App\Models\Admin\CategoryModel;
	    $this->ProductModel = new \App\Models\Admin\ProductModel;
	  $this->Data['tbId'] = $this->tbId;
	  $this->Data['tbCol'] = $this->tbCol;

}
    public function index()
    {
       $this->Data['title'] = 'Dashboard';
       echo view('admin/template/header',$this->Data);
       echo view('admin/dashboard/index',$this->Data);
       echo view('admin/template/footer',$this->Data);
    }
}
