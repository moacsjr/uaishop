<?php
App::uses('AppController', 'Controller');
/**
 * PessoasEnderecos Controller
 *
 * @property PessoasEndereco $PessoasEndereco
 */
class PessoasEnderecosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PessoasEndereco->recursive = 0;
		$this->set('pessoasEnderecos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PessoasEndereco->id = $id;
		if (!$this->PessoasEndereco->exists()) {
			throw new NotFoundException(__('Pessoas endereco inválido'));
		}
		$this->set('pessoasEndereco', $this->PessoasEndereco->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($pessoaId) {
		if ($this->request->is('post')) {
			$this->PessoasEndereco->create();
			if ($this->PessoasEndereco->save($this->request->data)) {
				$this->Session->setFlash(__('O pessoas endereco foi salvo.'));
				$this->redirect(array('controller' => 'pessoas', 'action' => 'view', $pessoaId));
			} else {
				$this->Session->setFlash(__('O pessoas endereco não pode ser salvo. Por favor, tente novamente.'));
			}
		}else{
		    $pessoa = $this->PessoasEndereco->Pessoa->findById($pessoaId);
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
		$this->PessoasEndereco->id = $id;
		if (!$this->PessoasEndereco->exists()) {
			throw new NotFoundException(__('Pessoas endereco inválido.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PessoasEndereco->save($this->request->data)) {
				$this->Session->setFlash(__('O pessoas endereco foi salvo.'));
				$this->redirect(array('controller' => 'pessoas', 'action' => 'view', $this->request->data['PessoasEndereco']['pessoa_id']));
			} else {
				$this->Session->setFlash(__('O pessoas endereco não pode ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->PessoasEndereco->read(null, $id);
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
		$this->PessoasEndereco->id = $id;
		if (!$this->PessoasEndereco->exists()) {
			throw new NotFoundException(__('pessoas endereco inválido.'));
		}
		if ($this->PessoasEndereco->delete()) {
			$this->Session->setFlash(__('Pessoas endereco excluído.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Pessoas endereco não pode ser excluído.'));
		$this->redirect(array('action' => 'index'));
	}
}
