<?php
// App::uses('CakeEmail', 'Network/Email');

class ContactsController extends AppController {

	public function admin_index(){
		$data = $this->Contact->find('all');
		$title_for_layout = 'Pages';
		$this->set(compact('data', 'title_for_layout'));
	}

	public function index(){
		
		$data = $this->Contact->find('first');
		if(!$data){
			throw new NotFoundException("Такой страницы нету");
		}
		$title_for_layout = $data['Contact']['title'];
		$meta['keywords'] = $data['Contact']['keywords'];
		$meta['description'] = $data['Contact']['description'];
		$this->set(compact('data', 'title_for_layout', 'meta'));
	}


	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Contact->exists($id)){
			throw new NotFoundException('Not found...');
		}
		$data = $this->Contact->findById($id);
		if(!$id){
			throw new NotFoundException('Not found...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Contact->id = $id;
			$data1 = $this->request->data['Contact'];
			
			if($this->Contact->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			$title_for_layout = 'Редактирование контактов';
			$this->set(compact('id', 'data', 'title_for_layout'));
		}
	}

	public function contactus(){

		if( !empty($this->request->data) ){
			$email = new CakeEmail('smtp');
			$email->from(array('info@uxui.kz' => 'Usability Lab'))
			->to('info@uxui.kz')
			->subject('New letter');
			$message = 'Name: '. $this->request->data['Contact']['name'] . ' Телефон: '. $this->request->data['Contact']['phone'];
			if( $email->send($message) ){
				$this->Session->setFlash('Письмо успешно отправлено', 'default', array(), 'good');
				//unset($message);
				// return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка!', 'default', array(), 'bad');
				return $this->redirect($this->referer());
			}
		}
	}
}
