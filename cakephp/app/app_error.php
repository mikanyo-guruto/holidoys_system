<?php
	class AppError extends ErrorHandler {
		
		function idNull($id){
			echo "ID���擾�ł��܂���ł����B";
			$this->redirect('./error.ctp');
		}
	}