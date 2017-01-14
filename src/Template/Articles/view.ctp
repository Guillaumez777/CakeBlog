<?= h($article->title); ?>
<?= h($article->body); ?>


<p class="btn btn-primary"><?= $this->Html->link('Retour', ['action' => 'index']); ?></p>
<p><small>Created: <?= $article->created->format(DATE_RFC850) ?></small></p>