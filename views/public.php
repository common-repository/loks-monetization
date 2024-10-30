<?php
/**
 * Represents the view for the public-facing component of the plugin.
 *
 * This typically includes any information, if any, that is rendered to the
 * frontend of the theme when the plugin is activated.
 *
 * @package   Plugin_Name
 * @author    Your Name <email@example.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2013 Your Name or Company Name
 */
?>

<?php
wix_Monetization::get_api_token();
if(get_option('wix_token')): ?>
<script type='text/javascript'>
    var wix = {};
    wix.config = {
        token : '<?= get_option('wix_token') ?>'
            <?php
            $domainsList = get_option('wix_fps_domains_list');
            $domainsList = array_map('trim', explode(",", $domainsList));
            $jsDomainsList = sprintf("['%s']", implode("','", $domainsList));
            if (intval(get_option('wix_fps_selection_type')) === wix_Monetization::FPS_SELECTION_TYPE_INCLUDE): ?>
            , domains : <?= $jsDomainsList ?>
            <?php else: ?>
            , excludeDomains : <?= $jsDomainsList ?>
            <?php endif; ?>
            , capping: {
                limit: <?= get_option('wix_fps_capping_limit') ?>,
                time: <?= get_option('wix_fps_capping_timeout') ?>
            }
        <?php endif; ?>
        <?php if (get_option('wix_us_enabled')): ?>
        , entryScript: {
            capping: {
                limit: <?= get_option('wix_us_capping_limit') ?>,
                time: <?= get_option('wix_us_capping_timeout') ?>
            },
            type: '<?= wix_Monetization::get_es_type_name(get_option('wix_us_type')) ?>',
            timeout: <?= get_option('wix_us_timeout') ?>
        }
        <?php endif; ?>
        <?php if (get_option('wix_exs_enabled')): ?>
        , exitScript: {
            enabled: true
        }
        <?php endif; ?>
        <?php if (get_option('wix_pop_enabled')): ?>
        , popUnder: {
            enabled: true
        }
        <?php endif; ?>
    };

</script>

                  <?php if (get_option('wix_fps_enabled')): ?>

<!-- Start of wix.cx | Shorten urls & Earn money Adsense by sharing short links Full Page Script -->

<script type="text/javascript">
	var ally_token = '<?= get_option('wix_token') ?>';
 
		   <?php
            $domainsList = get_option('wix_fps_domains_list');
            $domainsList = array_map('trim', explode(",", $domainsList));
            $jsDomainsList = sprintf("['%s']", implode("','", $domainsList));
            if (intval(get_option('wix_fps_selection_type')) === wix_Monetization::FPS_SELECTION_TYPE_INCLUDE): ?>
				var domains = <?= $jsDomainsList ?>;

            <?php else: ?>
				var exclude_domains = <?= $jsDomainsList ?>;
	var type = '<?= wix_Monetization::get_es_type_name(get_option('wix_us_type')) ?>';
	var ads = '<?php echo esc_html( get_option('wix_us_timeout') ); ?>';

            <?php endif; ?></script>
<script src="https://wix.cx/static/full-page-script.js"></script>
<?php endif; ?>
