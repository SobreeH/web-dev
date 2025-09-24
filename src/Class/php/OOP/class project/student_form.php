
<html>
<head></head>

<body>

<form action="view_student.php" method="POST">
  <table>
          <tr>
            <td width="151"><label>student name: </label></td>
            <td width="160"><p>
              <input value="" name="name" type="text" required />
            </p></td>
          </tr>
          <tr>
              <td>Sex</td>
              <td><p>
                <select name="sex">
                    <option value="Man">ผู้ชาย</option>
                    <option value="Women">ผู้หญิง</option>
                </select>
              </p></td>
          </tr>
          <tr>
              <td><label>Age: </label></td>
              <td><input name="age" type="text" required /></td>
          </tr>
          <tr>
            <td>Faculty: </td>
            <td><input name="faculty" type="text" required /></td>
          </tr>
          <tr>
            <td>Major:</td>
            <td><input name="major" type="text" required /></td>
          </tr>
          <tr>
              <td>Year Start</td>
              <td><input name="yearstart" type="text" required /></td>
          </tr>
          <tr>
              <td>role</td>
              <td><select name="ptime">
                    <option value="Full-time">full time</option>
                    <option value="Part-time">part-time</option>
                </select>
            </td>
          </tr>
          
      </table>

      <button type="submit" class="green big" name="submit"><span>Login</span></button> 
      <button type="reset" class="grey big"><span>Cancel</span></button>
 </form>
      <button><a href="index.php">Back</a></button>

</body>
</html>
