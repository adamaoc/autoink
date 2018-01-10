<?php

class Post extends Controller
{
	public function index()
	{
		require_once $_SERVER['DOCUMENT_ROOT']."/app/core/sendEmail.php";
	}
}
