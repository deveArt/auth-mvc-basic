<?php if ( ! defined('SESS_LIFETIME')) exit('No direct script access allowed.');
$this->loadView('header', $data);?>
    <body>
        <div class="form-holder">
            <h2>User data</h2>
            <p><span>User name - <?= $data['real_name']?></span></p>
            <p><span>User email - <?= $data['email']?></span></p>
            <p><span>User country - <?= $data['country']?></span></p>
            <a href="<?= $this->makeLink('logout')?>" style="color: darkmagenta">Log out</a>
        </div>

    </body>
<?php
$this->loadView('footer');?>