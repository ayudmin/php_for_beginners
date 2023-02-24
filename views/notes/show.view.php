<?php require base_path('views/templates/header.php') ?>
<?php require base_path('views/templates/nav.php') ?>
<?php require base_path('views/templates/banner.php') ?>

<main>
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p class="mb-6">
        <a href="/notes" class="text-blue-500">
            <button class="underline" >Go back</button>
        </a>
    </p>

    <p><?= htmlspecialchars($note['body']) ?></p>
    <footer class="mt-6">
        <a href="/note/edit" class="text-gray-500 border border-current px-3 py-1 rounded">Edit</a>
    </footer>
</div>
</main>

<?php require base_path('views/templates/footer.php') ?>
    <form class="mt-6" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" value="<?= $note['id'] ?>" name="id">
        <button class="text-sm text-red-500">Delete</button>
    </form>
