<?php

class Checklists_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{


		
		$checklist = Checklist::with('todo')->get();


		return view::make('checklist.index', array('checklists' =>$checklist));
	}

	public function post_checklist()
	{
		//
	}

	public function action_edit()
	{

	}

}