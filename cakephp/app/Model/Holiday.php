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
				'foreignKey' => 'Tuition_id',
			),
		);
		
    }