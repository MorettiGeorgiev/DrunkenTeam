<script type="text/javascript">
	function showElement(target){
		document.getElementById(target).style.display = 'block';
	}
	function hideElement(target){
		document.getElementById(target).style.display = 'none';
	}

	function postAll() {
		if( checkForm(document.getElementById("report-information")) ) {
			$('form').each(function(){
	        console.log(this);
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
</script>

<?php echo validation_errors(); ?>


   <form id="report-information" method="post" class="form-horizontal  col-md-10 col-sm-10 col-xs-6" onsubmit="return checkForm(this);" action="/DrunkenTeam/send/">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="names">Имена</label>  
  <div class="col-md-8">
  <input id="names" name="names" type="text" placeholder="Трите имена" class="form-control input-md" value="<?php echo set_value('name'); ?>">
  <p id="name-error" class="error-handler"></p>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Телефон</label>  
  <div class="col-md-8">
  <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md" value="<?php echo set_value('phone'); ?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Е-мейл адрес</label>  
  <div class="col-md-8">
  <input id="email" name="email" type="text" placeholder="" class="form-control input-md" value="<?php echo set_value('email'); ?>">
  <p id="email-error" class="error-handler"></p>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="reg_number">Рег. номер на МПС</label>  
  <div class="col-md-8">
  <input id="reg_number" name="reg_number" type="text" placeholder="" class="form-control input-md" value="<?php echo set_value('reg_number'); ?>">
  <span class="help-block">В случай, че МПС-то има регистрационен номер</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Допълнително описание</label>
  <div class="col-md-8">                     
    <textarea class="form-control" id="description" name="description" placeholder="Допълнителна информация относно изоставеното МПС" value="<?php echo set_value('description'); ?>"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" ></label>
  <div class="col-md-8 text-right">
    <p class="btn btn-danger" onclick='postAll();'>Изпрати сигнала</p>
  </div>
</div>

</fieldset>
<?php echo form_close(); ?>	