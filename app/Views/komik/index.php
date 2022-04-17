<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2"><span>
                    <center>komik kesukaan</center>
                </span> </h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"><span>sampul</span></th>
                        <th scope="col"><span>judul</span></th>
                        <th scope="col"><span>aksi</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($komik as $k) : ?>
                        <tr><span>
                                <th scope="row"><?= $i++; ?></th>
                                <td><img src="/img/<?= $k['sampul'] ?> " alt="" class="sampul"></td>
                                <td><?= $k['judul']; ?></td>
                                <td>
                                    <a href="/komik/<?= $k['slug']; ?>" class="btn btn-success">detail</a>
                                </td>
                        </tr></span>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<?= $this->endsection(); ?>