<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
    background-color: #f0f0f0;
  }

  .table-container {
    width: 100%;
    max-width: 800px;
    overflow-x: auto;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    border: 2px solid black;
    table-layout: fixed;
  }

  th, td {
    border: 1px solid black;
    padding: 10px;
    text-align: center;
    font-size: 18px;
  }

  @media (max-width: 600px) {
    th, td {
      font-size: 14px;
    }
  }
</style>
</head>
<body>
<div class="table-container">
  <table>
    <thead>
      <tr>
        <th></th>
        <th>A</th>
        <th>B</th>
        <th>C</th>
        <th>D</th>
        <th>E</th>
        <th>F</th>
        <th>G</th>
        <th>H</th>
        <th>I</th>
        <th>J</th>
        <th>K</th>
        <th>L</th>
        <th>M</th>
        <th>N</th>
        <th>O</th>
        <th>P</th>
        <th>Q</th>
        <th>R</th>
        <th>S</th>
        <th>T</th>
        <th>U</th>
        <th>V</th>
        <th>W</th>
        <th>X</th>
        <th>Y</th>
        <th>Z</th>
      </tr>
    </thead>
    <tbody>
      <!-- Generating rows and columns with alphabets -->
      <?php
      $alphabets = range('A', 'Z');
      foreach ($alphabets as $alphabet) {
        echo '<tr>';
        echo "<th>$alphabet</th>";
        foreach ($alphabets as $innerAlphabet) {
          echo '<td></td>';
        }
        echo '</tr>';
      }
      ?>
    </tbody>
  </table>
</div>
</body>
</html>
