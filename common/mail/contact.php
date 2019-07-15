 <?php 
 echo $anyMessage
  ?>
  111
<table style="border: 1px solid #ddd; border-collapse: collapse; width: 100%;">
 <thead>
 <tr style="background: #f9f9f9;">
 <th style="padding: 8px; border: 1px solid #ddd;">#</th>
 <th style="padding: 8px; border: 1px solid #ddd;">Имя</th>
 </tr>
 </thead>
 <tbody>
 <?php $i = 1; foreach($names as $name): ?>
 <tr>
 <td style="padding: 8px; border: 1px solid #ddd;"><?= $i ?></td>
 <td style="padding: 8px; border: 1px solid #ddd;"><?= $name ?></td>
 </tr>
 <?php $i++; endforeach; ?>


 </tbody>
</table>