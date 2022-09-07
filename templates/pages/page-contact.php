<?php include(__DIR__ . '/../../paletteSystem.php'); ?>

<?php the_content(); ?>

<div class="ff w-full">
    <div class="ff_choice flex gap-[20px] justify-center items-center mb-6">
        <button class="p-4 active bg-[<?php echo $MatteBlack; ?>] hover:bg-[<?php echo $ButtonHover; ?>] active:bg-[<?php echo $ButtonActive; ?>] shadow-2xl shadow-[<?php echo $BabyBlueShadow; ?>] text-[#131616] drop-shadow-lg rounded-md" id="ffPersonal">Personal Form</button>
        <button class="p-4 bg-[<?php echo $MatteBlack; ?>] hover:bg-[<?php echo $ButtonHover; ?>] active:bg-[<?php echo $ButtonActive; ?>] shadow-2xl shadow-[<?php echo $BabyBlueShadow; ?>] text-[#131616] drop-shadow-lg rounded-md" id="ffBusiness">Business Form</button>
    </div>
    <div class="ff_personal">
        <?php echo do_shortcode('[fluentform id="1"]'); ?>
    </div>
    <div class="ff_business hidden">
        <?php echo do_shortcode('[fluentform id="10"]'); ?>
    </div>
</div>