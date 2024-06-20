*php crud api example with dbAuth*

copy api.php + include.api.php on your site
copy log.html
configure DB in api.php
ensure that the Users table as id as  primary key + 2 columns set as in api.php
if needed create a user with xxxx/api.php/register (you can modify for that the log.html)
run log.html ...
<!> the post and the get are async ... so time to time the get (/me) can be done after the post... need to be better coded
