<?php
App::uses('AppController', 'Controller');
/**
 * Produtos Controller
 *
 * @property Produto $Produto
 */
class ProdutosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Produto->recursive = 0;
		$this->set('produtos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Produto->id = $id;
		if (!$this->Produto->exists()) {
			throw new NotFoundException(__('Produto inválido'));
		}
		$this->set('produto', $this->Produto->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Produto->create();
			if ($this->Produto->save($this->request->data)) {
				$this->Session->setFlash(__('O produto foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O produto não pode ser salvo. Por favor, tente novamente.'));
			}
		}
		$classes = $this->Produto->Classe->find('list');
		$marcas = $this->Produto->Marca->find('list');
		$this->set(compact('classes', 'marcas'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Produto->id = $id;
		if (!$this->Produto->exists()) {
			throw new NotFoundException(__('Produto inválido.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Produto->save($this->request->data)) {
				$this->Session->setFlash(__('O produto foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O produto não pode ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Produto->read(null, $id);
		}
		$classes = $this->Produto->Classe->find('list');
		$marcas = $this->Produto->Marca->find('list');
		$this->set(compact('classes', 'marcas'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Produto->id = $id;
		if (!$this->Produto->exists()) {
			throw new NotFoundException(__('produto inválido.'));
		}
		if ($this->Produto->delete()) {
			$this->Session->setFlash(__('Produto excluído.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Produto não pode ser excluído.'));
		$this->redirect(array('action' => 'index'));
	}
}