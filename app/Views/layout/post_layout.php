<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Protal Berita Codeigniter</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>

<body>

    <?= $this->include('layout/navbar') ?>
    <?= $this->include('layout/header') ?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?= $this->renderSection('content') ?>
            </div>
            <div class="col-md-4">
                <?= $this->include('layout/sidebar') ?>
            </div>
        </div>
    </div>

    <?= $this->include('layout/footer') ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>