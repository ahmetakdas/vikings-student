<?
function print_textfield($sName, $sLabel, $sPlaceholder = false, $bRequired = false){
	global $aErrors;
	?>
    <div class="units-row form_row">
        <div class="unit-30"><label for="input_<?=$sName?>"><?=$sLabel?></label></div>
        <div class="unit-70">
            <input type="text" id="input_<?=$sName?>" name="<?=$sName?>" value="<? (isset($_POST[$sName]) ? print $_POST[$sName] : NULL)?>" placeholder="<? ($sPlaceholder ? print $sPlaceholder : '') ?>"<? (isset($aErrors[$sName]) ? print ' class="error"' : NULL)?> />
            <? if(isset($aErrors[$sName])){?><div class="form_error"><?=$aErrors[$sName]?></div><? } ?>
        </div>
    </div>
    <?	
}

function print_textarea($sName, $sLabel, $sPlaceholder = false, $bRequired = false){
	global $aErrors;
	?>
    <div class="units-row form_row">
        <div class="unit-30"><label for="input_<?=$sName?>"><?=$sLabel?></label></div>
        <div class="unit-70">
            <textarea id="input_<?=$sName?>" name="<?=$sName?>" placeholder="<? ($sPlaceholder ? print $sPlaceholder : '') ?>"<? (isset($aErrors[$sName]) ? print ' class="error"' : NULL)?>><? (isset($_POST[$sName]) ? print $_POST[$sName] : NULL)?></textarea>
            <? if(isset($aErrors[$sName])){?><div class="form_error"><?=$aErrors[$sName]?></div><? } ?>
        </div>
    </div>
    <?	
}