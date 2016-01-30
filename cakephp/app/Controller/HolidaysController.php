<?php

  class HolidaysController extends AppController
  {
    public $components = array('Paginator', 'Session');

    public function index()
    {
    	$this->layout = 'Holidays/layout';
    }


    //管理者ログインページ
    public function root_login()
    {
    	$this->layout = 'Holidays/layout';

    	if ($this->request->is('post')) {
	    	$email = $this->request->data('Admin.email');
	   		$pass = $this->request->data('Admin.password');

	        $this->loadModel('Admin');
	        //メールアドレスの確認
	        $data = $this->Admin->find('first', array(
	                'conditions' => array(
	                    'Admin.email' => $email
	                )
	            )
	        );

	        //メール入力でエラーだったら
	        if (!$data) {
	        	$this->Session->setFlash(__('名前かパスワードが間違えています。'), 'default', array('class' => 'alert alert-danger'));
	        	return $this->redirect("./root_login");
	        } else {
	        	//パスワードチェック
	        	if ($this->Admin->field('password') === $pass) {
	        		return $this->redirect("./root_list");
	        	} else {
	        		$this->Session->setFlash(__('名前かパスワードが間違えています。'), 'default', array('class' => 'alert alert-danger'));
	        	}
	        }
      	}
    }

    //管理者トップページ
    public function root_list()
    {
    	$this->layout = false;
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
    	$this->set(compact('students', 'specialized'));
    }

    //詳細ページ
    public function root_detail($id = null)
    {
    	$this->layout = false;

    	if (!$id) {
    		$this->cakeError('idNull');
    	}

    	$date = $this->Holiday->findById($id);
    	$this->set('student', $date);
    }

    // 登録ページ
    public function register()
    {
    	$this->layout = 'Holidays/layout';

    	// 送信を押した後の処理
    	if ($this->request->is('post')) {
        $data = $this->request->data;

	        if (
	            $data['Holiday']['student_name'] == "" ||
	            $data['Holiday']['student_number'] == "" ||
	            $data['Holiday']['school_year'] == "" ||
	            $data['Holiday']['specialized_id'] == "" ||
	            $data['Holiday']['tuition_id'] == "" ||
	            $data['Holiday']['day'] == "" ||
	            $data['Holiday']['month'] == "" ||
	            $data['Holiday']['reason'] == ""
	        ) {
	        	$this->Session->setFlash(__('未入力の項目があります。'), 'default', array('class' => 'alert alert-danger'));
	        	return $this->redirect($this->referer());
	        } else {
	        	// 校欠日をdate形式に変換
	        	$y = date("Y");
	        	$m = $data['Holiday']['month'];
	        	$d = $data['Holiday']['day'];
	        	$day_format = $y . '-' . $m . '-' . $d;

	        	$day = date($day_format);
	        	$data['Holiday']['public_holidays'] = $day;

	        	// もし保存に成功したら
	        	if ($this->Holiday->save($data)) {
	            	$this->Session->setFlash(__('登録が完了しました。'), 'default', array('class' => 'alert alert-success'));
	            	return $this->redirect('index');
	        	} else {
	        		$this->Session->setFlash(__('登録できませんでした。'), 'default', array('class' => 'alert alert-danger'));
	        		return $this->redirect($this->referer());
	        	}
	        }
	    }
    	// 入力画面
    	//　授業名の引用
	    else {
	    	// 授業モデルのロード
	        $this->loadModel('Tuition');

	        // 授業DBの参照
	        $tuition = null;
	        for ($i = 1; $i <= 6; $i++) {
	          $tuition[$i] = $this->Tuition->find('all', array(
	                  'conditions' => array(
	                      'tuition_time' => $i
	                  )
	              )
	          );
	        }
	        $this->set('tuition', $tuition);
	    }
    }

    //確認チェック関数
    public function check($id = null)
    {
    	if (!$id) {
    		$this->cakeError('idNull');
      	}

    	$update = array('Holiday' => array('id' => $id, 'checked' => 1));
    	$check = array('checked');

    	if ($this->Holiday->save($update, false, $check)) {
        	$this->Session->setFlash(__('確認しました。', 'default', array('class' => 'alert alert-success')));
        	return $this->redirect("./root_list");
    	} else {
        	$this->Session->setFlash(__('更新できませんでした。', 'default', array('class' => 'alert alert-danger')));
        	return $this->redirect($this->referer());
    	}
    }

    //確認別にソートする機能
    public function search($check)
    {
    	$this->layout = false;

    	$flg = "";

    	if ($this->request->is('get')) {
        	$this->Session->delete('flg');
    		
    		$flg = $check;
	        
	        $this->Session->write('flg', $check);
    	} else {
        	$flg = $this->Session->read('flg');
    	}

	    //ページネータ設定
	    $this->Paginator->settings = array(
	        'Holiday' => array(
	            'conditions' => array(
	                'checked' => $flg
	            ),
	            'limit' => 10,
	            'order' => array(
	                'create_time' => 'asc'
	            ),
	        )
	    );

    	$students = $this->Paginator->paginate();
    	$this->set(compact('students', 'specialized'));
    }
}
