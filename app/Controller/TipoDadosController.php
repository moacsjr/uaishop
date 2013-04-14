<?php
App::uses('AppController', 'Controller');
/**
 * TipoDados Controller
 *
 * @property TipoDado $TipoDado
 */
class TipoDadosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TipoDado->recursive = 0;
		$this->set('tipoDados', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TipoDado->id = $id;
		if (!$this->TipoDado->exists()) {
			throw new NotFoundException(__('Tipo dado inválido'));
		}
		$this->set('tipoDado', $this->TipoDado->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TipoDado->create();
			if ($this->TipoDado->save($this->request->data)) {
				$this->Session->setFlash(__('O tipo dado foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O tipo dado não pode ser salvo. Por favor, tente novamente.'));
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
		$this->TipoDado->id = $id;
		if (!$this->TipoDado->exists()) {
			throw new NotFoundException(__('Tipo dado inválido.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TipoDado->save($this->request->data)) {
				$this->Session->setFlash(__('O tipo dado foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O tipo dado não pode ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->TipoDado->read(null, $id);
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
		$this->TipoDado->id = $id;
		if (!$this->TipoDado->exists()) {
			throw new NotFoundException(__('tipo dado inválido.'));
		}
		if ($this->TipoDado->delete()) {
			$this->Session->setFlash(__('Tipo dado excluído.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tipo dado não pode ser excluído.'));
		$this->redirect(array('action' => 'index'));
	}
}