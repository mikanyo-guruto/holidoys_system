<?php
	class HolidaysController extends AppController {
		
		public $components = array('Paginator', 'Session');
        public $autoLayout = false;
        
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
            if(!$id){
                $this->cakeError('idNull');
            }
            
            $date = $this->Holiday->findById($id);
            $this->set('student', $date);
		}
        
        public function check($id = null) {
            if(!$id){
                $this->cakeError('idNull');
            }
            
            $update = array('Holiday' => array('id' => $id, 'checked' => 1));
            $check = array('checked');
            
            if($this->Holiday->save($update, false, $check)){
                $this->Session->setFlash(__('確認しました。'));
                return $this->redirect("./root_list");
            }
            else{
                $this->Session->setFlash(__('更新できませんでした。'));
                return $this->redirect($this->referer());
            }
        }
	}