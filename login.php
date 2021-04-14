<?php 
namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\HTTP\Response;
use Illuminate\Database\Capsule\Manager as Capsule;
class LoginModel extends Model
{

    protected $table      = 'public_user';
    protected $primaryKey = 'p_user_id';
    public $loginStatus = false;
    public $loginKey ;
    public $loginRow = [];
    public $loginStatusData = [];


    public function findKeyId()
    {

      
         $session = session();
        if(!empty($this->isLoginCheck()))
        {
            $this->loginKey = $session->get('userloginkey');
            $this->loginStatusData = ['status'=>true,'keyId'=>$this->loginKey];
            return $this->loginStatusData;
        }
        if(get_cookie('systemkey'))
        {
                $this->loginKey= get_cookie('systemkey');
                $this->loginStatusData = ['status'=>false,'keyId'=>$this->loginKey];
                 return $this->loginStatusData;
        }       
        if(empty($this->loginKey))
        {
                $this->loginKey=random_string('alnum', 25);
                set_cookie('systemkey',$this->loginKey, 86500);
                $this->loginStatusData = ['status'=>false,'keyId'=>$this->loginKey];
                 return $this->loginStatusData;
        }
       
    }
   public function isLoginCheck()
   {
      $session = session();

      if(!empty($session->get('userloginkey')))
      {
        return true;
      }else{
        return false;
      }
   }

   public function checkCredentials($data)
   {
      $Res = ['status'=>false,'msg'=>'','data'=>[]];
      if(empty($data))
        {
          $Res['msg'] = 'Inputs not found';
          return $Res;
        }

      $find = Capsule::table('public_user')->where($data)->first();
      if(empty($find))
      {
        $Res['msg'] = 'Invalid Credentials';
        return $Res;
      }
       $session = session();
       $uncodedKey = idEncode($find->p_user_id);
       $array = ['userloginkey'=>$uncodedKey];
       $session->set($array);
      
       return $Res = ['status'=>true,'msg'=>'Login Success'];
   }

   public function moveWishlist($userid)
   {
       $session = session();
      $findList = Capsule::table('wishlist')->where('wish_user_id',get_cookie('systemkey'))->update(['wish_user_id'=>$session->get('userloginkey'),'wish_login_status'=>1]);
     
   }
   public function movecartdata($userid)
   {
    $session = session();
      $findList = Capsule::table('cart')->where('cart_user_id',get_cookie('systemkey'))->update(['cart_user_id'=>$session->get('userloginkey'),'cart_login_status'=>1]);
   }

   public static function findRecords()
   {

      $session = session();
  
       if(empty($session->get('userloginkey')))
        {
         return false;
        }

        $decode = idDecode($session->get('userloginkey'));
      $find = Capsule::table('public_user')->where(['p_user_id'=>$decode])->first();
      if(empty($find))
      {
        return false;

      }
      return $find;
   }

   public static function logout($redirect = true)
   {
    $session = session();
     $session->remove('userloginkey');
        if ($redirect) {
            header('Location:' . base_url('/login'));
            exit();
        }
   }
}
