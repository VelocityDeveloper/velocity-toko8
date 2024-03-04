<div class="header-top bg-white">
    <div class="container px-md-0 p-2 text-center text-md-start d-md-flex align-items-center justify-content-end">
        <div class="open-store px-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
            </svg> <?php echo velocitytheme_option('open_store'); ?>
        </div>
        <div class="kontak-seller px-2"><?php echo do_shortcode('[kontak style="false"]'); ?></div>
        <div class="profile-icons px-2">
            <div class="d-flex justify-content-center justify-content-md-end align-items-center">
                <div class="p-2"><?php echo do_shortcode('[profile]'); ?></div>
            </div>
        </div>
    </div>
</div>