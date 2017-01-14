<?php

namespace App\Controller;

use App\Controller\AppController;

class ArticlesController extends AppController {

	public function initialize() 
	{
		parent::initialize();
		$this->loadComponent('Flash'); // Charge le FlashComponent
	}

	public function index() 
	{
		$this->set('articles', $this->Articles->find('all'));
	}

	public function view($id = null) 
	{
		$article = $this->Articles->get($id);
		$this->set(compact('article'));
	}

	public function add() 
	{
		$article = $this->Articles->newEntity();
		if ($this->request->is('post')) {
			$article = $this->Articles->patchEntity($article, $this->request->data);
			if ($this->Articles->save($article)) {
				$this->Flash->success(__('Votre article est sauvegardé'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Impossible d\'ajouter un article'));
		}
		$this->set('article', $article);

		$categories = $this->Articles->Categories->find('treeList');
		$this->set(compact('categories'));
	}

	public function edit($id = null)
	{
	    $article = $this->Articles->get($id);
	    if ($this->request->is(['post', 'put'])) {
	        $this->Articles->patchEntity($article, $this->request->data);
	        if ($this->Articles->save($article)) {
	            $this->Flash->success(__('Votre article a été mis à jour.'));
	            return $this->redirect(['action' => 'index']);
	        }
	        $this->Flash->error(__('Impossible de mettre à jour votre article.'));
	    }

	    $this->set('article', $article);
	}

	public function delete($id)
	{
	    $this->request->allowMethod(['post', 'delete']);

	    $article = $this->Articles->get($id);
	    if ($this->Articles->delete($article)) {
	        $this->Flash->success(__("L'article avec l'id: {0} a été supprimé.", h($id)));
	        return $this->redirect(['action' => 'index']);
	    }
	}



}