<?php

class CategoriesController extends AppController{
	public $components = array('Paginator');

	public function admin_index(){
		$data = $this->Category->find('list');
		$this->set(compact('data'));
	}

	public function index(){
		
		// $categories = 
		$products = $this->Category->Product->find('all');
		// debug($products);
		// die;
			
			
		// $title_for_layout = $user['User']['meta_title'];
		// $meta['keywords'] = $user['User']['keywords'];
		// $meta['description'] = $user['User']['description'];
		return $this->set(compact('products', 'meta', 'categories'));
		
	}

	public function view($alias){


		if(isset($this->request->query['type']) && !empty($this->request->query['type'])){
			$type = $this->request->query['type'];
		}
		if(isset($this->request->query['size']) && !empty($this->request->query['size'])){
			$size = $this->request->query['size'];
		}
		//sanfayans
		if(isset($this->request->query['stype']) && !empty($this->request->query['stype'])){
			$stype = $this->request->query['stype'];
		}
		//$data = $this->Category->findByAlias($alias);
		// debug($data);
		// die;
		if(isset($type) && !empty($type)){
			$data = $this->Category->Product->find('all', array(
				'conditions' => array('Product.product_type' => $type)
			));
			$filter = 1;
			// debug($data);
		}elseif(isset($size) && !empty($size)){
			$data = $this->Category->Product->find('all', array(
				'conditions' => array('Product.size' => $size)
			));
			$filter = 1;
		}elseif(isset($type) && isset($size)){
			$conditions = array('Product.product_type'=>$type, 'Product.size'=>$size);
			$data = $this->Category->Product->find('all', array(
				'conditions' => $conditions
			));
			$filter = 1;
		}elseif(isset($stype) && !empty($stype)){
			$data = $this->Category->Product->find('all', array(
				'conditions' => array('Product.type' => $stype)
			));
			// debug($data);
			$filter = 1;
		}else{
			$data = $this->Category->findByAlias($alias);
			$filter = 2;
		}
		
		// debug($size);
		// die;
		
		if (!$data) {
			throw new NotFounddException('Такой категории не существует');
		}
		$title_for_layout = (isset($data['Category']['title']) ? $data['Category']['title'] : $data[0]['Category']['title']);
		// $meta
		return $this->set(compact('data', 'filter', 'title_for_layout'));
	}

	public function cats($alias){
		$data = $this->Category->findByAlias($alias);
		$child_cats = $this->Category->find('all', array(
			'conditions' => array('Category.parent_id' => $data['Category']['id'])
		));
		// debug($child_cats);
		// die;
		if (!$child_cats) {
			throw new NotFounddException('Такой категории не существует');
		}
		return $this->set(compact('child_cats', 'data'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			
			$this->Category->create();
			$data = $this->request->data['Category'];
			
			if($this->Category->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		$c_list = $this->Category->find('list');
		return $this->set(compact('c_list'));

	}

	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Category->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Category->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Category->id = $id;
			$data1 = $this->request->data['Category'];
			
			
			if($this->Category->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			$categories = $this->Category->find('list');
			$this->set(compact('id', 'data', 'categories'));
		}
	}

	public function admin_delete($id){
		if (!$this->Category->exists($id)) {
			throw new NotFounddException('Такой категории нету');
		}
		if($this->Category->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

}