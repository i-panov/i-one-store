	</div>
		<!-- Production -->
	<script src="https://unpkg.com/@popperjs/core@2"></script>
	<script src="https://unpkg.com/tippy.js@6"></script>
	<?php if ($_SERVER['SERVER_NAME'] === 'car-team.loc'): ?>
		<script type="text/javascript" src="http://localhost:8080/dist/main.js"></script>
	<?php else: ?>
		<script type="text/javascript" src="dist/main.js"></script>
	<?php endif ?>
	
	
</body>
</html>