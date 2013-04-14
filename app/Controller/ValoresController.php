<?php
App::uses('AppController', 'Controller');
/**
 * Valores Controller
 *
 * @property Valor $Valor
 */
class ValoresController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Valor->recursive = 0;
		$this->set('valores', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Valor->id = $id;
		if (!$this->Valor->exists()) {
			throw new NotFoundException(__('Valor inválido'));
		}
		$this->set('valor', $this->Valor->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Valor->create();
			if ($this->Valor->save($this->request->data)) {
				$this->Session->setFlash(__('O valor foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O valor não pode ser salvo. Por favor, tente novamente.'));
			}
		}
		$caracteristicas = $this->Valor->Caracteristica->find('list');
		$this->set(compact('caracteristicas'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Valor->id = $id;
		if (!$this->Valor->exists()) {
			throw new NotFoundException(__('Valor inválido.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Valor->save($this->request->data)) {
				$this->Session->setFlash(__('O valor foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O valor não pode ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Valor->read(null, $id);
		}
		$caracteristicas = $this->Valor->Caracteristica->find('list');
		$this->set(compact('caracteristicas'));
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
		$this->Valor->id = $id;
		if (!$this->Valor->exists()) {
			throw new NotFoundException(__('valor inválido.'));
		}
		if ($this->Valor->delete()) {
			$this->Session->setFlash(__('Valor excluído.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Valor não pode ser excluído.'));
		$this->redirect(array('action' => 'index'));
	}
}