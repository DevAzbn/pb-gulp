<?php
// Функции темы

class AzbnController {
// Моя надстройка над темой вордпресса
public $Azbn = null;
public $config = array();
public $post = array();
public $Ajax = null;
public $Shortcodes = null;
public $Imgs = null;
	
	public function __construct($config=array())
	{
		$this->Azbn = &$this;
		$this->config = $config;
	}
	
	public function setPath($tpl)
	{
		$this->config['path']=array(
			'tpl'=>'tpl',
			'img'=>$tpl.'/img',
			'css'=>$tpl.'/css',
			'js'=>$tpl.'/js',
			'fonts'=>$tpl.'/fonts',
			'azbn'=>$tpl.'/azbn.ru',
		);
	}
	
	public function path($type)
	{
		if(isset($this->config['path'][$type])) {
			return $this->config['path'][$type];
		} else {
			return '/';
		}
	}
	
	public function setAjax()
	{
		include('AzbnAjax.class.php');
		if($this->Ajax == null) {
			$this->Ajax = new AzbnAjax($this);
		} else {
			
		}
	}
	
	public function setShortcodes()
	{
		include('AzbnShortcodes.class.php');
		if($this->Shortcodes == null) {
			$this->Shortcodes = new AzbnShortcodes($this);
		} else {
			
		}
	}
	
	public function setImgs()
	{
		include('AzbnImgs.class.php');
		if($this->Imgs == null) {
			$this->Imgs = new AzbnImgs($this);
		} else {
			
		}
	}
	
	public function as_str($str) {
		return htmlspecialchars(trim($str), ENT_QUOTES, 'UTF-8');
	}
	
	public function as_int($val) {
		return intval($val);
	}
	
	public function tpl($tpl, $param) {
		$filename = get_template_directory().'/'.$this->config['path']['tpl'].'/'.$tpl.'.tpl.php';
		if(file_exists($filename)) {
			require($filename);
		} else {
			echo '<!-- not found: '.$filename.' -->';
		}
	}
	
}
