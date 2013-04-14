<?php
App::uses('AppController', 'Controller');
/**
 * Classes Controller
 *
 * @property Classe $Classe
 */
class ClassesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Classe->recursive = 0;
		$this->set('classes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Classe->id = $id;
		if (!$this->Classe->exists()) {
			throw new NotFoundException(__('Classe inválido'));
		}
		$this->set('classe', $this->Classe->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Classe->create();
			if ($this->Classe->save($this->request->data)) {
				$this->Session->setFlash(__('O classe foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O classe não pode ser salvo. Por favor, tente novamente.'));
			}
		}
		$categorias = $this->Classe->Categoria->find('list');
		$caracteristicas = $this->Classe->Caracteristica->find('list');
		$this->set(compact('categorias', 'caracteristicas'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Classe->id = $id;
		if (!$this->Classe->exists()) {
			throw new NotFoundException(__('Classe inválido.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Classe->save($this->request->data)) {
				$this->Session->setFlash(__('O classe foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O classe não pode ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Classe->read(null, $id);
		}
		$categorias = $this->Classe->Categoria->find('list');
		$caracteristicas = $this->Classe->Caracteristica->find('list');
		$this->set(compact('categorias', 'caracteristicas'));
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
		$this->Classe->id = $id;
		if (!$this->Classe->exists()) {
			throw new NotFoundException(__('classe inválido.'));
		}
		if ($this->Classe->delete()) {
			$this->Session->setFlash(__('Classe excluído.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Classe não pode ser excluído.'));
		$this->redirect(array('action' => 'index'));
	}
}