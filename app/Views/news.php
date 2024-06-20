<?= $this->extend('layout/post_layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <?php foreach ($newses as $news) : ?>
        <div class="row">
            <div class="col-md-12 mb-2 card">
                <div class="card-body">
                    <h5 class="h5"><a href="/news/<?= $news['slug'] ?>"><?= $news['title'] ?></a></h5>
                    <p><?= substr($news['content'], 0, 120) ?></p>
                </div>
            </div>
            
        </div>

    <?php endforeach ?>
</div>


<?= $this->endSection() ?>