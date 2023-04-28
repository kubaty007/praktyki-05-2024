Zakładając, że posiadamy poniższą tablicę w PHP i chcemy wyświetlić piwa w formie listy nienumerowanej, możemy to zrobić na dwa popularne sposoby.

```
<?php

$box_of_beer = [
    ['name' => 'Tyskie'],
    ['name' => 'Zimny Lech'],
    ['name' => 'Warka']
]
```

### Sposób 1 - tylko PHP

```
echo '<div>';
    echo '<ul>';
        foreach ($box_of_beer => $single_beer) {
            echo '<li>'.$single_beer['name'].'</li>';
        }
    echo '</ul>';
echo '</div>';
```

### Sposób 2 - PHP + HTML

```
?><div>
    <ul>
        <?
        foreach ($box_of_beer => $single_beer) {
            ?><li><?=$single_beer['name'];?></li><?
        }
        ?>
    </ul>
</div><?
```
