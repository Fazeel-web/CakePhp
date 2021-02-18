<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $user
 */
?>

<?php
$file = '';
if($this->plugin){
    $file = ROOT . DS . 'plugins'.DS.$this->plugin.DS.'src' . DS . 'Template' . DS . 'Users' . DS . 'login.ctp';
}
if(!file_exists($file)){
    $file = ROOT . DS . 'src' . DS . 'Template' . DS . 'Users' . DS . 'login.ctp';
}

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>

<?= $this->Html->css('loginnnnnnnn') ?> 
<img src="/Project/img/Capture.jpg" data-src="Capture.jpg" class="img-responsive" style="width:100px; height:50px; border-radius:5px;" alt="">
<div>


    <div class="login_wrapper">

        <div class="animate form login_form">
            <section class="login_content">

                <?= $this->Form->create($user) ?>
                    <h1>Register</h1>

                    <div>
                        <?= $this->Form->control('Email') ?>
                    </div>
                    <div class="form-group password required">
                        <label for="password">Password</label>
                        <input type="password" name="Password" required="required" maxLength="255" id="password" class="form-control">
                    </div>
                    <div>
                        <?= $this->Form->button(__('Submit')) ?>
                        <button >
                            <?= $this->Html->link(__('Login'),['controller' => 'Users','action' => 'login']) ?>
                        </button>
                    </div>
                    <div class="clearfix"></div>

                    <div class="separator">

                    </div>
                <?= $this->Form->end() ?>
            </section>
        </div>
    </div>
</div>
<?php } ?>
