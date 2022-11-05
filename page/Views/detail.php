<?= $this->extend('Translations\page\Views\layout') ?>

<?= $this->section('content') ?>

<div class="p-5 mb-4 bg-light border rounded-3">
    <div class="container-fluid py-1">
        <h3>
            <?= esc($current['language']); ?> (<code><?= esc($current['locale']); ?></code>)
        </h3>
        <p class="lead">
            If you see some missing translations and you speak natively in this language, we would appreciate if you could send a PR. For more detailed information about how to contribute, please check the <a href="https://github.com/codeigniter4/translations/blob/develop/CONTRIBUTING.md">Contributing Guide</a>.
        </p>
        <a class="btn btn-primary" href="/translations">
            Go back to the list of all languages
        </a>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <table class="table table-bordered table-responsive-sm">
            <caption>These translations are intended for use with CodeIgniter 4.x applications.</caption>
            <thead>
                <tr>
                    <th>File</th>
                    <th>Lines</th>
                    <th>Progress</th>
                    <th>Missing keys</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($current['files'] as $name => $info): ?>
                    <tr class="align-middle">
                        <td class="w-25"><?= esc($name); ?></td>
                        <td class="text-end"><?= esc($info['count']); ?> / <?= esc($en[$name]['count'] ?? '?'); ?></td>
                        <td class="">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: <?= esc($info['percent'], 'attr'); ?>%;"><?= esc($info['percent']); ?>%</div>
                            </div>
                        </td>
                        <td class="w-50 text-center">
                            <?php foreach ($info['missing'] as $missing): ?>
                                <span class="badge bg-danger"><?= esc($missing); ?></span>
                            <?php endforeach; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
