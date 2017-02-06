<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';

		//First Quote
		$record = $this->quotes->first();

		//merge
		$this->data = array_merge($this->data, $record);

		$this->render();
	}

	/**
	 *	Shows the quote by the top left author image (Bob Monkhouse)
	 */
	public function zzz()
	{
		//view to be shown
		$this->data['pagebody'] = 'justone';

		//quote
		$record = $this->quotes->first();

		//merge
		$this->data = array_merge($this->data, $record);

		$this->render();
	}

	public function gimme($id)
	{
		//view to be shown
		$this->data['pagebody'] = 'justone';

		//Get the quote from the param
		$record = $this->quotes->get($id);

		//merge
		$this->data = array_merge($this->data, $record);

		$this->render();
	}

}
