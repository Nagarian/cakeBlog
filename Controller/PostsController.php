<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 * @property Post $Post
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PostsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'RequestHandler');
	public $actsAs = array(
		'Containable',
		'Comment.Commentable'
	);
	public $helpers = array('Text');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		if ($this->RequestHandler->isRss() ) {
			$posts = $this->Post->find(
				'all',
				array('limit' => 20, 'order' => 'Post.created DESC')
			);
			return $this->set(compact('posts'));
		}
		$this->Post->recursive = 0;
		$this->Paginator->settings = array(
        	'limit' => 5,
			'order' => array(
            'Post.created' => 'desc',
			'Post.id'=>'desc'));
		$this->set('posts', $this->Paginator->paginate());
	}

	public function search() {
		$condition = $this->params['url']['query'];
		
		$this->Post->recursive = 0;
		$this->Paginator->settings = array(
        	'limit' => 5,
			'order' => array(
            'Post.created' => 'desc',
			'Post.id'=>'desc'));
		
		$this->set('posts', $this->Paginator->paginate('Post', array(
				'OR' => array(
					'Post.title LIKE' => "%$condition%",
					'Post.body LIKE' => "%$condition%"
				)
			))
		);
	}
	
	
/**
 * more method
 *
 * @return void
 */
	public function more() {
		$this->Post->recursive = 0;
		$this->Paginator->settings = array(
        	'limit' => 5,
			'order' => array(
			'Post.comment_count' => 'desc',
            'Post.created' => 'desc',
			'Post.id'=>'desc'));
		$this->set('posts', $this->Paginator->paginate());
	}	

/**
 * saucisson method
 *
 * @return void
 */
	public function saucisson() {
		$this->Post->recursive = 0;
		$this->Paginator->settings = array(
			'conditions' => array('Post.categorie' => '1'),
        	'limit' => 5,
			'order' => array(
            'Post.created' => 'desc',
			'Post.id'=>'desc'));
		$this->set('posts', $this->Paginator->paginate());
	}	

/**
 * fromage method
 *
 * @return void
 */
	public function fromage() {
		$this->Post->recursive = 0;
		$this->Paginator->settings = array(
			'conditions' => array('Post.categorie' => '2'),
        	'limit' => 5,
			'order' => array(
            'Post.created' => 'desc',
			'Post.id'=>'desc'));
		$this->set('posts', $this->Paginator->paginate());
	}	

/**
 * olives method
 *
 * @return void
 */
	public function olives() {
		$this->Post->recursive = 0;
		$this->Paginator->settings = array(
			'conditions' => array('Post.categorie' => '3'),
        	'limit' => 5,
			'order' => array(
            'Post.created' => 'desc',
			'Post.id'=>'desc'));
		$this->set('posts', $this->Paginator->paginate());
	}

/**
 * autres method
 *
 * @return void
 */
	public function autres() {
		$this->Post->recursive = 0;
		$this->Paginator->settings = array(
			'conditions' => array('Post.categorie' => ''),
        	'limit' => 5,
			'order' => array(
            'Post.created' => 'desc',
			'Post.id'=>'desc'));
		$this->set('posts', $this->Paginator->paginate());
	}	
	
/**
 * detail method
 *
 * @return void
 */
	public function detail($id = null) {
		if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
		// $comments = $this->Post->findComments(); 
        $this->set('post', $post);
	}
/**
 * admin method
 *
 * @return void
 */
	public function admin() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
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
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
			$this->request->data = $this->Post->find('first', $options);
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
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Post->delete()) {
			$this->Session->setFlash(__('The post has been deleted.'));
		} else {
			$this->Session->setFlash(__('The post could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * administrator_index method
 *
 * @return void
 */
	public function administrator_index() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
	}

/**
 * administrator_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrator_view($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
	}

/**
 * administrator_add method
 *
 * @return void
 */
	public function administrator_add() {
		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		}
	}

/**
 * administrator_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrator_edit($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
			$this->request->data = $this->Post->find('first', $options);
		}
	}

/**
 * administrator_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrator_delete($id = null) {
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Post->delete()) {
			$this->Session->setFlash(__('The post has been deleted.'));
		} else {
			$this->Session->setFlash(__('The post could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
