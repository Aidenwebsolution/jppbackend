<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Create schedule</h4>
</div>
<form class='col s12' method='post' action='<?php echo site_url("site/createschedulesubmit");?>' enctype= 'multipart/form-data'>
<div class=" row">
<div class=" input-field col s6">
<?php echo form_dropdown("stadium",$stadium,set_value('stadium'));?>
<label>stadium</label>
</div>
</div>
<div class=" row">
<div class=" input-field col s6">
<?php echo form_dropdown("team1",$team1,set_value('team1'));?>
<label>Team 1</label>
</div>
</div>
<div class=" row">
<div class=" input-field col s6">
<?php echo form_dropdown("team2",$team2,set_value('team2'));?>
<label>Team 2</label>
</div>
</div>
 <div class="row">
            <div class="input-field col s12 m6">
                <input type="date" class="datepicker" name="startdate" value="<?php echo set_value('startdate');?>">
                <label>Start Date</label>
            </div>
        </div>
  <div class="row">
            <div class="input-field col s6" style="margin-top: -18px;">
                <label for="Start Time">Start Time</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col m3 s6">
                <span class="combodate"><select class="hour1" style="width: auto;"><option value="00">00</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option></select>
                 <label>Hour</label></span>
            </div>
            <div class="input-field col m3 s6">
                <span class="combodate"><select class="minute1" style="width: auto;"><option value="00">00</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option></select>
               <label>Minute</label></span>
            </div>
        </div>
         <div class="row" style="display:none">
            <div class="input-field col s6">
                <label for="starttime">Start Time</label>
                <input type="text" id="starttime" name="starttime" value='<?php echo set_value('starttime');?>'>
            </div>
        </div>
        <div class="row">
<div class="input-field col s6">
<label for="score1">Score1</label>
<input type="text" id="score1" name="score1" value='<?php echo set_value('score1');?>'>
</div>
</div> 
  <div class="row">
<div class="input-field col s6">
<label for="score2">Score2</label>
<input type="text" id="score2" name="score2" value='<?php echo set_value('score2');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="Book Ticket">Book Ticket</label>
<input type="text" id="Book Ticket" name="bookticket" value='<?php echo set_value('bookticket');?>'>
</div>
</div>
<div class="row">
<div class="col s12 m6">
<button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
<a href="<?php echo site_url("site/viewschedule"); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
</div>
</div>
</form>
</div>
<script>
    $(document).ready(function() {
     
        function changestarttime() {
            $("#starttime").val($(".combodate select.hour1").val() + ":" + $(".combodate select.minute1").val());

        }
        $(".combodate select.hour1").change(changestarttime);
        $(".combodate select.minute1").change(changestarttime);
        changestarttime();

    });

</script>