<div class="panel-body" >
		<?php echo $this->Form->create('User',array('id'=>'form','class'=>'form-horizontal')); ?>
          
          <div class="control-group clearfix">
            <div class="form col-lg-3 col-md-4">
              <p class="textSt">User Name:</p>
            </div>
            <div class="form col-lg-9 col-md-8">
            <?php echo $this->Form->input('username',array('label'=>false,'div'=>false,'error'=>false,'class'=>'form-control input-lg','palceholder'=>'User Name'));?>
            </div>
          </div>
          <div class="control-group clearfix">
            <div class="form col-lg-3 col-md-4">
              <p class="textSt">Password:</p>
            </div>
            <div class="form col-lg-9 col-md-8">
            <?php echo $this->Form->input('password',array('label'=>false,'div'=>false,'error'=>false,'class'=>'form-control input-lg')); ?>
            </div>
          </div>
          <div class="control-group clearfix">
            <div class="col-lg-3 col-lg-push-3 col-xs-12">
				<?php echo $this->Form->button('Login', array('type' => 'submit','id'=>'login-btn', 'class' => 'btn btn-primary btn-lg btn-block'));?>
            </div>
				<span class="forgotpassword"><a href="#">Forgot Password?</a></span>
          </div>
       <?php echo $this->Form->end(); ?>
      </div>
