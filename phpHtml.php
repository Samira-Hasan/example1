<?php
  $result='';
  if (isset($_POST['btn'])){
      echo'<pre>';
      print_r ($_POST);
      $first_name = $_POST['first_num'];
      $second_name = $_POST['second_num'];
      $btn = $_POST['btn'];

      switch($btn){
          case '+':
              $result = $first_name + $second_name;
              break;
          case '-':
              $result = $first_name - $second_name;
              break;
          case '*':
              $result = $first_name * $second_name;
              break;
          case '/':
              if ($second_name != 0){
                  $result = $first_name/ $second_name;
              }
              else{
                  $result = 'second number cannot be zero';
              }
              break;
          case '%':
              $result = $first_name % $second_name;
              break;

      }
  }
?>




<form action="" method="post">
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="number" name="first_num"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="number" name="second_num"></td>
        </tr>
        <tr>
            <td>Full Name</td>
            <td><input type="number" value="<?php echo $result; ?>"></td>
        </tr>
        <tr>
            <td> </td>
            <td>
                <input type="submit" name="btn" value="+">
            <input type="submit" name="btn" value="-">
            <input type="submit" name="btn" value="*">
            <input type="submit" name="btn" value="/">
            <input type="submit" name="btn" value="%">
            </td>

        </tr>
    </table>
</form>


