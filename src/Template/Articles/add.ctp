<div style="margin: 40px">
<h1>Ajouter un article : </h1>
<?= $this->Form->create($article); ?>
<?= $this->Form->input('category_id'); ?>
<?= $this->Form->input('title'); ?>
<?= $this->Form->input('body', ['rows' => '3']); ?>
<?= $this->Form->button(__('Sauvegarder un article')); ?>
<?= $this->Form->end(); ?>
</div>
