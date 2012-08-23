<?php

class User extends Eloquent
{

	public function Checklist()
	{

		return $this->has_many('Checklist');
	}



}