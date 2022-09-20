<?php include(__DIR__ . '/paletteSystem.php'); ?>

</main>
<footer class="lg:ml-[15em] p-6 h-full text-white bg-[<?php echo $MatteBlack; ?>] site-footer">
  <div class="w-full flex flex-wrap justify-center items-start gap-[40px]">
    <div class="w-full lg:w-3/12">
      <img class="max-w-[50px] border-solid border-b-2 border-[#E6EDEE] pb-2 mb-6" src="https://cdn.staxtalks.com/files/assets/2022/08/03182513/staxtalks-logo.png" alt="Stefan Stax Business Logo - Black colored outline logo - Illustrated logo representing an S">
      <p><?php bloginfo("name"); ?> is a platform where you will learn real facts about it's founder whose mission is to encourage others to spread their real self in the world.</p>
      <p>On this platform you will also find blogs, porftolio work as well as a <a href="https://staxtalks.com/anonymous-confessions/">confessions.</a></p>
    </div>

    <div class="w-full lg:w-3/12 pb-24 lg:pb-0">
      <h4>Contact me via</h4>
      <div class="flex flex-col">
        <a href="https://instagram.com/staxtalks/" class="flex justify-start items-center gap-[10px] my-2">
          <iconify-icon icon="akar-icons:instagram-fill"></iconify-icon> Instagram
        </a>
        <a href="https://staxtalks.com/contact/" class="flex justify-start items-center gap-[10px] my-2">
          <iconify-icon icon="akar-icons:inbox"></iconify-icon> Send a DM
        </a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>