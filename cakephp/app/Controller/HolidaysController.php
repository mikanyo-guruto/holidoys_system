<?php
	class HolidaysController extends AppController {
		
		public $components = array('Paginator', 'Session');

		public function index() {
			$this->autoLayout = false;
		}

		public function root_list() {
			/* 
			//holidayテーブルの全てを取得
			$date = $this->Holiday->find('all');
			//students(配列変数)に配列でdate(変数)を代入
			$this->set('students', $date);
			*/

			//ページネータ設定
			$this->Paginator->settings = array(
            	'Holiday' => array(
                	'limit' => 10,
                	'order' => array(
                    	'create_time' => 'asc'
                	),
                )
        	);


 			$students = $this->Paginator->paginate();
			$this->set(compact('students'));
		}

		public function root_detail_satou() {

		}

		public function register(){
				$this->autoLayout = false;
		}
	}