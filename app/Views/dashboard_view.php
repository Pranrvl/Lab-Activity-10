<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Dashboard</h4>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Selamat datang, <strong><?= esc(session()->get('username')) ?></strong>!
                    </p>
                    <p class="text-muted">Kamu berhasil login ke sistem.</p>
                    <a href="<?= base_url('User/logout') ?>" class="btn btn-danger">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
