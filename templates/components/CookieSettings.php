<?php include(__DIR__ . '/../../paletteSystem.php'); ?>

<div id="cookieSettingsPopup" class="hidden w-full min-h-full fixed top-0 left-0 flex flex-wrap justify-center items-center bg-[<?php echo $GlassWhite; ?>66]">
    <div class="w-11/12 lg:w-4/12 xl:w-3/12 shadow-2xl shadow-[<?php echo $BabyBlue; ?>] bg-[<?php echo $BabyBlue; ?>] rounded-md p-4">
        <h4>Cookie Compliance Settings
        </h4>
        <p>Here at StaxTalks I do my best not to use any cookie unless of upmost necessity.StaxTalks does not use Google Analytcs or other tracking tools.</p>
        <p>Read about cookie categories <a href="<?php site_url("/cookies/"); ?>">here</a></p>
        <div class="w-full my-2 flex justify-between items-center bg-slate-100 p-2 rounded-md">
            <span>
                <iconify-icon inline icon="akar-icons:circle"></iconify-icon> Necessary
            </span>
            <input class="cookieTag cursor-pointer" type="checkbox" checked disabled="true" id="necessaryCookies" name="Necessary" />
        </div>
        <ul id="cookieList">

        </ul>

        <div class="w-full my-2 flex justify-between items-center bg-slate-100 p-2 rounded-md">
            <span>
                <iconify-icon inline icon="akar-icons:pin"></iconify-icon> Pin the page
            </span>
            <input class="cookieTag cursor-pointer" type="checkbox" name="Pin the page" />
        </div>


        <div class="w-full py-2">
            <button id="cookiesAcceptanceB" class="w-fit bg-[<?php echo $MatteNavy; ?>] hover:bg-[<?php echo $ButtonHover; ?>] active:bg-[<?php echo $ButtonActive; ?>] <?php echo $roundedFull; ?> text-white p-2 px-4">Save Choices</button>
            <button id="cookiesRejectionB" class="w-fit bg-[<?php echo $MatteNavy; ?>] hover:bg-[<?php echo $ButtonHover; ?>] active:bg-[<?php echo $ButtonActive; ?>] <?php echo $roundedFull; ?> text-white p-2 px-4">Reject All</button>
            <button id="closePopup" class="w-fit my-2 bg-[<?php echo $MatteNavy; ?>] hover:bg-[<?php echo $ButtonHover; ?>] active:bg-[<?php echo $ButtonActive; ?>] <?php echo $roundedFull; ?> text-white p-2 px-4">X</button>
        </div>
    </div>
</div>