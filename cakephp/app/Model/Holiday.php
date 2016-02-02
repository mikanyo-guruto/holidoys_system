<?php
    class Holiday extends AppModel {
    
		public $belongsTo = array(
		'Specialized'
			=> array(
				'className' => 'Specialized',
				'foreignKey' => 'specialized_id',
			),
		'Tuition'
			=> array(
				'className' => 'Tuition',
				'foreignKey' => 'tuition_id',
			),
		);

		public $validate = [
			'student_name' => [
				'rule' => array('minLength', 2),
				'message' => '文字数が少なすぎます'
			],

			'student_number' => [
				'rule' => array('maxLength', 8),
			],

			'school_year' => [
				'rule' => 'notEmpty'
			],

			'specialized_id' => [
				'rule' => array('maxLength', 2),
			],

			'public_holidays' => [
				'rule' => 'notEmpty'
			],

			'tuition_id' => [
				'rule' => array('maxLength', 2),
			],

			'reason' => [
				'rule' => array('minLength', 0)
			],

			'required' => true
		];	
    }