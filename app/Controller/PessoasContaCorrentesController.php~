<?php
App::uses('AppController', 'Controller');
/**
 * PessoasContaCorrentes Controller
 *
 * @property PessoasContaCorrente $PessoasContaCorrente
 */
class PessoasContaCorrentesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PessoasContaCorrente->recursive = 0;
		$this->set('pessoasContaCorrentes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PessoasContaCorrente->id = $id;
		if (!$this->PessoasContaCorrente->exists()) {
			throw new NotFoundException(__('Pessoas conta corrente inválido'));
		}
		$this->set('pessoasContaCorrente', $this->PessoasContaCorrente->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($pessoaId) {
		if ($this->request->is('post')) {
			$this->PessoasContaCorrente->create();
			if ($this->PessoasContaCorrente->save($this->request->data)) {
				$this->Session->setFlash(__('O pessoas conta corrente foi salvo.'));
				$this->redirect(array('controller' => 'pessoas', 'action' => 'view', $pessoaId));
			} else {
				$this->Session->setFlash(__('O pessoas conta corrente não pode ser salvo. Por favor, tente novamente.'));				
			}
		}else{
		
		    $pessoa = $this->PessoasContaCorrente->Pessoa->findById($pessoaId);
		    $this->set('pessoa', $pessoa);
		
		}
		
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PessoasContaCorrente->id = $id;
		if (!$this->PessoasContaCorrente->exists()) {
			throw new NotFoundException(__('Pessoas conta corrente inválido.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PessoasContaCorrente->save($this->request->data)) {
				$this->Session->setFlash(__('O pessoas conta corrente foi salvo.'));
				$this->redirect(array('controller' => 'pessoas', 'action' => 'view', $this->request->data['PessoasContaCorrente']['pessoa_id']));
			} else {
				$this->Session->setFlash(__('O pessoas conta corrente não pode ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->PessoasContaCorrente->read(null, $id);
			$pessoa = array('Pessoa' => $this->request->data['Pessoa']);
		    $this->set('pessoa', $pessoa);
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
		$this->PessoasContaCorrente->id = $id;
		if (!$this->PessoasContaCorrente->exists()) {
			throw new NotFoundException(__('pessoas conta corrente inválido.'));
		}
		if ($this->PessoasContaCorrente->delete()) {
			$this->Session->setFlash(__('Pessoas conta corrente excluído.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Pessoas conta corrente não pode ser excluído.'));
		$this->redirect(array('action' => 'index'));
	}
}
