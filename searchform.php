<style type="text/css" scoped>
	fieldset {
		border:none;
		margin-top: 0px;
	}

	.searchbox input {
		font-family:Arial, Helvetica, sans-serif; 
		font-size:13px; 
		width:275px;
		height:29px; 
		background: #fff;
		border:1px solid #3F6287;
		border-radius:5px;
		color: #2A2A2A;
		-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.075);
		-moz-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.075);
		box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.075);
		-webkit-transition:border linear 0.2s,box-shadow linear 0.2s;
		-moz-transition:border linear 0.2s,box-shadow linear 0.2s;
		-ms-transition:border linear 0.2s,box-shadow linear 0.2s;
		-o-transition:border linear 0.2s,box-shadow linear 0.2s;
		transition:border linear 0.2s,box-shadow linear 0.2s;
	}

	.searchbox input:focus {
		border:1px solid #DCE5EE;
		border-color:rgba(82, 168, 236, 0.8);
		outline:0;outline:thin dotted \9;
		-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(82,168,236,.6);
		-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(82,168,236,.6);
		box-shadow:inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(82,168,236,.6);
	}

	div.keterangan {
		font-size: 10px;
		color: #eee;
		float: right;
	}
</style>

<form action="<?php bloginfo('url');?>" method="get" name="formcari">
    <fieldset>
        <div class="searchbox">
        	<input type="text" name="s" value="Search on this site..." onBlur="if (this.value == '') {this.value = 'Search on this site...';}" onFocus="if (this.value == 'Search on this site...') {this.value = '';}"/>
        	<br>
        	<div class="keterangan">press ENTER to search</div>
        </div>
    </fieldset>
</form>