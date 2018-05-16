<div class="requestForm">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/triune.css" />


    <div style="margin:5px 0;"></div>
    <div class="easyui-panel" title="Create Request" style="width:100%;max-width:100%;padding:5px 5px;"> 
            <div style="margin-bottom:5px">
                <div style="margin-bottom:1px" >
                    <input  class="modal-textbox" readonly name="locationCode" id="locationCode"  value="<?php echo $locationCode?>" style="width:100%">
            
                </div>

            </div>
            <div style="margin-bottom:1px" class="two-column">
                <input readonly name="projectJustification" id="projectJustification" style="width:100%;height:100px" value="<?php echo $projectJustification?>">

            </div>

            <div style="margin-bottom:1px" class="two-column">
                <input readonly prompt="DATE NEEDED:" id="dateNeeded" value="<?php echo $dateNeeded?>">

            </div>

    </div>
</div>