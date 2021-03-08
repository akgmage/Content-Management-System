<div id="footer">Copyright <?php echo date("Y"); ?>, Widget C orp</div>
</body>
</html>
<?php 
     // 5. Close database connection
    if(isset($connection)){
    mysqli_close($connection); 
	}
?>