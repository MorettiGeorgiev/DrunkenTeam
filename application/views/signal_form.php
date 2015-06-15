<script type="text/javascript" src="<?php echo base_url() ?>assets/js/signal_form/signal_form.js"></script>
<?php echo validation_errors(); ?>


   <form id="report-information" method="post" class="form-horizontal  col-md-10 col-sm-10 col-xs-6" onsubmit="return checkForm(this);" action="/DrunkenTeam/send/">
<fieldset>

<!-- Form Name -->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="names">Трите имена<span style="color: red;">*</span></label>  
  <div class="col-md-8">
  <input id="names" name="names" type="text" class="form-control input-md" value="<?php echo set_value('name'); ?>">
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
  <label class="col-md-4 control-label" for="email">Е-мейл адрес<span style="color: red;">*</span></label>  
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
  <span class="help-block"><i>В случай, че МПС-то има регистрационен номер</i></span>  
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