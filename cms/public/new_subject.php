<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php find_selected_page(); ?>
<?php $layout_context = "admin"; ?> 
<?php include("../includes/layouts/header.php"); ?>

<div id="main">
	<div id="navigation">
		<?php echo navigation($current_subject, $current_page); ?>
	</div>	
	<div id="page">
		<form action="create_subject.php" method="post">
			<p><input type="text" name="menu_name" placeholder="Menu Name"/></p>
			<p>Position
				<select name="position">
					<?php
					$subject_set = find_all_subjects();
					$subject_count = mysqli_num_rows($subject_set);
					for($count=1; $count<= $subject_count + 1; $count++) {
						echo "<option value=\"{$count}\">{$count}</option>";
					} 
					?>
					
				</select>
			</p>
			<p>Visible
				<input type="radio" name="visible" value="0"/>No &nbsp;
				<input type="radio" name="visible" value="1"/>Yes
			</p>
			<p><input type="submit" name="submit" value="Create Subject"/></p>
		</form>
		<?php
		 echo message(); 
		 $errors = errors();
		 echo form_errors($errors);
		 ?>
			
		<a href="manage_content.php">Cancel</a>
	</div>
</div>


<?php include("../includes/layouts/footer.php"); ?>
