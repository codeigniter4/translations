<?= $this->extend('Translations\page\Views\layout') ?>

<?= $this->section('content') ?>

<div class="p-5 mb-4 bg-light border rounded-3">
    <div class="container-fluid py-1">
        <p class="lead">
            This website provides brief information on the translation status for every available language in CodeIgniter 4 framework. If you see some missing translations in a language you speak natively, we would appreciate if you could send a PR. For more detailed information about how to contribute, please check the <a href="https://github.com/codeigniter4/translations/blob/develop/CONTRIBUTING.md">Contributing Guide</a>.
        </p>
        <a class="btn btn-primary" href="https://github.com/codeigniter4/translations">
            Check this project on GitHub
        </a>
    </div>
</div>

<div class="row">
    <div class="col-12 col-lg-8 offset-lg-2 align-self-center">
        <table class="table table-bordered">
            <caption>These translations are intended for use with CodeIgniter 4.x applications.</caption>
            <thead>
                <tr>
                    <th>Language</th>
                    <th>Locale</th>
                    <th>Progress</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($languages as $lang): ?>
                    <tr class="align-middle">
                        <td><?= esc($lang['language']); ?></td>
                        <td><code><?= esc($lang['locale']); ?></code></td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: <?= esc($lang['percent'], 'attr'); ?>%;"><?= esc($lang['percent']); ?>%</div>
                            </div>
                        </td>
                        <td class="text-center">
                            <a href="<?= esc($lang['locale'], 'attr'); ?>.html" class="btn btn-sm btn-outline-dark">Details</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
