<div class="admin-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
        Вы находитесь на сайте в роли администратора.
        <br>  Вы можете редактировать и публиковать посты, а так же модерировать коментарии к постам)</br>

    </p>
</div>
