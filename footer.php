<?php include(__DIR__ . '/paletteSystem.php'); ?>
<?php include(__DIR__ . '/componentPath.php'); ?>
</main>


<footer class="lg:ml-[15em] p-6 pb-24 lg:pb-6 h-full text-white bg-[<?php echo $MatteNavy; ?>] site-footer">
  <div class="w-full flex flex-wrap justify-center items-start gap-[40px] max-w-[1024px] mx-auto">
    <div class="w-full lg:w-2/12">
      <img class="max-w-[50px] mb-6" src="https://cdn.staxtalks.com/files/assets/2022/08/03182513/staxtalks-logo.png" alt="Stefan Stax Business Logo - Black colored outline logo - Illustrated logo representing an S">
      <?php get_template_part($MenuDividerShort, "part"); ?>
      <a href="https://instagram.com/staxtalks/" class="flex justify-start items-center gap-[10px] my-2">
        <iconify-icon icon="akar-icons:instagram-fill"></iconify-icon> Instagram
      </a>
      <a href="https://staxtalks.com/contact/" class="flex justify-start items-center gap-[10px] my-2">
        <iconify-icon icon="akar-icons:inbox"></iconify-icon> Send a DM
      </a>
    </div>
    <div class="w-full lg:w-6/12 lg:pb-0">
      <h4>Company Information</h4>
      <?php get_template_part($MenuDividerShort, "part"); ?>
      <p class="exclusion my-2">
        <iconify-icon icon="akar-icons:lock-on"></iconify-icon> StaxTalks is a representation for Stefan Stax Limited
      </p>
      <p class="exclusion my-2">
        <iconify-icon icon="akar-icons:stack-overflow-fill"></iconify-icon> Company Number: 14469390
      </p>
      <p class="exclusion my-2">
        <iconify-icon icon="akar-icons:check-in"></iconify-icon> 71-75 Shelton Street, London, United Kingdom
      </p>
    </div>
    <div class="w-full lg:w-3/12">
      <h4>Legal</h4>
      <?php get_template_part($MenuDividerShort, "part"); ?>
      <a href="<?php home_url("documents"); ?>">Documents</a>
    </div>
  </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>