<?php

class AboutModel
{
	public $dataroot = "data/pages/";
	public $api = "about-data.json";

	public function aboutText($option = '')
	{
		$data = file_get_contents($this->dataroot.$this->api);
		$data = json_decode($data);

		if(!empty($option))
		{
			return $data->$option;
		}else{
			return $data->aboutText;

		}
	}

	public function specialtiesList() 
	{
		$data = file_get_contents($this->dataroot.$this->api);
		$data = json_decode($data);

		$specialties = $data->specialties;

		return $specialties;
	}

	public function beData()
	{
		$data = file_get_contents($this->dataroot.$this->api);
		$data = json_decode($data);

		$bedata = $data->bedata;

		return $bedata;
	}

	public function socialData()
	{
		$api = $this->dataroot."social-data.json";
		$data = file_get_contents($api);
		$data = json_decode($data);

		$socialData = $data->socialData;

		return $socialData;
	}
}
