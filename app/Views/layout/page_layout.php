<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Protal Berita Codeigniter</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<body>

<?= $this->include('layout/navbar') ?>
    <?= $this->include('layout/header') ?>
    
    <?= $this->renderSection('content') ?>
    
    <?= $this->include('layout/footer') ?>

</body>

</html>