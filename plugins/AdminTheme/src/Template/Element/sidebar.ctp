<div class="sidebar" data-color="azure" data-image="<?= $this->Url->image('sidebar-4.jpg'); ?>">
    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <?= $this->Html->Link("EG Admin", [
                '_name' => 'admin:dashboard'
            ], [
                'escape' => false,
                'class' => 'simple-text'
            ]); ?>
        </div>

        <ul class="nav">
            <li class="active">
                <?= $this->Html->Link("<i class='pe-7s-graph'></i><p>Dashboard</p>", [
                    '_name' => 'admin:dashboard'
                ], [
                    'escape' => false
                ]); ?>
            </li>
            <li>
                <?= $this->Html->Link("<i class='pe-7s-user'></i><p>Users</p>", [
                    'prefix' => 'admin',
                    'controller' => 'Users',
                    'action' => 'index'
                ], [
                    'escape' => false
                ]); ?>
            </li>
            <li>
                <?= $this->Html->Link("<i class='pe-7s-cash'></i><p>Banks</p>", [
                    'prefix' => 'admin',
                    'controller' => 'Banks',
                    'action' => 'index'
                ], [
                    'escape' => false
                ]); ?>
            </li>

            <!--<li class="active-pro">
                <a href="#">
                    <i class="pe-7s-settings"></i>
                    <p>Settings</p>
                </a>
            </li>-->
        </ul>
    </div>
</div>

