
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
                
            </footer>
        </article>
 </main>

 <?php $this->need('footer.php'); ?>