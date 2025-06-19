<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
   <tr>
      <td>
         <table width="500" border="0" cellspacing="0" cellpadding="0" align="center"
            style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif;">
            <tr style="border: 1px solid #ddd; background-color: #e4e4e1">
               <td style="font-weight: bold; padding: 8px;">Nombre:</td>
               <td><?php echo esc_html($data['name']); ?> </td>
            </tr>
            <tr style="border: 1px solid #ddd;">
               <td style="font-weight: bold; padding: 8px;">Apellido:</td>
               <td><?php echo esc_html($data['lastName']); ?> </td>
            </tr>
            <tr style="border: 1px solid #ddd; background-color: #e4e4e1">
               <td style="font-weight: bold; padding: 8px;">Empresa:</td>
               <td><?php echo esc_html($data['company']); ?> </td>
            </tr>
            <tr style="border: 1px solid #ddd;">
               <td style="font-weight: bold; padding: 8px;">Correo:</td>
               <td><?php echo esc_html($data['email']); ?> </td>
            </tr>
            <tr style="border: 1px solid #ddd; background-color: #e4e4e1">
               <td style="font-weight: bold; padding: 8px;">País:</td>
               <td><?php echo esc_html($data['country']); ?> </td>
            </tr>
            <tr style="border: 1px solid #ddd;">
               <td style="font-weight: bold; padding: 8px;">Teléfono:</td>
               <td><?php echo esc_html($data['phone']); ?> </td>
            </tr>
            <tr style="border: 1px solid #ddd; background-color: #e4e4e1">
               <td style="font-weight: bold; padding: 8px;">Tipo de necesidad:</td>
               <td><?php echo esc_html($data['businessType']); ?> </td>
            </tr>
            <tr style="border: 1px solid #ddd;">
               <td style="font-weight: bold; padding: 8px;">Descripción de necesidad:</td>
               <td><?php echo esc_html($data['description']); ?> </td>
            </tr>
            <tr style="border: 1px solid #ddd; background-color: #e4e4e1">
               <td style="font-weight: bold; padding: 8px;">¿Aceptó políticas?:</td>
               <td><?php echo esc_html($data['policies']); ?> </td>
            </tr>
            <tr style="border: 1px solid #ddd;">
               <td style="font-weight: bold; padding: 8px;">URL de registro:</td>
               <td><?php echo esc_html($data['url']); ?> </td>
            </tr>
            <tr style="border: 1px solid #ddd; background-color: #e4e4e1">
               <td style="font-weight: bold; padding: 8px;">Fecha de registro:</td>
               <td><?php echo esc_html($data['date_created']); ?> </td>
            </tr>
         </table>
      </td>
   </tr>
</table>