<?= loadPartial('head'); ?>
<?= loadPartial('navbar'); ?>
<?= loadPartial('showcase'); ?>
<?= loadPartial('top-banner'); ?>

    <!-- Job Listings -->
    <section>
      <div class="container mx-auto p-4 mt-4">
        <div class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">Recent Jobs</div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">

          <?php foreach($posts as $post) : ?>
          <div class="rounded-lg shadow-md bg-white">
            <div class="p-4">
              <h2 class="text-xl font-semibold"> <?=  $post->title ?> </h2>
              <p class="text-gray-700 text-lg mt-2">
                <?= substr($post->content, 0 , 250) . ' ...' ?>
              </p>
              <ul class="my-4 bg-gray-100 p-4 rounded">
                <li class="mb-2"><strong>Writer: </strong><?= $post->writer ?></li>
                <li class="mb-2">
                  <strong>Rank:</strong> 3
                  <span
                    class="text-xs bg-slate-500 text-white rounded-full px-2 py-1 ml-2"
                    >new</span
                  >
                </li>
                <li class="mb-2">
                <strong>Category:</strong> 
                    <span class="<?php 
                    $category = strtolower($post->category);
                    if ($post->category == 'Frontend') {
                    echo 'bg-red-500';
                    } elseif ($post->category == 'Backend') {
                    echo 'bg-blue-500';
                    } else {
                    echo 'bg-green-500';
                    }
                    ?> text-white p-2 rounded-xl text-sm">
                    <?= $post->category ?>
                    </span>
                </li>
              </ul>
             <a href="post?id=<?= $post->id ?>"
                class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-slate-200 bg-slate-900 hover:bg-slate-500"
              >
                Details
              </a>
            </div>
          </div>
        <?php endforeach; ?>

        </div>
        <a href="/blog" class="block text-xl text-center">
          <i class="fa fa-arrow-alt-circle-right"></i>
          Show All Posts
        </a>
      </section>

      <?= loadPartial('bottom-banner'); ?>
      <?= loadPartial('footer'); ?>