<?php the_content(); ?>

<div class="ff w-full">
    <div class="ff_choice flex gap-[20px] justify-center items-center mb-6">
        <button class="p-4 active bg-slate-50 active:bg-slate-300 hover:bg-slate-300 text-[#131616] drop-shadow-lg rounded-full" id="ffPersonal">Personal Form</button>
        <button class="p-4 bg-slate-50 active:bg-slate-300 hover:bg-slate-300 text-[#131616] drop-shadow-lg rounded-full" id="ffBusiness">Business Form</button>
    </div>
    <div class="ff_personal">
        <?php echo do_shortcode('[fluentform id="1"]'); ?>
    </div>
    <div class="ff_business hidden">
        <?php echo do_shortcode('[fluentform id="10"]'); ?>
    </div>
</div>