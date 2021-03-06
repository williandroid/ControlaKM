<?php
App::uses('AppController', 'Controller');
/**
 * Funcionarios Controller
 *
 * @property Funcionario $Funcionario
 * @property PaginatorComponent $Paginator
 */
class FuncionariosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Funcionario->recursive = 0;
		$this->set('funcionarios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Funcionario->exists($id)) {
			throw new NotFoundException(__('Funcionário Invalido!'));
		}
		$options = array('conditions' => array('Funcionario.' . $this->Funcionario->primaryKey => $id));
		$this->set('funcionario', $this->Funcionario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Funcionario->create();
			if ($this->Funcionario->save($this->request->data)) {
				$this->Session->setFlash(__('Funcionário adicionado com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O Funcionário não foi inserido corretamente. Tente novamente!'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Funcionario->exists($id)) {
			throw new NotFoundException(__('Funcionário Invalido!'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Funcionario->save($this->request->data)) {
				$this->Session->setFlash(__('Funcionário editado com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O Funcionário não foi editado corretamente. Tente novamente!'));
			}
		} else {
			$options = array('conditions' => array('Funcionario.' . $this->Funcionario->primaryKey => $id));
			$this->request->data = $this->Funcionario->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Funcionario->id = $id;
		if (!$this->Funcionario->exists()) {
			throw new NotFoundException(__('Funcionário Invalido!'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Funcionario->delete()) {
			$this->Session->setFlash(__('Funcionário removido com sucesso!'));
		} else {
			$this->Session->setFlash(__('O Funcionário não foi removido corretamente. Tente novamente!'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
