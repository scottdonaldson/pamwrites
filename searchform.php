<form action="/" method="get">
	<fieldset>
    	<aside id="searchform">
        	<?php $search_text = 'Search'; ?> 

        	<input type="text" value="<?php echo $search_text; ?>" name="s" id="search"  
				onblur="if (this.value == '') {this.value = '<?php echo $search_text; ?>';}"  
				onfocus="if (this.value == '<?php echo $search_text; ?>') {this.value = '';}" /> 
		</aside>
	</fieldset>
</form>
