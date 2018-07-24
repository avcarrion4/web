<?php include "conexion.php"; ?>
<html>
	<head>
		<script language="javascript">
			var idarea = new Array();
			var idperiodo =  new Array();
			var area = new Array();

			var idarea = new Array();
			var idtitulaciones = new Array();
			var titulacion = new Array();

			var idtitulacion = new Array();
			var idmateria = new Array();
			var materias = new Array();
			
			function limpiarArea() {
				var reference = document.frmCombos.cmbArea;
				var largo = reference.options.length;
				for ( j = 0; j < 8; j++ )
					for ( i = 0; i < largo; i++ )
						document.frmCombos.cmbArea.remove(i);
			}

			function limpiarTitulacion() {
				var reference = document.frmCombos.cmbtitulacion;
				var largo = reference.options.length;
				for ( j = 0; j < 8; j++ )
					for ( i = 0; i < largo; i++ )
						document.frmCombos.cmbtitulacion.remove(i);
			}

			function limpiarMaterias() {
				var reference = document.frmCombos.cmbMateria;
				var largo = reference.options.length;
				for ( j = 0; j < 8; j++ )
					for ( i = 0; i < largo; i++ )
						document.frmCombos.cmbMateria.remove(i);
			}
			
			function cargarArea(valor) {
				var longitud = idperiodo.length;
				var reference = document.frmCombos.cmbArea;
				var i = 0;
				var j = 0;
				
				limpiarArea();
				
				for ( i = 0; i < longitud; i++ ) {
						if ( idperiodo[i] == valor ) {
							var newOption = new Option(area[i], idarea[i]);
							reference.options[j] = newOption;
							j++;
						}
				}
				document.frmCombos.totalArea.value = j + ' Areas';
			}

			function cargarTitulacion(valor) {
				var longitud = idarea.length;
				var reference = document.frmCombos.cmbtitulacion;
				var i = 0;
				var j = 0;
				
				limpiarMaterias();

				
				for ( i = 0; i < longitud; i++ ) {
						if ( idarea[i] == valor ) {

							var newOption = new Option(titulacion[i], idtitulacion[i]);
							reference.options[j] = newOption;
							j++;
						}
				}
				document.frmCombos.totalTitulacion.value = j + ' Titulaciones';
			}

			function cargarMaterias(valor) {
				var longitud = idtitulacion.length;
				var reference = document.frmCombos.cmbMateria;
				var i = 0;
				var j = 0;
				
				limpiarMaterias();

				
				for ( i = 0; i < longitud; i++ ) {
						if ( idtitulacion[i] == valor ) {

							var newOption = new Option(materias[i], idmateria[i]);
							reference.options[j] = newOption;
							j++;
						}
				}
				document.frmCombos.totalMateria.value = j + ' materias';
			}
			
		</script>
	</head>
	<body>
		<?php
			if ( isset($_REQUEST['rutear']) ) {
				echo "Periodo: " . $_REQUEST['cmbPeriodo'] . "<br>";
				echo "Total: " . $_REQUEST['totalArea'] . "<br>";
				echo "Area: " . $_REQUEST['cmbArea'] . "<br>";
				echo "Titulacion: " . $_REQUEST['cmbtitulacion'] . "<br>";
				echo "Total: " . $_REQUEST['totalMateria'] . "<br>";
				echo "Total: " . $_REQUEST['totalTitulacion'] . "<br>";
				echo "Materia: " . $_REQUEST['cmbMateria'] . "<br>";

			} else
				mostrarFormulario();
		?>
	</body>
</html>

<?php
	function mostrarFormulario() {
		echo '
		<form name="frmCombos" method="post" action="index.php">
			<table border="2">
				<tr>
					<td>Periodo:</td>
					<td>' . llenarPeriodo() . '</td>
					<td>Areas:</td>
					<td>' . llenarArea() . '</td>
				</tr>
				<tr>
					<td>Titulaciones:</td>
					<td>' . llenarTitulacion() . '</td>
					<td>Materias:</td>
					<td>' . llenarMateria() . '</td>
				</tr>
				<tr>
					<td>Total Areas:</td>
					<td colspan="1"><input type="text" name="totalArea" id="totalArea" /></td>
					<td>Total Materias:</td>
					<td colspan="2"><input type="text" name="totalMateria" id="totalMateria" /></td>
					<td>Total Titulaciones:</td>
					<td colspan="3"><input type="text" name="totalTitulacion" id="totalTitulacion" /></td>
				</tr>
			</table>
		</form>
		';
	}
	
	function llenarPeriodo() {
		$db = new MySql();
		$query = "SELECT id_periodo, anio FROM periodo WHERE id_periodo > 0 ORDER BY anio ASC;";
		$consulta = $db->consulta($query);
		$combo = "";
		$i = 0;
		if ( $db->num_rows($consulta) > 0 ) {
			$combo= '<select name="cmbPeriodo" onchange="cargarArea(value);">';
			while ( $resultados = $db->fetch_array($consulta)) {
				if ( $i == 0 )
					$combo .= '<option value="-1">Selecciona...</option>' . "\n";
				$combo .= '<option value="' . $resultados[0] . '">' . $resultados[1] . "</option>\n";
				$i++;
			}
			$combo .= "</select>\n";
		}
		return $combo;
	}
	
	function llenarArea() {
		$db = new MySql();
		$query = "SELECT id_area, id_periodo, nombre_area FROM area WHERE id_area > 0 ORDER BY nombre_area ASC;";
		$consulta = $db->consulta($query);
		$combo = "";
		if ( $db->num_rows($consulta) > 0 ) {
			$combo= '<select name="cmbArea">';
			$i = 0;
			echo "<script language='javascript'>\n";
			while ( $resultados = $db->fetch_array($consulta)) {
				echo "idarea[" . $i . "] = " . $resultados[0] . ";\n";
				echo "idperiodo[" . $i . "] = " . $resultados[1] . ";\n";
				echo "area[" . $i . "] = '" . $resultados[2] . "';\n";
				$i++;
			}
			echo "</script>\n";
			$combo .= "</select>\n";
		}
		return $combo;			
	}

	function llenarTitulacion(){
		
		$db = new MySql();
		$query = "SELECT id_titulacion, nombre_titulacion FROM titulacion WHERE id_titulacion > 0 ORDER BY nombre_titulacion ASC;";
		$consulta = $db->consulta($query);
		$combo = "";
		$i = 0;
		if ( $db->num_rows($consulta) > 0 ) {
			$combo= '<select name="cmbtitulacion" onchange="cargarMaterias(value);">';
			while ( $resultados = $db->fetch_array($consulta)) {
				if ( $i == 0 )
					$combo .= '<option value="-1">Selecciona...</option>' . "\n";
				$combo .= '<option value="' . $resultados[0] . '">' . $resultados[1] . "</option>\n";
				$i++;
			}
			$combo .= "</select>\n";
		}
		return $combo;
		
	}

	function llenarMateria(){

		$db = new MySql();
		$query = "SELECT id_materia, id_titulacion, nombre_materia FROM materia WHERE id_materia > 0 ORDER BY nombre_materia ASC;";
		$consulta = $db->consulta($query);
		$combo = "";
		if ( $db->num_rows($consulta) > 0 ) {
			$combo= '<select name="cmbMateria">';
			$i = 0;
			echo "<script language='javascript'>\n";
			while ( $resultados = $db->fetch_array($consulta)) {
				echo "idmateria[" . $i . "] = " . $resultados[0] . ";\n";
				echo "idtitulacion[" . $i . "] = " . $resultados[1] . ";\n";
				echo "materias[" . $i . "] = '" . $resultados[2] . "';\n";
				$i++;
			}
			echo "</script>\n";
			$combo .= "</select>\n";
		}
		return $combo;
	}
?>














