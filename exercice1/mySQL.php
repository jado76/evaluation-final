<?php
SELECT id
FROM users
INNER JOIN articles
    ON users.id = articles.id_user
WHERE articles.id = '10';