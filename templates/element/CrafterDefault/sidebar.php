<nav class="content-sidebar vh-100 py-2">
    <ul class="fs-4 ps-0 pe-3">
        <li class="<?= $this->request->getParam('action') === 'index' ? 'active' : '' ?>">
            <a href="/">API Lists</a>
        </li>
        <li class="<?= $this->request->getParam('action') === 'create' ? 'active' : '' ?>">
            <a href="create">Create API</a>
        </li>
        <li class="<?= $this->request->getParam('action') === 'docs' ? 'active' : '' ?>">
            <a href="docs">Docs</a>
        </li>
    </ul>
</nav>