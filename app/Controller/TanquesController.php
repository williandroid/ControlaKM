<?php
App::uses('AppController', 'Controller');
/**
 * Tanques Controller
 *
 * @property Tanque $Tanque
 * @property PaginatorComponent $Paginator
 */
class TanquesController extends AppController {

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
		$this->Tanque->recursive = 0;
		$this->set('tanques', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tanque->exists($id)) {
			throw new NotFoundException(__('Invalid tanque'));
		}
		$options = array('conditions' => array('Tanque.' . $this->Tanque->primaryKey => $id));
		$this->set('tanque', $this->Tanque->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tanque->create();
			if ($this->Tanque->save($this->request->data)) {
				$this->Session->setFlash(__('The tanque has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tanque could not be saved. Please, try again.'));
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
		if (!$this->Tanque->exists($id)) {
			throw new NotFoundException(__('Invalid tanque'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tanque->save($this->request->data)) {
				$this->Session->setFlash(__('The tanque has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tanque could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tanque.' . $this->Tanque->primaryKey => $id));
			$this->request->data = $this->Tanque->find('first', $options);
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
		$this->Tanque->id = $id;
		if (!$this->Tanque->exists()) {
			throw new NotFoundException(__('Invalid tanque'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tanque->delete()) {
			$this->Session->setFlash(__('The tanque has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tanque could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}