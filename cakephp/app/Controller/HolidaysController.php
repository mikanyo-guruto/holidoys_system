<?php
	class HolidaysController extends AppController {

		public $components = array('Paginator', 'Session');
        public $autoLayout = false;

		public function index() {
			$this->autoLayout = false;
		}
		
		

		//管理者ログインページ
		public function root_login() {
			if($this->request->is('post')){
				$email = $this->request->data('Admin.email');
				$pass =  $this->request->data('Admin.password');
				
				$this->loadModel('Admin');
				//メールアドレスの確認
				$data = $this->Admin->find('first', array(
					'conditions' => array(
						'Admin.email' => $email
					))
				);
				
				//メール入力でエラーだったら
				if(!$data){
					echo "入力エラーです。";
				}else{
					//パスワードチェック
					if($this->Admin->field('password') === $pass){
						return $this->redirect("./root_list");
					}
					else{
						echo "入力エラーです。";
					}
				}
			}
		}
		
		//管理者トップページ
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

		//詳細ページ
		public function root_detail($id = null) {
            if(!$id){
                $this->cakeError('idNull');
            }

            $date = $this->Holiday->findById($id);
            $this->set('student', $date);
		}

		//登録ページ
		public function register(){
			$this->autoLayout = false;
			
			
			//授業モデルのロード
			$this->loadModel('Tuition');
			
			//授業DBの参照
			$tuition = null;
			for($i=1; $i<=6; $i++){
				$tuition[$i] = $this->Tuition->find('all', array(
					'conditions' => array(
	                	'tuition_time' => $i
	                				)
	            		)
	            );
	        }
			$this->set('tuition', $tuition);
		}

		//確認チェック関数
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

		//確認別にソートする機能
	    public function search($check) {
	        $flg = "";

	        if($this->request->is('get')){
	            $this->Session->delete('flg');

	            $flg = $check;

	            $this->Session->write('flg', $check);
	        }
	        else{
	            $flg = $this->Session->read('flg');
	        }

	        //ページネータ設定
	        $this->Paginator->settings = array(
	            'Holiday' => array(
	                'conditions' => array(
	                    'checked' => $flg),
	                'limit' => 2,
	                'order' => array(
	                    'create_time' => 'asc'),
	            )
	        );


	        $students = $this->Paginator->paginate();
	        $this->set(compact('students', 'specialized'));
    	}
}
