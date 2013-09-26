<?php
App::uses('AppController', 'Controller');
/**
 * Veiculos Controller
 *
 * @property Veiculo $Veiculo
 * @property PaginatorComponent $Paginator
 */
class VeiculosController extends AppController {

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
		$this->Veiculo->recursive = 0;
		$this->set('veiculos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Veiculo->exists($id)) {
			throw new NotFoundException(__('Invalid veiculo'));
		}
		$options = array('conditions' => array('Veiculo.' . $this->Veiculo->primaryKey => $id));
		$this->set('veiculo', $this->Veiculo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Veiculo->create();
			if ($this->Veiculo->save($this->request->data)) {
				$this->Session->setFlash(__('Veículo adinionado com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O veículo não foi inserido corretamente. Tente novamente!'));
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
		if (!$this->Veiculo->exists($id)) {
			throw new NotFoundException(__('Invalid veiculo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Veiculo->save($this->request->data)) {
				$this->Session->setFlash(__('Veículo editado com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O veículo não foi inserido corretamente. Tente novamente!'));
			}
		} else {
			$options = array('conditions' => array('Veiculo.' . $this->Veiculo->primaryKey => $id));
			$this->request->data = $this->Veiculo->find('first', $options);
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
		$this->Veiculo->id = $id;
		if (!$this->Veiculo->exists()) {
			throw new NotFoundException(__('Invalid veiculo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Veiculo->delete()) {
			$this->Session->setFlash(__('Veículo removido com sucesso!'));
		} else {
			$this->Session->setFlash(__('O veículo não foi inserido corretamente. Tente novamente!'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
