<?php
	class AppError extends ErrorHandler {
		
		function idNull($id){
			echo "IDを取得できませんでした。";
			$this->redirect('./error.ctp');
		}
	}