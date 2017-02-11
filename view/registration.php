<?php if ( ! defined('SESS_LIFETIME')) exit('No direct script access allowed.');
$this->loadView('header', $data);?>
    <body>
    <div class="form-holder reg-holder">
        <h2>Enter your data </h2>
        <div class="error-massage"><?=(!empty($data['error']['reg_error']))?'<p>'.$data['error']['reg_error'].'</p>':''?></div>
        <form action="<?= $this->makeLink('registration')?>" method="post">
            <p class="pass-field form-field reg-field">
                <span>Real Name </span>
                <input class="<?=(empty($data['error']['real_name']))?(!empty($data['success']['real_name']))?'correct-field':'':'incorrect-field'?>" placeholder="Real Name" name="real_name"
                       value="<?=(isset($data['real_name']))?$data['real_name']:''?>"></p>
            <div class="error-massage"><?=(!empty($data['error']['real_name']))?'<p>'.$data['error']['real_name'].'</p>':''?></div>

            <p class="pass-field form-field reg-field">
                <span>Birth date</span>
                <input class="<?=(empty($data['error']['birth_date']))?(!empty($data['success']['birth_date']))?'correct-field':'':'incorrect-field'?>" placeholder="Your BDay" type="date" name="birth_date"
                       value="<?=(isset($data['birth_date']))?$data['birth_date']:''?>"></p>
            <div class="error-massage"><?=(!empty($data['error']['birth_date']))?'<p>'.$data['error']['birth_date'].'</p>':''?></div>

            <p class="pass-field form-field reg-field">
                <span>Your login</span>
                <input class="<?=(empty($data['error']['login']))?(!empty($data['success']['login']))?'correct-field':'':'incorrect-field'?>"placeholder="Your login" name="login"
                       value="<?=(isset($data['login']))?$data['login']:''?>"></p>
            <div class="error-massage"><?=(!empty($data['error']['login']))?'<p>'.$data['error']['login'].'</p>':''?></div>

            <p class="pass-field form-field reg-field">
                <span>Password</span>
                <input class="<?=(empty($data['error']['pass']))?(!empty($data['success']['pass']))?'correct-field':'':'incorrect-field'?>"placeholder="Your password" type="password" name="pass"
                       value="<?=(isset($data['pass']))?$data['pass']:''?>"></p>
            <div class="error-massage"><?=(!empty($data['error']['pass']))?'<p>'.$data['error']['pass'].'</p>':''?></div>

            <p class="login-field form-field reg-field">
                <span>Email</span>
                <input class="<?=(empty($data['error']['email']))?(!empty($data['success']['email']))?'correct-field':'':'incorrect-field'?>" placeholder="Your e-mail" type="email" name="email"
                       value="<?=(isset($data['email']))?$data['email']:''?>">
            </p>
            <div class="error-massage"><?=(!empty($data['error']['email']))?'<p>'.$data['error']['email'].'</p>':''?></div>

            <p class="pass-field form-field reg-field">
                <span>Country</span>
                <select class="<?=(empty($data['error']['country']))?(!empty($data['success']['country']))?'correct-field':'':'incorrect-field'?>" size="1" name="country" id="country">
                    <?php foreach($this->config->get_item('countries') as $key => $country){ ?>
                        <option value="<?=$key?>" <?=(!empty($data['country']))?($data['country']==$key)?'selected':'':''?>><?=$country?></option>
                    <?php } ?>
                </select>
                <div class="error-massage"><?=(!empty($data['error']['country']))?'<p>'.$data['error']['country'].'</p>':''?></div>
            </p>
            <p class="reg-field">
                <span>I agree with terms and conditions </span>
                <input class="check <?=(empty($data['error']['checkbox']))?(!empty($data['success']['checkbox']))?'correct-field':'':'incorrect-field'?>" type="checkbox" name="checkbox" value="1" />
                <div class="error-massage"><?=(!empty($data['error']['checkbox']))?'<p>'.$data['error']['checkbox'].'</p>':''?></div>
            </p>
            <div class="btn-holder">
                <p class="submit-btn btn"><input type="submit" value="Send form"></p>
            </div>
        </form>
    </div>
    </body>
<?php $this->loadView('footer');?>