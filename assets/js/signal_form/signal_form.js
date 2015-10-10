	function showElement(target){
		document.getElementById(target).style.display = 'block';
	}

	function hideElement(target){
		document.getElementById(target).style.display = 'none';
	}

	function postAll() {
		if( checkForm(document.getElementById("report-information")) ) {
			$('form').each(function(){
	        	(this).submit();
	    	});

		}
	}

	function checkNames(names){
		re = /([\wа-я]+\s[\wа-я]+\s[\wа-я]+)/gi;
		error_handler = document.getElementById("name-error");
		if(names == "" || !re.test(names)) {
			error_handler.innerHTML="Моля въведете Вашите имена.";
			showElement("name-error");
			return false;
		} else {
			hideElement("name-error");
			return true;
		}
	}

	function checkEmail(email){
		error_handler = document.getElementById("email-error");
		if(email == "") {
			error_handler.innerHTML="Моля въведете Вашия имейл.";
			showElement("email-error");
			return false;
		} else {
			hideElement("email-error");
			re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
				if(!re.test(email)) {
					error_handler.innerHTML="Въведеният от вас имейл е невалиден.";
					showElement("email-error");
					return false;
				} else {
					hideElement("email-error");
					return true;
				}
		}
	}

	function checkForm(form) {
		if(checkNames(form.names.value) & checkEmail(form.email.value)){
			return true;
		} else{
			return false;
		}
	}
