<?php if ( ! defined('SESS_LIFETIME')) exit('No direct script access allowed.');
$this->loadView('header', $data);?>
<body>
		  <div class="form-holder">
            <h2>Enter your data</h2>
            <div class="error-massage"><?=(!empty($data['error']['auth_error']))?'<p>'.$data['error']['auth_error'].'</p>':''?></div>
            <form action="<?= $this->makeLink('login')?>" method="post">
                <p class="login-field form-field">
                    <input class="<?=(empty($data['error']['login_email']))?(!empty($data['success']['login_email']))?'correct-field':'':'incorrect-field'?>" placeholder="Your login or email" name="login_email"
                           value="<?=(isset($data['login_email']))?$data['login_email']:''?>">
                    <div class="error-massage"><?=(!empty($data['error']['login_email']))?'<p>'.$data['error']['login_email'].'</p>':''?></div>
                </p>
                <p class="pass-field form-field">
                    <input class="<?=(empty($data['error']['pass']))?(!empty($data['success']['pass']))?'correct-field':'':'incorrect-field'?>" placeholder="Your password" type="password" name="pass"
                           value="<?=(isset($data['pass']))?$data['pass']:''?>">
                    <div class="error-massage"><?=(!empty($data['error']['pass']))?'<p>'.$data['error']['pass'].'</p>':''?></div>
                </p>
                    <p class="submit-btn btn"><input type="submit" value="Log in">
                </p>
                <a class="reg-btn btn" href="<?= $this->makeLink('registration')?>">Registration</a>
            </form>
		  </div>
	</body>
<?php
$this->loadView('footer');?>