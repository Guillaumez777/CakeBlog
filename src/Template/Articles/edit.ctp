<div style="margin: 40px">
<h1>Modifier un article :</h1>
<?= $this->Form->create($article); ?>
<?= $this->Form->input('title'); ?>
<?= $this->Form->input('body', ['rows' => '3']); ?>
<?= $this->Form->button('Modifier'); ?>
<?= $this->Form->end(); ?>
</div>