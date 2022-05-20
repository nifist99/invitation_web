<?php namespace App\Http\Controllers;

	use Session;
	use Request;
	use DB;
	use CRUDBooster;

	class AdminDayWeddingController extends \crocodicstudio\crudbooster\controllers\CBController {

	    public function cbInit() {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "nama";
			$this->limit = "20";
			$this->orderby = "id,desc";
			$this->global_privilege = false;
			$this->button_table_action = true;
			$this->button_bulk_action = true;
			$this->button_action_style = "button_icon";
			$this->button_add = true;
			$this->button_edit = true;
			$this->button_delete = true;
			$this->button_detail = true;
			$this->button_show = true;
			$this->button_filter = true;
			$this->button_import = false;
			$this->button_export = false;
			$this->table = "day_wedding";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Login Users","name"=>"id_cms_users","join"=>"cms_users,name"];
			$this->col[] = ["label"=>"Tema Undangan","name"=>"id_day_tema","join"=>"day_tema,nama"];
			$this->col[] = ["label"=>"Music","name"=>"id_day_music","join"=>"day_music,nama"];
			$this->col[] = ["label"=>"Nama","name"=>"nama"];
			$this->col[] = ["label"=>"Url Web","name"=>"url_web"];
			$this->col[] = ["label"=>"Full URL","name"=>"url_web","callback"=>function($row) {
				return '<a href="'.url('wedding/'.$row->url_web).'" target="_blank">'.url('wedding/'.$row->url_web).'</a>';
				}];
			$this->col[] = ["label"=>"Status","name"=>"status","callback"=>function($row){
				if ($row->status=='active') 
				{
					return '<div class="btn-group">
					<button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
						active <span class="caret"></span>
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a onclick="active('.$row->id.')" style="cursor:pointer;color:blue">active</a>
						</li>
						<li>
							<a onclick="notactive('.$row->id.')" style="cursor:pointer;color:red">notactive</a>
						</li>
						<li>
							<a onclick="waiting('.$row->id.')" style="cursor:pointer;color:yellow">waiting</a>
						</li>
					</ul>
					</div>';
				}elseif($row->status=='notactive'){
					return '<div class="btn-group">
					<button type="button" class="btn btn-danger btn-xs dropdown-toggle" data-toggle="dropdown">
						notactive <span class="caret"></span>
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a onclick="active('.$row->id.')" style="cursor:pointer;color:blue">active</a>
						</li>
						<li>
							<a onclick="notactive('.$row->id.')" style="cursor:pointer;color:red">notactive</a>
						</li>
						<li>
							<a onclick="waiting('.$row->id.')" style="cursor:pointer;color:yellow">waiting</a>
						</li>
					</ul>
					</div>';
				}else{
					return '<div class="btn-group">
					<button type="button" class="btn btn-warning btn-xs dropdown-toggle" data-toggle="dropdown">
						waiting <span class="caret"></span>
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a onclick="active('.$row->id.')" style="cursor:pointer;color:blue">active</a>
						</li>
						<li>
							<a onclick="notactive('.$row->id.')" style="cursor:pointer;color:red">notactive</a>
						</li>
						<li>
							<a onclick="waiting('.$row->id.')" style="cursor:pointer;color:yellow">waiting</a>
						</li>
					</ul>
					</div>';
				}
			}];
			$this->col[] = ["label"=>"Foto Background","name"=>"foto","image"=>true];
			$this->col[] = ["label"=>"Video","name"=>"video","file"=>true];
			# END COLUMNS DO NOT REMOVE THIS LINE

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
			$this->form[] = ['label'=>'Login Users','name'=>'id_cms_users','type'=>'select2','validation'=>'required|integer|min:0','width'=>'col-sm-10','datatable'=>'cms_users,name','datatable_where'=>'id_cms_privileges =3'];
			$this->form[] = ['label'=>'Tema Undangan','name'=>'id_day_tema','type'=>'select2','validation'=>'required|integer|min:0','width'=>'col-sm-10','datatable'=>'day_tema,nama'];
			$this->form[] = ['label'=>'Music','name'=>'id_day_music','type'=>'select2','validation'=>'required|integer|min:0','width'=>'col-sm-10','datatable'=>'day_music,nama'];
			$this->form[] = ['label'=>'Nama','name'=>'nama','type'=>'text','validation'=>'required|string|min:1|max:5000','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Url Web','name'=>'url_web','type'=>'text','validation'=>'required|string|min:1|max:5000','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Video Url','name'=>'video_url','type'=>'text','validation'=>'string','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Alamat','name'=>'alamat','type'=>'textarea','validation'=>'required|string|min:1|max:5000','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Latitude','name'=>'latitude','type'=>'text','validation'=>'|string|min:1|max:5000','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Longitude','name'=>'longitude','type'=>'text','validation'=>'|string|min:1|max:5000','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Tanggal Pernikahan','name'=>'tanggal','type'=>'date','validation'=>'date','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Tanggal Berakhir','name'=>'end_tanggal','type'=>'date','validation'=>'date','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Hp','name'=>'hp','type'=>'number','validation'=>'|numeric','width'=>'col-sm-10','placeholder'=>'You can only enter the number only'];
			$this->form[] = ['label'=>'Waktu Akad','name'=>'waktu_akad','type'=>'time','validation'=>'required|date_format:H:i:s','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Waktu Resepsi','name'=>'waktu_resepsi','type'=>'time','validation'=>'|date_format:H:i:s','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Foto Background','name'=>'foto','type'=>'upload','validation'=>'required|image','width'=>'col-sm-10'];
			
			$this->form[] = ['label'=>'Video','name'=>'video','type'=>'upload','validation'=>'','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Resepsi Status','name'=>'resepsi_status','type'=>'select','dataenum'=>'active;notactive'];
			$this->form[] = ['label'=>'Ucapan Atas','name'=>'ucapan_atas','type'=>'textarea','validation'=>'string|min:1|max:5000','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Ucapan Bawah','name'=>'ucapan_bawah','type'=>'textarea','validation'=>'string|min:1|max:5000','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Favicon','name'=>'favicon','type'=>'upload','validation'=>'','width'=>'col-sm-10'];
			# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ["label"=>"Day Tema","name"=>"id_day_tema","type"=>"select2","required"=>TRUE,"validation"=>"required|integer|min:0","datatable"=>"day_tema,id"];
			//$this->form[] = ["label"=>"Day Music","name"=>"id_day_music","type"=>"select2","required"=>TRUE,"validation"=>"required|integer|min:0","datatable"=>"day_music,id"];
			//$this->form[] = ["label"=>"Nama","name"=>"nama","type"=>"textarea","required"=>TRUE,"validation"=>"required|string|min:5|max:5000"];
			//$this->form[] = ["label"=>"Url","name"=>"url","type"=>"textarea","required"=>TRUE,"validation"=>"required|string|min:5|max:5000"];
			//$this->form[] = ["label"=>"Alamat","name"=>"alamat","type"=>"textarea","required"=>TRUE,"validation"=>"required|string|min:5|max:5000"];
			//$this->form[] = ["label"=>"Latitude","name"=>"latitude","type"=>"hidden","required"=>TRUE,"validation"=>"required|string|min:5|max:5000"];
			//$this->form[] = ["label"=>"Longitude","name"=>"longitude","type"=>"hidden","required"=>TRUE,"validation"=>"required|string|min:5|max:5000"];
			//$this->form[] = ["label"=>"Tanggal","name"=>"tanggal","type"=>"date","required"=>TRUE,"validation"=>"required|date"];
			//$this->form[] = ["label"=>"Hp","name"=>"hp","type"=>"number","required"=>TRUE,"validation"=>"required|numeric","placeholder"=>"You can only enter the number only"];
			//$this->form[] = ["label"=>"Waktu Akad","name"=>"waktu_akad","type"=>"time","required"=>TRUE,"validation"=>"required|date_format:H:i:s"];
			//$this->form[] = ["label"=>"Waktu Resepsi","name"=>"waktu_resepsi","type"=>"time","required"=>TRUE,"validation"=>"required|date_format:H:i:s"];
			//$this->form[] = ["label"=>"Status","name"=>"status","type"=>"textarea","required"=>TRUE,"validation"=>"required|string|min:5|max:5000"];
			# OLD END FORM

			/* 
	        | ---------------------------------------------------------------------- 
	        | Sub Module
	        | ----------------------------------------------------------------------     
			| @label          = Label of action 
			| @path           = Path of sub module
			| @foreign_key 	  = foreign key of sub table/module
			| @button_color   = Bootstrap Class (primary,success,warning,danger)
			| @button_icon    = Font Awesome Class  
			| @parent_columns = Sparate with comma, e.g : name,created_at
	        | 
	        */
	        $this->sub_module = array();
			$this->sub_module[] = ['label'=>'Wedding Biodata','path'=>'day_wedding_data','parent_columns'=>'nama','foreign_key'=>'id_day_wedding','button_color'=>'success','button_icon'=>'fa fa-users'];
			$this->sub_module[] = ['label'=>'Wedding Foto','path'=>'day_wedding_foto','parent_columns'=>'nama','foreign_key'=>'id_day_wedding','button_color'=>'info','button_icon'=>'fa fa-image'];
			$this->sub_module[] = ['label'=>'Wedding Tamu Undangan','path'=>'day_wedding_tamu','parent_columns'=>'nama','foreign_key'=>'id_day_wedding','button_color'=>'danger','button_icon'=>'fa fa-list'];
			$this->sub_module[] = ['label'=>'Pesan Online','path'=>'day_wedding_pesan','parent_columns'=>'nama','foreign_key'=>'id_day_wedding','button_color'=>'primary','button_icon'=>'fa fa-envelope-o'];
			$this->sub_module[] = ['label'=>'Kondangan Online','path'=>'day_wedding_gift','parent_columns'=>'nama','foreign_key'=>'id_day_wedding','button_color'=>'warning','button_icon'=>'fa fa-money'];
	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add More Action Button / Menu
	        | ----------------------------------------------------------------------     
	        | @label       = Label of action 
	        | @url         = Target URL, you can use field alias. e.g : [id], [name], [title], etc
	        | @icon        = Font awesome class icon. e.g : fa fa-bars
	        | @color 	   = Default is primary. (primary, warning, succecss, info)     
	        | @showIf 	   = If condition when action show. Use field alias. e.g : [id] == 1
	        | 
	        */
	        $this->addaction = array();
			


	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add More Button Selected
	        | ----------------------------------------------------------------------     
	        | @label       = Label of action 
	        | @icon 	   = Icon from fontawesome
	        | @name 	   = Name of button 
	        | Then about the action, you should code at actionButtonSelected method 
	        | 
	        */
	        $this->button_selected = array();

	                
	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add alert message to this module at overheader
	        | ----------------------------------------------------------------------     
	        | @message = Text of message 
	        | @type    = warning,success,danger,info        
	        | 
	        */
	        $this->alert        = array();
	                

	        
	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add more button to header button 
	        | ----------------------------------------------------------------------     
	        | @label = Name of button 
	        | @url   = URL Target
	        | @icon  = Icon from Awesome.
	        | 
	        */
	        $this->index_button = array();



	        /* 
	        | ---------------------------------------------------------------------- 
	        | Customize Table Row Color
	        | ----------------------------------------------------------------------     
	        | @condition = If condition. You may use field alias. E.g : [id] == 1
	        | @color = Default is none. You can use bootstrap success,info,warning,danger,primary.        
	        | 
	        */
	        $this->table_row_color = array();     	          

	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | You may use this bellow array to add statistic at dashboard 
	        | ---------------------------------------------------------------------- 
	        | @label, @count, @icon, @color 
	        |
	        */
	        $this->index_statistic = array();



	        /*
	        | ---------------------------------------------------------------------- 
	        | Add javascript at body 
	        | ---------------------------------------------------------------------- 
	        | javascript code in the variable 
	        | $this->script_js = "function() { ... }";
	        |
	        */
	        $this->script_js = NULL;
			$this->script_js = "
			function active(id){
				swal({
					title: 'Change Status active ?',
					type:'info',
					showCancelButton:true,
					allowOutsideClick:true,
					confirmButtonColor: '#DD6B55',
					confirmButtonText: 'Yes',
					cancelButtonText: 'No',
					closeOnConfirm: false
				}, function(){
					location.href = '".CRUDBooster::mainpath("active/")."'+id;

				});
			};

			function notactive(id){
				swal({
					title: 'Change Status notactive ?',
					type:'info',
					showCancelButton:true,
					allowOutsideClick:true,
					confirmButtonColor: '#DD6B55',
					confirmButtonText: 'Yes',
					cancelButtonText: 'No',
					closeOnConfirm: false
				}, function(){
					location.href = '".CRUDBooster::mainpath("notactive/")."'+id;
				});
			};
			
			function waiting(id){
				swal({
					title: 'Change Status Waiting ?',
					type:'info',
					showCancelButton:true,
					allowOutsideClick:true,
					confirmButtonColor: '#DD6B55',
					confirmButtonText: 'Yes',
					cancelButtonText: 'No',
					closeOnConfirm: false
				}, function(){
					location.href = '".CRUDBooster::mainpath("waiting/")."'+id;
				});
			};
			";


            /*
	        | ---------------------------------------------------------------------- 
	        | Include HTML Code before index table 
	        | ---------------------------------------------------------------------- 
	        | html code to display it before index table
	        | $this->pre_index_html = "<p>test</p>";
	        |
	        */
	        $this->pre_index_html = null;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include HTML Code after index table 
	        | ---------------------------------------------------------------------- 
	        | html code to display it after index table
	        | $this->post_index_html = "<p>test</p>";
	        |
	        */
	        $this->post_index_html = null;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include Javascript File 
	        | ---------------------------------------------------------------------- 
	        | URL of your javascript each array 
	        | $this->load_js[] = asset("myfile.js");
	        |
	        */
	        $this->load_js = array();
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Add css style at body 
	        | ---------------------------------------------------------------------- 
	        | css code in the variable 
	        | $this->style_css = ".style{....}";
	        |
	        */
	        $this->style_css = NULL;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include css File 
	        | ---------------------------------------------------------------------- 
	        | URL of your css each array 
	        | $this->load_css[] = asset("myfile.css");
	        |
	        */
	        $this->load_css = array();
	        
	        
	    }


	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for button selected
	    | ---------------------------------------------------------------------- 
	    | @id_selected = the id selected
	    | @button_name = the name of button
	    |
	    */
	    public function actionButtonSelected($id_selected,$button_name) {
	        //Your code here
	            
	    }


	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate query of index result 
	    | ---------------------------------------------------------------------- 
	    | @query = current sql query 
	    |
	    */
	    public function hook_query_index(&$query) {
	        //Your code here
	        $id_cms_users=CRUDBooster::myId();
	        $cek=DB::table('cms_users')->where('id',$id_cms_users)->first();
	        if($cek->id_cms_privileges==3){
	        $query->where('day_wedding.id_cms_users',$id_cms_users)
	               ->where('day_wedding.status','active');
	        }
	            
	    }

	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate row of index table html 
	    | ---------------------------------------------------------------------- 
	    |
	    */    
	    public function hook_row_index($column_index,&$column_value) {	        
	    	//Your code here
	    }

	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate data input before add data is execute
	    | ---------------------------------------------------------------------- 
	    | @arr
	    |
	    */
	    public function hook_before_add(&$postdata) {        
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after add public static function called 
	    | ---------------------------------------------------------------------- 
	    | @id = last insert id
	    | 
	    */
	    public function hook_after_add($id) {        
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate data input before update data is execute
	    | ---------------------------------------------------------------------- 
	    | @postdata = input post data 
	    | @id       = current id 
	    | 
	    */
	    public function hook_before_edit(&$postdata,$id) {        
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after edit public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_after_edit($id) {
	        //Your code here 

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command before delete public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_before_delete($id) {
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after delete public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_after_delete($id) {
	        //Your code here

	    }

		public function getActive($id){

	    	$status['status']="active";

	    	$cek=DB::table('day_wedding')->where('id',$id)->update($status);

	    	 if($cek !=null) {				
		    $res = redirect()->back()->with(["message"=>"Succesfully change status",'message_type'=>'success'])->withInput();
		    }else{
		    $res = redirect()->back()->with(["message"=>"Error change status",'message_type'=>'warning'])->withInput();
		    	}
		    		\Session::driver()->save();
		    	$res->send();
		    	exit();

	    }

		public function getNotactive($id){

	    	$status['status']="notactive";

	    	$cek=DB::table('day_wedding')->where('id',$id)->update($status);

	    	 if($cek !=null) {				
		    $res = redirect()->back()->with(["message"=>"Succesfully change status",'message_type'=>'success'])->withInput();
		    }else{
		    $res = redirect()->back()->with(["message"=>"Error change status",'message_type'=>'warning'])->withInput();
		    	}
		    		\Session::driver()->save();
		    	$res->send();
		    	exit();

	    }

		public function getWaiting($id){

	    	$status['status']="waiting";

	    	$cek=DB::table('day_wedding')->where('id',$id)->update($status);

	    	 if($cek !=null) {				
		    $res = redirect()->back()->with(["message"=>"Succesfully change status",'message_type'=>'success'])->withInput();
		    }else{
		    $res = redirect()->back()->with(["message"=>"Error change status",'message_type'=>'warning'])->withInput();
		    	}
		    		\Session::driver()->save();
		    	$res->send();
		    	exit();

	    }



	    //By the way, you can still create your own method in here... :) 


	}