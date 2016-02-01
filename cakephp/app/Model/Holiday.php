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
					'student_number' => [
							'rule' => array('maxLength', 8),
							'required' => true
					]
			];
		
    }