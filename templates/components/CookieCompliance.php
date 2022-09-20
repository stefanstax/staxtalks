<?php include(__DIR__ . '/../../paletteSystem.php'); ?>

<?php

$accept = "Accept";
$decline = "Decline";
$cookieHeadline = "Cookie Policy | GDPR";
$cookieText = "StaxTalks. We use cookies on our website to give you the most relevant experience by remembering your preferences and repeat visits. By clicking <strong>Accept</strong> or not providing us with an answer, you consent to the use of cookies.";
?>

<div id="complianceChecker" class="hidden fixed top-0 left-0 bg-[<?php echo $GlassWhite; ?>66] rounded-md flex justify-center items-center min-h-full w-full">
    <div class="w-11/12 lg:w-4/12 xl:w-3/12 flex flex-wrap justify-start items-center shadow-2xl shadow-[<?php echo $BabyBlue; ?>] rounded-md bg-[<?php echo $BabyBlue; ?>] text-black p-4">
        <h4><?php echo $cookieHeadline; ?></h4>
        <p><?php echo $cookieText; ?></p>
        <a href="<?php site_url("/privacy-policy/"); ?>" class="text-white w-full bg-[<?php echo $MatteNavy; ?>] hover:bg-[<?php echo $ButtonHover; ?>] active:bg-[<?php echo $ButtonActive; ?>] <?php echo $roundedFull; ?> p-2 px-4">View policy on Cookies</a>
        <p>Do you accept cookies on this website?</p>
        <div class="gap-[10px]">
            <button id="cookiesAcceptanceF" class="text-white my-2 w-fit bg-[<?php echo $MatteNavy; ?>] hover:bg-[<?php echo $ButtonHover; ?>] active:bg-[<?php echo $ButtonActive; ?>] <?php echo $roundedFull; ?> p-2 px-4">Accept</button>
            <button id="cookiesRejectionF" class="text-white my-2 w-fit bg-[<?php echo $MatteNavy; ?>] hover:bg-[<?php echo $ButtonHover; ?>] active:bg-[<?php echo $ButtonActive; ?>] <?php echo $roundedFull; ?> p-2 px-4">Reject</button>
            <button id="cookiesSettingsF" class="text-white my-2 w-fit bg-[<?php echo $MatteNavy; ?>] hover:bg-[<?php echo $ButtonHover; ?>] active:bg-[<?php echo $ButtonActive; ?>] <?php echo $roundedFull; ?> p-2 px-4">Cookie Settings</button>
        </div>
    </div>
</div>