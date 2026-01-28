<?= $this->extend('layouts/mainLayout') ?>

<?= $this->section('header') ?>
<?= $this->include('components/home/hero') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?= $this->include('components/home/comingSoon') ?>
<?= $this->include('components/home/reasoning') ?>
<?= $this->include('components/home/earlyAccess') ?>
<?= $this->endSection() ?>

<?= $this->section('footer') ?>
<?= $this->include('components/home/beta') ?>
<?= $this->endSection() ?>