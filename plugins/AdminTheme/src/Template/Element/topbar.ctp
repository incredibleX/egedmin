<nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           <!-- <a class="navbar-brand" href="#">Dashboard</a>-->
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <?= $this->Html->Link(h($authUser['name']), [
                        'prefix' => 'admin',
                        'controller' => 'Users',
                        'action' => 'view',
                        $authUser['id']
                    ]); ?>
                </li>
                <li>
                    <?= $this->Html->Link(__('Logout'), [
                        'prefix' => false,
                        'controller' => 'Users',
                        'action' => 'logout'
                    ]); ?>
                </li>
            </ul>
        </div>
    </div>
</nav>