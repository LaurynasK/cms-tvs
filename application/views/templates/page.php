<div class="span9">
    <article>
        <h2><?php echo e($page->title); ?></h2>
        <p class="pubdate">
            <?php echo e($page->title); ?>
        </p>
        <?php echo $page->body; ?>
    </article>
</div>

<div class="span3">
    <h2>Recent News</h2>
    <?php $this->load->view('sidebar'); ?>
</div>