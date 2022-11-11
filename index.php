<select name="" id="">  
     <?php
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value={$i}>{$i}</option>";
            }
        ?>
</select>
<select name="" id="">  
     <?php
     $mes = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
            for ($i = 0; $i <= 11; $i++) {
                echo "<option value={$i}>{$mes[$i]}</option>";
            }
        ?>
</select>
<select name="" id="">  
     <?php
            for ($i = 2022; $i >= 1990; $i--) {
                echo "<option value={$i}>{$i}</option>";
            } 
        ?>
</select>

