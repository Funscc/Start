<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?php $this->archiveTitle(array(
	            'category'  =>  _t('分类 %s 下的文章'),
	            'search'    =>  _t('包含关键字 %s 的文章'),
	            'tag'       =>  _t('标签 %s 下的文章'),
	            'author'    =>  _t('%s 发布的文章')
	        ), '', ' - '); ?><?php $this->options->title(); ?>
	</title>
	<link rel="stylesheet" href="<?php $this->options->themeUrl('css/index.css'); ?>">
	<link href="https://cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link rel="shortcut icon" href="<?php $this->options->themeUrl('img/favico.ico'); ?>">
	<script>
	(function(){
    var bp = document.createElement('script')
    bp.src = '//push.zhanzhang.baidu.com/push.js';
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
	</script>    
	<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?d7e501d05915d7858093f55f2932a437";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
       
	<?php $this->header(); ?> 
</head>
<body>
	<nav id="bar" class="clearfix transparent">
		<section class="container extend">
			<a href="/">
		    	<span id="site-title" class="ripple">
		        	<?php $this->options->title(); ?>
		    	</span>
			</a>
	<nav id="menu" class="clearfix transparent">
    	<li><a href="<?php $this->options->siteUrl(); ?>" title="Home">首页</a></li>
   		<?php $this->widget('Widget_Contents_Page_List')
   		->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
	</nav>
		</section>
	</nav>
