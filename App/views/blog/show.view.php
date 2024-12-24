<?= loadPartial('head'); ?>
<?= loadPartial('navbar'); ?>
<?= loadPartial('top-banner'); ?>

<section class="container mx-auto p-4 mt-4">
      <div class="rounded-lg shadow-md bg-white p-3">
        <div class="flex justify-between items-center">
          <a class="block p-4 text-blue-700" href="/blog">
            <i class="fa fa-arrow-alt-circle-left"></i>
            Back To Posts
          </a>
          <div class="flex space-x-4 ml-4">
            <a
              href="/edit"
              class="px-4 py-2 bg-slate-500 hover:bg-blue-600 text-white rounded"
              >Edit</a
            >
            <!-- Delete Form -->
            <form method="POST">
              <button
                type="submit"
                class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded"
              >
                Delete
              </button>
            </form>
            <!-- End Delete Form -->
          </div>
        </div>
        <div class="p-4">
          <h2 class="text-xl font-semibold"><?= $post->title ?></h2>
          <p class="text-gray-700 text-lg mt-2">
            <?= $post->content ?>
          </p>
          <ul class="my-4 bg-gray-100 p-4">
          
            <li class="mb-2">
              <strong>Category:</strong> <span><?= $post->category ?></span>
              
            </li>
          </ul>
        </div>
      </div>
    </section>

    <?= loadPartial('bottom-banner'); ?>
    <?= loadPartial('footer'); ?>