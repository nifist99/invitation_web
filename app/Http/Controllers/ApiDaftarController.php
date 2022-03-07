<?php namespace App\Http\Controllers;

		use Session;
		use Request;
		use DB;
		use CRUDBooster;
		use Hash;
		use Response;

		class ApiDaftarController extends \crocodicstudio\crudbooster\controllers\ApiController {

		    function __construct() {    
				$this->table       = "cms_users";        
				$this->permalink   = "daftar";    
				$this->method_type = "post";    
		    }
		

		    public function hook_before(&$postdata) {
		        //This method will be execute before run the main process
				$data['status']='active';
				$data['id_cms_privileges']=3;
				$data['photo']=url('tema/tema1/assets/img/pria.png');
				$data['email']=$postdata['email'];
				$data['name']=$postdata['nama'];
				$data['catatan']=$postdata['catatan'];
				$data['password']=Hash::make($postdata['password']);

				$email=DB::table('cms_users')
				->where('email',$postdata['email'])
				->first();

				if($email){
					$respon['api_status']='failed';
					$respon['api_message']='email sudah ada silahkan login';
				}else{
					DB::table('cms_users')->insert($data);
					$respon['api_status']='success';
					$respon['api_message']='silahkan login';
				}

				return Response::json($respon);

		    }

		    public function hook_query(&$query) {
		        //This method is to customize the sql query

		    }

		    public function hook_after($postdata,&$result) {
		        //This method will be execute after run the main process

		    }

		}