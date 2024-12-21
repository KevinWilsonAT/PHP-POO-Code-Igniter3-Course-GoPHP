<?php
	class Father {
		
		function money() {
			echo "<p>I have 10 money</p>";
		}
		
		function vehicles() {
			echo "<p>I have 2 vehicles</p>";
		}
	}
	
	class Child extends Father {
		function money() {
			parent::money();
			echo "<p>I have 5 money</p>";
		}
	}
	
	$cobj = new Child();
	$cobj -> money();
	$cobj -> vehicles();
?>