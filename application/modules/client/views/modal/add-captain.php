<div class="form-heading"> service captain </div>
                                  
<div class="insure-txt">
    <h2>to ensure the best experience for you and your event, we recommend having a captain. </h2>
    <p><a href="javascript:void(0)" data-toggle="modal" data-target=".captain-info"> to learn more, click here. </a> </p>
</div>

<div class="piolet-pic">
      <img src="<?=base_url()?>resource/images/captain.png" alt="">
</div>
<?php if($quantity>=5 && $quantity<=9) { ?>

<div class="select-skill">
    <div class="text-center">
        <div data-toggle="buttons" class="btn-group">
            <label class="btn btn-primary">
                yes! add a captain <input type="checkbox" name="captain<?=$id?>" value="Yes" onchange="updatecost<?=$id?>(this,<?=$time?>)"> 
            </label>
        </div>
    </div>
</div>
<?php } else { ?>
<div class="select-skill">
    <div class="text-center">
        <div data-toggle="buttons" class="btn-group">
            <label class="btn btn-primary active">
                yes! add a captain <input type="checkbox" checked="" name="captain<?=$id?>" checked=""  autocomplete="off" disabled>
                <input type="hidden" name="captain<?=$id?>" value="Yes"> 
            </label>
        </div>
    </div>
</div>
<?php } ?>