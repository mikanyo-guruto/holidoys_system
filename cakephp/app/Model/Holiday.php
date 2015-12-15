<?php
    class Holiday extends AppModel {
		public $belongsTo = array(
		'Specialized'
			=> array(
				'className' => 'Specialized',
				'foreignKey' => 'specialized_id',
			),
		);
    }