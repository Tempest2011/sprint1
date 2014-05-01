<?php
App::uses('AppController', 'Controller');
/**
 * Usuariorols Controller
 *
 * @property Usuariorol $Usuariorol
 * @property PaginatorComponent $Paginator
 */
class UsuariorolsController extends AppController {

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
		$this->Usuariorol->recursive = 0;
		$this->set('usuariorols', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Usuariorol->exists($id)) {
			throw new NotFoundException(__('Invalid usuariorol'));
		}
		$options = array('conditions' => array('Usuariorol.' . $this->Usuariorol->primaryKey => $id));
		$this->set('usuariorol', $this->Usuariorol->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Usuariorol->create();
			if ($this->Usuariorol->save($this->request->data)) {
				$this->Session->setFlash(__('The usuariorol has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuariorol could not be saved. Please, try again.'));
			}
		}
		$users = $this->Usuariorol->User->find('list');
		$rols = $this->Usuariorol->Rol->find('list');
		$this->set(compact('users', 'rols'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Usuariorol->exists($id)) {
			throw new NotFoundException(__('Invalid usuariorol'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Usuariorol->save($this->request->data)) {
				$this->Session->setFlash(__('The usuariorol has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuariorol could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Usuariorol.' . $this->Usuariorol->primaryKey => $id));
			$this->request->data = $this->Usuariorol->find('first', $options);
		}
		$users = $this->Usuariorol->User->find('list');
		$rols = $this->Usuariorol->Rol->find('list');
		$this->set(compact('users', 'rols'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Usuariorol->id = $id;
		if (!$this->Usuariorol->exists()) {
			throw new NotFoundException(__('Invalid usuariorol'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Usuariorol->delete()) {
			$this->Session->setFlash(__('The usuariorol has been deleted.'));
		} else {
			$this->Session->setFlash(__('The usuariorol could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
