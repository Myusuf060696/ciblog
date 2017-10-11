<h2><?=$title ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('posts/create'); ?>
	<div class="form-group">
		<label for="">Title</label>
		<input type="text" name="title" placeholder="Add title" class="form-control">
	</div>
	<div class="form-group">
		<label for="">Body</label>
		<textarea name="body" placeholder="Add Body" id="editor1" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label for="">Category</label>
		<select name="category_id" id="" class="form-control">
			<?php foreach($categories as $categori): ?>
				<option value="<?php echo $categori['id']; ?>"><?php echo $categori['name']; ?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<div class="form-group">
		<label for="">Upload</label>
		<input type="file" name="userfile" size="20">
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>

<script>
               // Replace the <textarea id="editor1"> with a CKEditor
               // instance, using default configuration.
               CKEDITOR.replace( 'editor1' );
           </script>