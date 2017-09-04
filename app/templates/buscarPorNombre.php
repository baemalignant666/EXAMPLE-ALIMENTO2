<?php ob_start() ?>
<br><br>
      <form name="formBusqueda" action="index.php?ctl=buscar" method="POST">
          <table width="80%" border="1" bordercolor="#0000FF" cellspacing="10" cellpadding="10">
              <tr bgcolor="FEFCFC">
                  <td valign="middle" align="middle">Nombre Alimento:</td>
                  <td valign="middle" align="middle"><input type="text" name="nombre" value="<?php echo $params['nombre']?>">(puedes utilizar '%' como comodin)</td>
                  <td valign="middle" align="middle"><input type="submit" value="buscar"></td>
              </tr>
          </table>
          </table>
      </form>
      <?php if (count($params['resultado'])>0): ?>
      <table width="50%" border="1" bordercolor="#0000FF" cellspacing="10" cellpadding="10">
         <tr bgcolor="FEFCFC">
             <th>alimento (por 100g)</th>
             <th>energia (Kcal)</th>
             <th>grasa (g)</th>
         </tr>
         <?php foreach ($params['resultado'] as $alimento) : ?>
             <tr>
                 <td valign="middle" align="middle"><a href="index.php?ctl=ver&id=<?php echo $alimento['id'] ?>">
                         <?php echo $alimento['nombre'] ?></a></td>
                 <td valign="middle" align="middle"><?php echo $alimento['energia'] ?></td>
                 <td valign="middle" align="middle"><?php echo $alimento['grasatotal'] ?></td>
             </tr>
         <?php endforeach; ?>
     </table>
      <?php endif; ?>
      <?php $contenido = ob_get_clean() ?>
      <?php include 'layout.php' ?>
