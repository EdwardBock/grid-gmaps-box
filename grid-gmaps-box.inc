<?php

class grid_gmaps_box extends grid_static_base_box
{
	public function __construct()
	{
		$this->content=new StdClass();
		$this->content->long = "";
		$this->content->lat = "";
	}

	public function type()
	{
		return 'gmaps';
	}

	public function build($editmode) {

		if($editmode) 
		{
			return t("Google Maps V3"); 
		}
		else
		{
			return $this->content; 
		}
	}

	public function contentStructure() {
		$cs = array();
		$cs[] = array(
			'key' => 'long',
			'label'=>t('Longitde'),
			'type'=>'text',
		);
		$cs[] = array(
			'key' => 'lat',
			'label'=>t('Latitude'),
			'type'=>'text',
		);
		return $cs;
	}

}