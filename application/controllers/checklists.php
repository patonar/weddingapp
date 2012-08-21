<?php

class Checklists_Controller extends Base_Controller {

	public function action_index()
	{

		$newone = new Checklist;
		$newone->title = 'This is the title';
		$newone->description = 'This is the description';
		$newone->save();

		$checklist = Checklist::all();
	


		return view::make('checklist.index', array('checklists' =>$checklist));
	}

	public function action_show()
	{

	}

	public function action_edit()
	{

	}

}