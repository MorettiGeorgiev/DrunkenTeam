
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

	function checkForm(form) {
		flag = 0;
		re = /([\wа-я]+\s[\wа-я]+\s[\wа-я]+)/gi;
		error_handler = document.getElementById("name-error");
		if(form.names.value == "" || !re.test(form.names.value)) {
			error_handler.innerHTML="Моля въведете Вашите имена.";
			showElement("name-error");
			form.names.focus();
			return false;
		} else {
			hideElement("name-error");
			flag = 1;
		}

		
		error_handler = document.getElementById("email-error");
		if(form.email.value == "") {
			// alert("Error: Моля въведете Вашия имейл.");
			error_handler.innerHTML="Моля въведете Вашия имейл.";
			showElement("email-error");
			form.email.focus();
			return false;
		} else {
			hideElement("email-error");
			return true;
		}

		re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		if(!re.test(form.email.value)) {
			error_handler.innerHTML="Въведеният от вас имейл е невалиден.";
			showElement("email-error");
			form.email.focus();
			return false;
		} else {
			hideElement("email-error");
			flag = 1;
		}
		
		if(flag){
			return true;
		}
		else
			return false;
	}
