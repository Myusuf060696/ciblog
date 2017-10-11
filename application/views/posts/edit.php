<h2><?=$title ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('posts/update'); ?>
	<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
	<div class="form-group">
		<label for="">Title</label>
		<input type="text" name="title" placeholder="Add title" class="form-control" value="<?php echo $post['title']; ?>">
	</div>
	<div class="form-group">
		<label for="">Body</label>
		<textarea name="body" placeholder="Add Body" id="editor1" class="form-control" ><?php echo $post['body']; ?></textarea>
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>

<script>
               // Replace the <textarea id="editor1"> with a CKEditor
               // instance, using default configuration.
               CKEDITOR.replace( 'editor1' );
           </script>