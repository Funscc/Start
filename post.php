
<?php $this->need('header.php');?>

    <div>
        <section id="content">
            <header class="main-header post-head">
                <div class="overlay">
                    <section class="container middle siteinfo">
                        <h2 class="page-title"><?php $this->title() ?></h2>
                        <h4 class="page-desc">
                        <time class="post-date"><?php $this->date('F j, Y') ?></time>
                    </h4>
                    </section>
                </div>
            </header>
    <main class="container post-page" role="main">
        <article class="post card post-md">
            <section class="post-content">
             <?php $this->content(); ?>
            </section>
                    <footer class="post-footer">
                <section class="tags">
                    <?php $this->tags('', true, 'none'); ?>  

                </section>
                
            </footer>
        </article>
<div class="section-spacer up-down--list">
<div class="fudong1">
 <span class="prev1"><?php $this->thePrev('%s','没有了'); ?> </span>  </div>　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　 　　　　　　
 <div class="fudong2"><span class="next1"> <?php $this->theNext('%s','没有了'); ?></span></div>
　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　 　　　　　　
 <div class="fudong2">   </div>

<aside class="author-info card clearfix">
<?php $this->need('comments.php'); ?>
</aside>
 </main>
<div class="section-spacer up-down--list">
　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　 　　　　　　
 <div class="fudong2">   </div>


</div>

 <?php $this->need('footer.php'); ?>