<?php
App::uses('AppController', 'Controller');
/**
 * Fundempresas Controller
 *
 * @property Fundempresa $Fundempresa
 * @property PaginatorComponent $Paginator
 */
class FundempresasController extends AppController {

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
		$this->Fundempresa->recursive = 0;
		$this->set('fundempresas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Fundempresa->exists($id)) {
			throw new NotFoundException(__('Invalid fundempresa'));
		}
		$options = array('conditions' => array('Fundempresa.' . $this->Fundempresa->primaryKey => $id));
		$this->set('fundempresa', $this->Fundempresa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Fundempresa->create();
			if ($this->Fundempresa->save($this->request->data)) {
				$this->Session->setFlash(__('The fundempresa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fundempresa could not be saved. Please, try again.'));
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
		if (!$this->Fundempresa->exists($id)) {
			throw new NotFoundException(__('Invalid fundempresa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Fundempresa->save($this->request->data)) {
				$this->Session->setFlash(__('The fundempresa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fundempresa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Fundempresa.' . $this->Fundempresa->primaryKey => $id));
			$this->request->data = $this->Fundempresa->find('first', $options);
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
		$this->Fundempresa->id = $id;
		if (!$this->Fundempresa->exists()) {
			throw new NotFoundException(__('Invalid fundempresa'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Fundempresa->delete()) {
			$this->Session->setFlash(__('The fundempresa has been deleted.'));
		} else {
			$this->Session->setFlash(__('The fundempresa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
