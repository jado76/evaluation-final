<?php
SELECT * FROM articles a
LEFT JOIN users u
on
a.id_user = u.id
where a.id = 10;