<?php
namespace App\Libraries;
use Hashids\Hashids;
use Illuminate\Database\Capsule\Manager as Capsule;
class Arraylib
{
    public $controller;
    public  $listStatus = [''=>'Select Status',1=>'Active',2=>'Inactive'];
    public $StatusShowHide = [''=>'Select Status',1=>'Yes',2=>'No'];
    public $urlType = [''=>'Select URL Type',1=>'Category',2=>'Multiple Products ',3=>'Single Product'];
    public $MetalPurityArray = [''=>'Select Purity',1=>'10 KT',2=>'12 KT',3=>'14 KT',4=>'18 KT',5=>'22 KT',6=>'24 KT'];
    public static $orderStatus = [1=>'Order Incomplete',2=>'Order Placed ',3=>'Order Placed',4=>'Order Cancel',5=>'Order Confirmed'];

    public $orderStatusMain = [1=>'Order Incomplete',2=>'Order Placed',3=>'Order Confirmed ',4=>'Order Packed',5=>'Order Dispatched',6=>'Order Delivered ',7=>'Order Cancelled'];
    public $bannerUrlStatus = [1=>'Category',2=>'Multiple Product ',3=>'Single Product'];


    public function __construct()
    {
        //parent::__construct();
        
    }
  public function makeOrderId($orderId)
  {
    $number = substr($orderId,0);
   
    return 'DIWAM' . sprintf('%06d', intval($number));
  }
    public static function showVariable($optionName)
    {
        return $this->optionName;
    }

  public static function idEncodeArraydB($id)
    {
         $row = new Hashids(APP_URL, 22);
  
        return $row->encode($id);
    }
    public function sorting()
    {
        $default = [];
        $default[''] = 'Default';
        $r = range(1,100);
        foreach ($r as $key => $value) {
            $default[$value] = $value;
        }
        return $default;
    }
    public static function idDecodeArradb($id)
    {
         $row = new Hashids(APP_URL, 22);
         return $row->decode($id)[0] ?? 0;
    }
    public function dropzoneCreateUpdate($key,$value=NULL,$optiondata)
    {
 $str = '';
  
        if($optiondata['maxFiles'] > 1)
        {
            $filename = $key.'[]';
        }else{
            $filename = $key;
        }
        
        $str .= '<div class="dropzone upload-widget" 
            data-inputname="' . $filename . '" 
            data-max-width="'.$optiondata['width'].'" 
            data-max-height="'.$optiondata['height'].'" 
            data-upload-maxfiles="'.(!empty($optiondata['maxFiles'])?$optiondata['maxFiles']:1).'" 
            data-upload-url="'.APP_URL.'admin/imageupload/uploadimage"
            data-delete-url="'.APP_URL.'admin/imageupload/filedelete"
            data-upload-type="image"
            data-upload-folder="'.$optiondata['uploadPath'].'"
            data-upload-filekey="userfile">
                <div class="dz-message needsclick">
                    Drop files here or click to upload.<br>
                </div>';

        if (!empty($value)) {

            if($optiondata['maxFiles'] > 1)
            {
                $exp = explode('{+}',$value);

                foreach ($exp as $userkey => $imgame) {
                    # code...
                
                   $img = $optiondata['uploadPath'] . $imgame;
            // print_r($img)
                    if (is_file($img)) {

                        $img = $img;
                        $str .= '<div class="dz-preview dz-processing dz-image-preview dz-complete">
                            <div class="dz-image">
                                <img data-dz-thumbnail="" alt="' . $imgame . '" src="' . $img . '">
                            </div>
                            <div class="dz-details">
                                <div class="dz-filename"><span data-dz-name="">' . $imgame . '</span></div>
                            </div>

                            <div class="dropzone-ajaxdata"><div class="dz-remove dz-deletefile" style="" title="Delete"> X </div><input type="hidden" value="' . $imgame . '" class="dz-serveruploadfile" name="' . $filename . '"></div>
                        </div>';
                    }
                }
            }else{
                   $img = $optiondata['uploadPath'] . $value;
            // print_r($img)
                if (is_file($img)) {

                    $img = $img;
                    $str .= '<div class="dz-preview dz-processing dz-image-preview dz-complete">
                        <div class="dz-image">
                            <img data-dz-thumbnail="" alt="' . $value . '" src="' . $img . '">
                        </div>
                        <div class="dz-details">
                            <div class="dz-filename"><span data-dz-name="">' . $value . '</span></div>
                        </div>

                        <div class="dropzone-ajaxdata"><div class="dz-remove dz-deletefile" style="" title="Delete"> X </div><input type="hidden" value="' . $value . '" class="dz-serveruploadfile" name="' . $filename . '"></div>
                    </div>';
                }
            }

           
        }

        $str .= '<div class="fallback"><input type="file" name="userfile"></div>

            </div>';
       
        return $str;

  
    }

    public static function getloginData()
    {
        
        if(!empty($_SESSION['loggedInKey']))
        {
            $decodeSlug = self::idDecodeArradb($_SESSION['loggedInKey']);
         
            $getRecord = \App\Models\Admin\SellersModel::find($decodeSlug);
           
            return $getRecord;
        }else{
            return false;
        }
    }
}
