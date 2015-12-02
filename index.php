<?php
/**
 * Start Theme
 * 
 * @package Start Theme 
 * @author  Jasho&Axhello
 * @version 1.0
 * @link http://www.xiachedan.cc
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');?>

	<div>
		<section id="content">
		<header class="main-header post-head">
			<div class="overlay">
				<section class="container middle siteinfo">
					<h2 class="page-title"><?php $this->options->title(); ?></h2>
						<h4 class="page-desc">
							<span>介绍和研究生活,行为,处事心理学,记录生活历程</span>
                    	</h4>
				</section>
			</div>
		</header>
           
	<section id="posts" class="container clearfix">
		<span id="texttext"></span>
	 		<?php while($this->next()): ?>
	<article class="post card first animated with-image" style="background:url(<?php Thumbnail_Plugin::show($this); ?>) center center">
		<header class="post-header ripple">
			<h2 class="post-title">
				<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
			</h2>
		</header>
			<section class="post-excerpt">
				<?php $this->excerpt('350', '...') ?>
			</section>
	</article>
			<?php endwhile; ?>
	</section>

	<section class="pagination container clearfix">
		<?php $this->pageLink('<','prev') ?>
		<?php $this->pageLink('>','next') ?>
	</section>
<?php $this->need('footer.php'); ?>