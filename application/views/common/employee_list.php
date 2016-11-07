<!DOCTYPE html>
<html lang="en">

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h2 class="display-3">Employees and Users</h2>
    <p class="lead">blah blah blah</p>
  </div>
</div>


<table class="table" width="148%" border="0" align="center" cellpadding="1" cellspacing="1">
  <thead>
    <tr>



      <th bgcolor = "#585858" width = "3%"><font size="1" color = "white"></th>
      <th bgcolor = "#585858" width = "3%"><font size="1" color = "white">User ID</th>
      <th bgcolor = "#585858" width = "11%"><font size="1" color = "white">Employee ID</th>
      <th bgcolor = "#585858" width = "12%"><font size="1" color = "white">Full Name</th>
      <th bgcolor = "#585858" width = "11%"><font size="1" color = "white">Position</th>
      <th bgcolor = "#585858" width = "13%"><font size="1" color = "white">Dept/Division</th>  
      <th bgcolor = "#585858" width = "15%"><font size="1" color = "white">Email Address</th>
      
      <th bgcolor = "#585858" width = "20%"><font size="1" color = "white">Address</th>
      <th bgcolor = "#585858" width = "11%"><font size="1" color = "white">Contact #</th>
      <th bgcolor = "#585858" width = "11%"><font size="1" color = "white">Birth Day</th>
      <th bgcolor = "#585858" width = "11%"><font size="1" color = "white">Date Hired</th>
       
      <th bgcolor = "#585858" width = "11%"><font size="1" color = "white">In case of emergency</th>
      <th bgcolor = "#585858" width = "11%"><font size="1" color = "white">UserName</th>
      <th bgcolor = "#585858" width = "3%"><font size="1" color = "white">Biometrics #</th>

    </tr>
  </thead>
  <tbody>
    <?php
    foreach($users as $user) {
    ?>
    <tr>
<!-- <?php
// echo "<td align = 'center' bgcolor = '#D8D8D8'><font size='1'>
//       <a href=\"emp_profile2.php?empID=".$rows['empID']."\" style='text-decoration:none; color: blue' onclick=\"return confirm('View details of .**".$rows['fulname']."?**')\">"; echo $rows['empID']; echo"</a></td>";
?> -->
            <td bgcolor = ''><font size='1'></td>

      <td bgcolor = ''><font size='1'><?= $user['user_id'] ?></td>
      <td bgcolor = ''><font size='1'><?= $user['employee_id'] ?></td>
      <td bgcolor = ''><font size='1'><?= $user['fullname'] ?></td>
      <td bgcolor = ''><font size='1'><?= $user['post'] ?></td>
      <td bgcolor = ''><font size='1'><?= $user['dept'] ?>/<?= $user['divi'] ?></td>
      <td bgcolor = ''><font size='1'><?= $user['email'] ?></td>

      <td bgcolor = ''><font size='1'><?= $user['res_addr'] ?></td>
      <td bgcolor = ''><font size='1'><?= $user['contact_no'] ?></td>
      <td bgcolor = ''><font size='1'><?= $user['bday'] ?></td>
      <td bgcolor = ''><font size='1'><?= $user['datehir'] ?></td>

      <td bgcolor = ''><font size='1'><?= $user['emgcy_cperson'] ?>/<?= $user['emgcy_cno']?></td>
      <td bgcolor = ''><font size='1'><?= $user['username'] ?></td>
      <td bgcolor = ''><font size='1'><?= $user['bio_no'] ?></td>


    </tr>
    <?php
    }
    ?>
    
  </tbody>
</table>

</html>