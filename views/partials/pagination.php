 
    <nav class="pagination is-rounded my-4" role="navigation" aria-label="pagination">
    <?php if ($page > 1): ?>
        <a href="/users?page=<?= $page - 1 ?>" class="pagination-previous " aria-disabled="true">Previous</a>
    <?php endif ?>
    <?php if ($page < $totalPage): ?>
        <a href="/users?page=<?= $page + 1 ?>" class="pagination-next">Next page</a>
    <?php endif; ?>
    <ul class="pagination-list">
        <?php for ($i = 1; $i <= $totalPage; $i++): ?>
            <li><a href="/users?page=<?= $i ?>" class="pagination-link <?= $page === $i ? 'is-current' : '' ?>" aria-label="Goto page <?= $i ?>"><?= $i ?></a></li>
        <?php endfor; ?>

    </ul>
</nav>