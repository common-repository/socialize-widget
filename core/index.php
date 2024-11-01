<?php
$options = $sw_core_loader->settings;

//var_dump($options);
//exit();
?>


<div class="sw-wrapper wrap sct-wordpress-<?php echo SW_WP_VERSION; ?>">
<div class="sw-header">
<h2>
    <?php _e("Socialize Widget", "socialize-widget"); ?>
    <span class="sct-version"> | <?php echo $sw_core_loader->get('__version__'); ?></span></h2>
    <p class="promo-txt">Easy way to display like buttons</p>
<form id="SSForm" method="post">

<?php settings_fields('socialize-widget'); ?>

<input type="hidden" name="Config" value="1" />
<div id="STabs">
<ul>
    <li><a href="#GeneralSettings"><strong>General</strong></a></li>

</ul>
<?php
//var_dump($options);
?>
<div id="GeneralSettings">
<h3>General Settings</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Like URL</th>
    <td>
        <fieldset>
            <input style="width:400px;" name="LikeUrl" type="text" id="LikeUrl" value="<?php echo  $options['LikeUrl'] ?>" class="" />
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row">Facebook App Id</th>
    <td>
        <fieldset>
            <input style="width:400px;" name="FacebookAppId" type="text" id="FacebookAppId" value="<?php echo  $options['FacebookAppId'] ?>" class="" />
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row">Enable Facebook</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Facebook</span></legend>

            <label for="EnableFacebook">
                <input name="EnableFacebook" <?php echo  ($options['EnableFacebook'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableFacebook" value="1" />
                Enabled
            </label>
            <label for="DisableFacebook">
                <input name="EnableFacebook" <?php echo  ($options['EnableFacebook'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableFacebook" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row">Facebook width</th>
    <td>
        <fieldset>
            <input style="width:50px;" name="FacebookWidth" type="text" id="FacebookWidth" value="<?php echo  $options['FacebookWidth'] ?>" class="" />px
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row">Enable Google Plus</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Google Plus</span></legend>

            <label for="EnableGoogle">
                <input name="EnableGoogle" <?php echo  ($options['EnableGoogle'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableGoogle" value="1" />
                Enabled
            </label>
            <label for="DisableGoogle">
                <input name="EnableGoogle" <?php echo  ($options['EnableGoogle'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableGoogle" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>

<tr valign="top">
    <th scope="row">Google Plus width</th>
    <td>
        <fieldset>
            <input style="width:50px;" name="GoogleWidth" type="text" id="GoogleWidth" value="<?php echo  $options['GoogleWidth'] ?>" class="" />px
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row">Enable Twitter</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Twitter</span></legend>

            <label for="EnableTwitter">
                <input name="EnableTwitter" <?php echo  ($options['EnableTwitter'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableTwitter" value="1" />
                Enabled
            </label>
            <label for="DisableTwitter">
                <input name="EnableTwitter" <?php echo  ($options['EnableTwitter'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableTwitter" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row">Twitter width</th>
    <td>
        <fieldset>
            <input style="width:50px;" name="TwitterWidth" type="text" id="TwitterWidth" value="<?php echo  $options['TwitterWidth'] ?>" class="" />px
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row">Enable Pinterest</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Pinterest</span></legend>

            <label for="EnablePinterest">
                <input name="EnablePinterest" <?php echo  ($options['EnablePinterest'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnablePinterest" value="1" />
                Enabled
            </label>
            <label for="DisablePinterest">
                <input name="EnablePinterest" <?php echo  ($options['EnablePinterest'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisablePinterest" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>

<tr valign="top">
    <th scope="row">Pinterest width</th>
    <td>
        <fieldset>
            <input style="width:50px;" name="PinterestWidth" type="text" id="PinterestWidth" value="<?php echo  $options['PinterestWidth'] ?>" class="" />px
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row">Enable StumbleUpon</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable StumbleUpon</span></legend>

            <label for="EnableStumbleUpon">
                <input name="EnableStumbleUpon" <?php echo  ($options['EnableStumbleUpon'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableStumbleUpon" value="1" />
                Enabled
            </label>
            <label for="DisableStumbleUpon">
                <input name="EnableStumbleUpon" <?php echo  ($options['EnableStumbleUpon'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableStumbleUpon" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>

<tr valign="top">
    <th scope="row">StumbleUpon width</th>
    <td>
        <fieldset>
            <input style="width:50px;" name="StumbleUponWidth" type="text" id="StumbleUponWidth" value="<?php echo  $options['StumbleUponWidth'] ?>" class="" />px
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row">Enable LinkedIn</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable LinkedIn</span></legend>

            <label for="EnableLinkedIn">
                <input name="EnableLinkedIn" <?php echo  ($options['EnableLinkedIn'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableLinkedIn" value="1" />
                Enabled
            </label>
            <label for="DisableLinkedIn">
                <input name="EnableLinkedIn" <?php echo  ($options['EnableLinkedIn'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableLinkedIn" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>

<tr valign="top">
    <th scope="row">LinkedIn width</th>
    <td>
        <fieldset>
            <input style="width:50px;" name="LinkedInWidth" type="text" id="LinkedInWidth" value="<?php echo  $options['LinkedInWidth'] ?>" class="" />px
        </fieldset>
    </td>
</tr>

</tbody>
</table>
</div>

</div>
<p class="submit">
    <input type="submit" name="submit" id="submit" class="button-primary" value="Save settings" />
</p>
</form>

<script type="text/javascript">
jQuery(function(){
    jQuery('#STabs').tabs();
});
</script></div>