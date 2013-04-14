<?php
App::uses('AppController', 'Controller');
/**
 * Caracteristicas Controller
 *
 * @property Caracteristica $Caracteristica
 */
class CaracteristicasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Caracteristica->recursive = 0;
		$this->set('caracteristicas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Caracteristica->id = $id;
		if (!$this->Caracteristica->exists()) {
			throw new NotFoundException(__('Caracteristica inválido'));
		}
		$this->set('caracteristica', $this->Caracteristica->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Caracteristica->create();
			if ($this->Caracteristica->save($this->request->data)) {
				$this->Session->setFlash(__('O caracteristica foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O caracteristica não pode ser salvo. Por favor, tente novamente.'));
			}
		}
		$tipoDados = $this->Caracteristica->TipoDado->find('list');
		$this->set(compact('tipoDados'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Caracteristica->id = $id;
		if (!$this->Caracteristica->exists()) {
			throw new NotFoundException(__('Caracteristica inválido.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Caracteristica->save($this->request->data)) {
				$this->Session->setFlash(__('O caracteristica foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O caracteristica não pode ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Caracteristica->read(null, $id);
		}
		$tipoDados = $this->Caracteristica->TipoDado->find('list');
		$this->set(compact('tipoDados'));
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
		$this->Caracteristica->id = $id;
		if (!$this->Caracteristica->exists()) {
			throw new NotFoundException(__('caracteristica inválido.'));
		}
		if ($this->Caracteristica->delete()) {
			$this->Session->setFlash(__('Caracteristica excluído.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Caracteristica não pode ser excluído.'));
		$this->redirect(array('action' => 'index'));
	}
}