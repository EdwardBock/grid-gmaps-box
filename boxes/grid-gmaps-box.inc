<?php

class grid_gmaps_box extends grid_static_base_box
{
	public function __construct()
	{
		$this->content=new StdClass();
		$this->content->coordinates = new StdClass();
		$this->content->coordinates->lat = "";
		$this->content->coordinates->lng = "";
	}

	public function type()
	{
		return 'gmaps';
	}

	public function build($editmode) {
		return $this->content;
	}

	public function contentStructure() {
		$cs = array();
		$cs[] = array(
			'key' => 'coordinates',
			'label'=>t('Lat & long'),
			'type'=>'coordinates',
		);
		return $cs;
	}

}