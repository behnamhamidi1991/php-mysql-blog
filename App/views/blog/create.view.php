<?= loadPartial('head'); ?>
<?= loadPartial('navbar'); ?>
<?= loadPartial('top-banner'); ?>

 <!-- Post a Job Form Box -->
 <section class="flex justify-center items-center mt-20">
      <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-600 mx-6">
        <h2 class="text-4xl text-center font-bold mb-4">Create a Post</h2>
        <!-- <div class="message bg-red-100 p-3 my-3">This is an error message.</div>
        <div class="message bg-green-100 p-3 my-3">
          This is a success message.
        </div> -->
        <form method="POST">
          <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
            Post Details
          </h2>
          <div class="mb-4">
            <input
              type="text"
              name="title"
              placeholder="Post Title"
              class="w-full px-4 py-2 border rounded focus:outline-none"
            />
          </div>
          <div class="mb-4">
            <textarea
              name="Content"
              placeholder="Post Content"
              class="w-full px-4 py-2 border rounded focus:outline-none"
            ></textarea>
          </div>

          <div class="mb-4">
            <input
              type="text"
              name="tags"
              placeholder="Tags"
              class="w-full px-4 py-2 border rounded focus:outline-none"
            />
          </div>

          <button
            class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none"
          >
            Save
          </button>
          <a
            href="/"
            class="block text-center w-full bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded focus:outline-none"
          >
            Cancel
          </a>
        </form>
      </div>
    </section>

    <!-- Bottom Banner -->
    <section class="container mx-auto my-6">
      <div
        class="bg-blue-800 text-white rounded p-4 flex items-center justify-between"
      >
        <div>
          <h2 class="text-xl font-semibold">Looking to hire?</h2>
          <p class="text-gray-200 text-lg mt-2">
            Post your job listing now and find the perfect candidate.
          </p>
        </div>
        <a
          href="post-job.html"
          class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300"
        >
          <i class="fa fa-edit"></i> Post a Job
        </a>
      </div>
    </section>

<?= loadPartial('bottom-banner'); ?>
<?= loadPartial('footer'); ?>