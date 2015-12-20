<?php
	class HolidaysController extends AppController {
		
		public $components = array('Paginator', 'Session');

		public function index() {
			
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
                	'limit' => 2,
                	'order' => array(
                    	'create_time' => 'asc'
                	),
                )
        	);

 			$students = $this->Paginator->paginate();
			$this->set(compact('students', 'specialized'));
		}

		public function root_detail($id = null) {
			//---nullエラー処理---
            if(!$id){
            	//idがnullの時のエラー処理
            	throw new NotFoundException('idを取得できませんでした。');
            }
            //---END NULLエラー---
            $date = $this->Holiday->findById($id);
            var_dump($date);
            $student = $this->set('student', $date);
		}
	}