<?php
	class AppError extends ErrorHandler {
		
		function idNull($id){
			echo "ID‚ðŽæ“¾‚Å‚«‚Ü‚¹‚ñ‚Å‚µ‚½B";
			$this->redirect('./error.ctp');
		}
	}