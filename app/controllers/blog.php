<?php

class Blog extends Controller 
{

	public function index($slug = '', $pagenum = '')
	{
		$model = $this->model('BlogModel');

		if(!empty($slug)){
			if($slug == "page") {
				$this->getPages($model, $pagenum);
			}else{
				$this->getSingle($model, $slug);
			}
		}else{
			$pagenum = 1;
			$this->getPages($model, $pagenum);
		}
	}

	public function tag($tag = '')
	{
		$model = $this->model('BlogModel');

		$taglist = $model->getTagList();

		// print_r($taglist);

		$linksdata = $this->model('LinksModel');
		$sitenav = $linksdata->getSiteLinks();
		$footerdata = $linksdata->footerLinks();

		$headerdata = array(
			"title" => "Blog ampnet media Works - the Dallas, Texas Freelance Web Developer who is looking to help take your company get online. / Adam Moore developing in Dallas, Texas",
			"description" => "The ampnet media blog is full of technical information and useful web knowledge. You'll also find some writings about travel, the automotive industry, and more randomness."
		);

		$pageheader = array(
			"title" => "Bloging", 
			"subtitle" => "<small>Searching for <span>(".$tag.")</span></small>", 
			"class" => "page-header",
			"heroimg" => "background-image: url(/assets/img/home-banner.jpg);"
		);

		$this->view('blog/index', array(
			'headerdata' => $headerdata,
			'sitenav' => $sitenav,
			'pageheader' => $pageheader,
			'footerdata' => $footerdata));		
	}

	private function getSingle($model, $slug)
	{
		$post = $model->getPost($slug);
		$linksdata = $this->model('LinksModel');
		$sitenav = $linksdata->getSiteLinks();
		$footerdata = $linksdata->footerLinks();

		$headerdata = array(
			"title" => $post['title']." ".$post['subtitle'],
			"description" => strip_tags($post['excerpt'])
		);

		$pageheader = array(
			"title" => $post['title'], 
			"class" => "page-header", 
			"subtitle" => $post['subtitle'], 
			"heroimg" => "background-image: url(".$post['imglg'].");", 
			"postcolor" => "background-color: ".$post['color'].";"
		);

		$this->view('blog/single', array(
			'headerdata' => $headerdata,
			'sitenav' => $sitenav,
			'pageheader' => $pageheader,
			'footerdata' => $footerdata,
			'title' => $model->pageTitle,
			'slogan' => $model->pageSlogan,
			"post" => $post
		));	
	}

	private function getPages($model, $pagenum)
	{
		$numPosts = $model->getNumbPosts();
		$countby = 4;
		$nextpage = $pagenum + 1;
		$prevpage = $pagenum -1;
		$maxpagecount = ceil($numPosts / $countby);
		// Do more maths to make this happen :\
		if($pagenum == 1) {
			$minpage = 0;
			$maxpage = 4;
		}elseif($pagenum == 2) {
			$minpage = 4;
			$maxpage = 8;
		}elseif($pagenum == 3) {
			$minpage = 8;
			$maxpage = 12;
		}elseif($pagenum == 4) {
			$minpage = 12;
			$maxpage = 16;
		}

		if($maxpage > $numPosts) {
			$maxpage = $numPosts;
		}

		$list = $model->getList($minpage,$maxpage);

		$linksdata = $this->model('LinksModel');
		$sitenav = $linksdata->getSiteLinks();
		$footerdata = $linksdata->footerLinks();

		$headerdata = array(
			"title" => "Blog ampnet media Works - the Dallas, Texas Freelance Web Developer who is looking to help take your company get online. / Adam Moore developing in Dallas, Texas",
			"description" => "The ampnet media blog is full of technical information and useful web knowledge. You'll also find some writings about travel, the automotive industry, and more randomness."
		);

		$pageheader = array(
			"title" => "Bloging", 
			"subtitle" => "<small>with ampnet<span>(media)</span></small>", 
			"class" => "page-header",
			"heroimg" => "background-image: url(/assets/img/home-banner.jpg);"
		);

		$this->view('blog/index', array(
			'headerdata' => $headerdata,
			'sitenav' => $sitenav,
			'pageheader' => $pageheader,
			'footerdata' => $footerdata,
			'title' => $model->pageTitle,
			'slogan' => $model->pageSlogan,
			'list' => $list,
			'nextpage' => $nextpage,
			'prevpage' => $prevpage,
			'maxpagecount' => $maxpagecount
		));
	}

	public function fulllist()
	{
		$model = $this->model('BlogModel');
		$numPosts = $model->getNumbPosts();
		$list = $model->getList(0,$numPosts);

		$this->view('blog/fulllist', array(
			"post" => $list
		));	
	}
}