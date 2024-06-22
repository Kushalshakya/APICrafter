<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'APICrafter: The New Gen API';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <link rel="stylesheet" href="/webroot/css/style.css">
    <link rel="stylesheet" href="/webroot/css/bootstrap.css">
    <script src="/webroot/js/jquery-3.7.1.js"></script>
    
    <!-- DataTables CDN -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

</head>
<body class="overflow-hidden">
    <?= $this->element('CrafterDefault/header'); ?>
    <main id="content" class="content d-flex">
        <?= $this->Flash->render() ?>
        <?= $this->element('CrafterDefault/sidebar'); ?>
        <?= $this->fetch('content') ?>
    </main>

    <?= $this->element('CrafterDefault/footer') ?>

    <?= $this->Html->script('script'); ?>
</body>
</html>
