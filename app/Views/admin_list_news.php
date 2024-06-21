<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<table class="table">
<thead>
<tr>
    <th>#</th>
    <th>Title</th>
    <th>Status</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
<?php foreach($newses as $news): ?>
<tr>
    <td><?= $news['id'] ?></td>
    <td>
        <strong><?= $news['title'] ?></strong><br>
        <small class="text-muted"><?= $news['created_at'] ?></small>
    </td>
    <td>
        <?php if($news['status'] === 'published'): ?>
        <small class="text-success"><?= $news['status'] ?></small>
        <?php else: ?>
        <small class="text-muted"><?= $news['status'] ?></small>
        <?php endif ?>
    </td>
    <td>
        <a href="<?= base_url('admin/news/'.$news['id'].'/preview') ?>" class="btn btn-sm btn-outline-secondary" target="_blank">Preview</a>
        <a href="<?= base_url('admin/news/'.$news['id'].'/edit') ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
        <a href="#" data-href="<?= base_url('admin/news/'.$news['id'].'/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a>
    </td>
</tr>
<?php endforeach ?>
</tbody>
</table>

<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h2 class="h2">Are you sure?</h2>
        <p>The data will be deleted and lost forever</p>
      </div>
      <div class="modal-footer">
        <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<script>
function confirmToDelete(el){
    $("#delete-button").attr("href", el.dataset.href);
    $("#confirm-dialog").modal('show');
}
</script>


<?= $this->endSection() ?>