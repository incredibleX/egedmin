<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="row">
                <h4 class="text-muted margin-left-15"><b>Login</b></h4>
            </div>
            <?= $this->Flash->render('auth') ?>
            <?= $this->Form->create() ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Username<sup class="text-danger">*</sup></label>
                        <?= $this->Form->input('username', [
                            'class' => 'form-control',
                            'label' => false
                        ]) ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Password<sup class="text-danger">*</sup></label>
                        <?= $this->Form->input('password', [
                            'class' => 'form-control',
                            'label' => false
                        ]) ?>
                    </div>
                </div>
                <div class="col-md-12 pull-right">
                    <div class="form-group">
                        <?= $this->Form->button(__('Login'), ['class' => 'btn btn-info btn-fill pull-right']); ?>
                    </div>
                </div>
                <div class="col-md-12 pull-right">
                    <div class="form-group">
                        <p>Don't have an account? <?= $this->Html->Link(__('Create Account'), [
                                '_name' => 'register'
                            ]); ?></p>
                    </div>
                </div>

            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
