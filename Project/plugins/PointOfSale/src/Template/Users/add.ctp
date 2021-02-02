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
<div>

    <div class="login_wrapper">

        <div class="animate form login_form">
            <section class="login_content">

                <?= $this->Form->create($user) ?>
                    <h1>Register</h1>

                    <div>
                        <?= $this->Form->control('Email') ?>
                    </div>
                    <div>
                        <?= $this->Form->control('Password') ?>
                    </div>
                    <div>
                        <?= $this->Form->button(__('Submit')) ?>
                        <button style="border:0px; padding:8px 8px 6px 24px;">
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
