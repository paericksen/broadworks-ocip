<?php

namespace BroadworksOCIP\Console;

class Table {

	private $headers = array();

	private $data = array();

	private $pad = array();

	public function setHeaders($headers = null){
		if(!empty($headers)){
			if(is_array($headers)){
				$this->headers = $headers;
			}

			foreach($this->headers as $index => $header){
				$this->pad[$index] = strlen($header);
			}
		}
	}

	public function addData($data = null){
		if(!empty($data)){
			if(is_array($data)){
				$this->data = $data;
			}

			foreach($this->data as $d){
				foreach($d as $index => $data){
					if(strlen($data) > $this->pad[$index]){
						$this->pad[$index] = strlen($data);
					}
				}
			}
		}
	}

	public function getTable(){
		$string;

		foreach($this->headers as $index => $h){
			$pad = $this->pad[$index] +1;
			$string .= sprintf("%-{$pad}s", $h);
		}

		$string .= PHP_EOL;

		foreach($this->data as $data){
			foreach($data as $index => $d){
				$pad = $this->pad[$index] +1;
				$string .= sprintf("%-{$pad}s", $d);
			}

			$string .= PHP_EOL;
		}

		return $string;
	}
}