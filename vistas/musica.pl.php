	<div class="music">
		<div id="reproductorBox">
		</div>
		<select  id = "selectTrack" multiple onchange="cambiarTrack(this.options[this.selectedIndex]);">
			<option path="music/a.mp3">Invierno del 92</option>
			<option path="music/b.mp3">El dia que artigas se emborachó</option>
			<option path="music/c.mp3">Invierno del 92</option>
			<option path="music/d.mp3">El dia que artigas se emborachó</option>

		</select>
		<script>cargarReproductor();</script>
	</div>
</body>
</html>