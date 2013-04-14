<?php
App::uses('AppController', 'Controller');
/**
 * Marcas Controller
 *
 * @property Marca $Marca
 */
class MarcasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Marca->recursive = 0;
		$this->set('marcas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Marca->id = $id;
		if (!$this->Marca->exists()) {
			throw new NotFoundException(__('Marca inválido'));
		}
		$this->set('marca', $this->Marca->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Marca->create();
			if ($this->Marca->save($this->request->data)) {
				$this->Session->setFlash(__('O marca foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O marca não pode ser salvo. Por favor, tente novamente.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Marca->id = $id;
		if (!$this->Marca->exists()) {
			throw new NotFoundException(__('Marca inválido.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Marca->save($this->request->data)) {
				$this->Session->setFlash(__('O marca foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O marca não pode ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Marca->read(null, $id);
		}
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
		$this->Marca->id = $id;
		if (!$this->Marca->exists()) {
			throw new NotFoundException(__('marca inválido.'));
		}
		if ($this->Marca->delete()) {
			$this->Session->setFlash(__('Marca excluído.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Marca não pode ser excluído.'));
		$this->redirect(array('action' => 'index'));
	}
}