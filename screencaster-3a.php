<?php
$companies = array
             ( array("Company"=>"Archenland Limited", "Amounts"=>"$100,-1200,300,-700,678" , "Debits"=>1700, "Balance"=>1278),
               array("Company"=>"Narnia Gmb.", "Amounts"=>"$530,-23,670,3,-1299" , "Debits"=>"1299,3", "Balance"=>1203),
               array("Company"=>"Loneislands Pty.", "Amounts"=>"-7568,39,49,-37,3000,98" , "Debits"=>"37,7568", "Balance"=>3186) 
             ); 
?>

<?php if (count($companies) > 0): ?>
<table>
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($companies))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($companies as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif;
 ?>