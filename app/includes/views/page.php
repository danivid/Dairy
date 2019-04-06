    <form style="padding-left: 60px;" action="save_page.php" method="POST">
	  <textarea name="editor_content" id="myEditor"></textarea>
	  <button>Submit</button>
	</form>
	 
    <!-- Include external JS libs. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
 
    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/js/froala_editor.pkgd.min.js"></script>
     
	<script>
		/* When loaded, start the textarea */
	  	$(function() {
	    	$('#myEditor').froalaEditor({toolbarInline: false})
	  	});
	</script>